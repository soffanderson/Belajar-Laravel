<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function homePage()
    {
        // $dataUsers = ["Achmad ANdi", "Deni Sandoro", "Azzam"];
        $prodcuts = Product::get();
        return view('beranda', compact( "prodcuts"));
    }

    public function about()
    {
        return view('tentang-kami');
    }
}
