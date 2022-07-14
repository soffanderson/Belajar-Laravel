<h2>Hello World!</h2>
    <h2>Halaman beranda</h2>
    <br>
    <h2>List Product Toko Kami</h2>
    <a href="/product/create">Add New Product</a>
    <?php 
        foreach($prodcuts as $prodcut) {
            echo "<li> Name : {$prodcut->name} </li>";
            echo " Price : {$prodcut->price} <br> ";
            echo " Stok : {$prodcut->stock} <br> ";
            echo " Image : {$prodcut->stock} ";
    ?>
        <a href="/product/{{ $prodcut->id }}/edit">Edit Data</a>
        <form action="/product/{{ $prodcut->id }}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    <?php
        }
    ?>