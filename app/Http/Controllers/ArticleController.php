<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
{
    $products = Product::all();
    // dd($products);
    return view('accueil_guest', ['products' => $products]);
}
}
