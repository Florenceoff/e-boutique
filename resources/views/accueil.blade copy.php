<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste de produits</title>
</head>
<body>

    <h1>Produits</h1>

    <ul>
        @foreach($products as $product)
            <li>{{ $product->name }}</li>
            <h1>Détails du produit {{ $product->name }}</h1>

         <p>{{ $product->description }}</p>
        <p>Prix : {{ $product->price }}</p>
        @endforeach

        <h1>Créer un nouveau produit</h1>

        <form action="{{ route('products.store') }}" method="POST">
            <label for="name">Nom du produit:</label>
            <input type="text" name="name" id="name">
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
            <label for="price">Prix:</label>
            <input type="number" name="price" id="price">
            <button type="submit">Créer</button>
        </form>

        <h1>Modifier le produit {{ $product->name }}</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @method('PUT')
            <label for="name">Nom du produit:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}">
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $product->description }}</textarea>
            <label for="price">Prix:</label>
            <input type="number" name="price" id="price" value="{{ $product->price }}">
            <button type="submit">Modifier</button>
        </form>
    </ul>
</body>
</html>

