@extends('master-layout')

@section('content')

<br>

<a href="/" class="btn btn-info btn-sm" ><< Back To Product List</a>
<form action="" method="POST">
    @csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" placeholder="Product Name">
  </div>
  <textarea name="description"  class="form-control"  id="" cols="30" rows="10" placeholder="Product Description" ></textarea>
  <div class="form-group">
    <label >Stok</label>
    <input type="text" class="form-control" name="stock" placeholder="Product stock">
  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" class="form-control" name="price" placeholder="Product price">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
