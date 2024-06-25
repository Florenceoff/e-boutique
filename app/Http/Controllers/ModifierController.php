<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ModifierController extends Controller
{
    public function show()
    {
        $product = Product::find();
       return view('modifier', ['product' => $product]);

    }

    public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $request->validate([
        'name' => 'required',
        'description'=> 'required',
        'price' => 'required',
    ]);

    // Mettre à jour le produit existant
    Product::find($id)->update($request->all());

    return redirect()->route('accueil');
}
}
