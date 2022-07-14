@extends('master-layout')

@section('content')
<a class="btn btn-default btn-sm" href="/"><< Back To Product List</a>
<form action="" method="POST">
    @csrf
    <h2>Edit Product</h2>
    <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}">
    <br>
    <textarea name="description" id="" cols="30" rows="10" placeholder="Product Description" >{{ $product->description }}</textarea>
    <br>
    <input type="number" name="stock" placeholder="Product Stock" value="{{ $product->stock }}">
    <br>
    <input type="number" name="price" placeholder="Product Price" value="{{ $product->price }}">
    <br>
    <input type="file" name="image" placeholder="Product Image">
    <br>
    <input type="submit" value="Save Product">
</form>
@endsection