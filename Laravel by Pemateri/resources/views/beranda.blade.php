@extends('master-layout')

@section('content')
    <br>
    <h4>List Product Toko Kami</h4>
    <a class="btn btn-primary btn-sm" href="/product/create">Add New Product</a>
    <br>
    <div class="card-deck mt-10">
    <?php 
        foreach($prodcuts as $prodcut) {
    ?>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $prodcut->name }}</h5>
                <p class="card-text">{{ $prodcut->description }}</p>
                <span>Price </span> {{ $prodcut->price }}<br>
                <span>stock </span> {{ $prodcut->stock }}<br>
                </div>
                <div class="card-footer">
                    <button class="btn btn-info">Detail</button>
                </div>
            </div>
            
            <?php
        }
        ?>
    </div>
@endsection