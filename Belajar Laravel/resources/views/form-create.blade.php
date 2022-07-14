<a href="/">
    << Back</a>
        <form action="" method="GET">
            @csrf
            <h2>Create New Product</h2><br>
            <input type="text" name="name" placeholder="Product Name"><br>
            <textarea name="text" id="" cols="30" rows="10" placeholder="Deskripsi"></textarea>
            <br>
            <input type="number" name="stock" placeholder="stock">
            <br>
            <input type="number" name="price" placeholder="price">
            <br>
            <input type="file" name="image" placeholder="image">
            <br>
            <input type="submit" value="Add Data">
        </form>