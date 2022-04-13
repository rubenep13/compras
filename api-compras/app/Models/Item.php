<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Item extends Model
{   
    protected $table = 'items';
    protected $fillable = [
        'product_id', 'amount'
    ];
    public $timestamps = false;

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
