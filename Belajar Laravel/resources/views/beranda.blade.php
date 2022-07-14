<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Beranda</title>
</head>
<body>
    <h1>Beranda</h1>
    <p>Hello World!</p>
    <br>
    <h2>List Product</h2>
    <a href="/product/create">Add New Product</a>
        <?php
            foreach($products as $product){
                echo "<li>Nama : {$product->name} </li>";
                echo "Price : {$product->price} <br>";
                echo "Stok : {$product->stock} <br>";
                echo "Image : {$product->image} <br>";
            }
        ?>

    <br>
    <a href="/about">ABOUT</a>
</body>
</html>