CREATE DATABASE IF NOT EXISTS app_compra_ruben;
USE app_compra_ruben;

CREATE TABLE products(
    id      INT             AUTO_INCREMENT PRIMARY KEY,
    name    VARCHAR(50)     NOT NULL,
    price   DECIMAL(6,2)    NOT NULL         
);

CREATE TABLE items(
    id          INT         AUTO_INCREMENT PRIMARY KEY,
    product_id  INT,
    amount      INT,
    CONSTRAINT fk_ProductItems FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO products(name, price) VALUES("Poma", 0.34);
INSERT INTO products(name, price) VALUES("Formatge", 2.99);
INSERT INTO products(name, price) VALUES("Gelat Xocolata", 4.75);
INSERT INTO products(name, price) VALUES("Xampu", 2.00);
INSERT INTO products(name, price) VALUES("Detergent", 6.23);
INSERT INTO products(name, price) VALUES("Plàtan", 0.54);
INSERT INTO products(name, price) VALUES("Pernil", 6.43);
INSERT INTO products(name, price) VALUES("Pizza", 3.50);
INSERT INTO products(name, price) VALUES("Macarrons", 0.99);
INSERT INTO products(name, price) VALUES("Llet", 3.62);
INSERT INTO products(name, price) VALUES("Llenties", 1.03);
INSERT INTO products(name, price) VALUES("Escopinyes", 4.56);
INSERT INTO products(name, price) VALUES("Llom", 1.46);
INSERT INTO products(name, price) VALUES("Ketchup", 2.05);

INSERT INTO items(product_id, amount) VALUES(1, 8);
INSERT INTO items(product_id, amount) VALUES(2, 2);
INSERT INTO items(product_id, amount) VALUES(3, 1);
INSERT INTO items(product_id, amount) VALUES(4, 1);
INSERT INTO items(product_id, amount) VALUES(5, 2);
INSERT INTO items(product_id, amount) VALUES(6, 10);
INSERT INTO items(product_id, amount) VALUES(7, 3);
INSERT INTO items(product_id, amount) VALUES(8, 2);
INSERT INTO items(product_id, amount) VALUES(9, 2);
INSERT INTO items(product_id, amount) VALUES(10, 4);
INSERT INTO items(product_id, amount) VALUES(11, 2);
INSERT INTO items(product_id, amount) VALUES(12, 1);
INSERT INTO items(product_id, amount) VALUES(13, 3);
INSERT INTO items(product_id, amount) VALUES(14, 1);

