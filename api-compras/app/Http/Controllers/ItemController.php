<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Product;
class ItemController extends Controller
{
    public function index(){
        return Item::all();
    }

    public function lista(){
        $items = Item::all();
        foreach($items as &$item){
            $product = Product::find($item->product_id);
            $item->name = $product->name;
            $item->total_price = $item->amount * $product->price;   
        }
        return response()->json($items);
    }

    public function detail($id){
        $item = Item::find($id);
        $product = Product::find($item->product_id);
        $item->name = $product->name;
        $item->price = $product->price;
        $item->total_price = $item->amount * $product->price;   
        return response()->json($item);
    }

    public function add(Request $request){
        $request->validate([
            'name' => 'required|string|unique:products',
            'amount' => 'required|numeric',
            'single_price' => 'required|numeric'
        ]);

        $id = Product::create([
            'name'  => $request->name,
            'price' => $request->single_price
        ])->id;

        Item::create([
            'product_id'    => $id,
            'amount'        => $request->amount 
        ]);

        $data = [
            'status'    => 'success',
            'message'   => 'Nova entrada creada correctament'
        ];
        return response()->json($data, 200);
    }

    public function delete($id){
        $item = Item::find($id);
        if($item != null){
            $item->delete();
            $data = [
                'status'    => 'success',
                'message'   => 'Entrada esborrada correctament',
                'code'      => 200
            ];
        } else {
            $data = [
                'status'    => 'error',
                'message'   => "L'entrada no existeix",
                'code'      => 400
            ];
        }
        return response()->json($data, 200);
    }
}
