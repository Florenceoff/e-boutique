@include('accueil')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier le produit') }}
        </h2>
    </x-slot>

    <h1>Modifier le produit {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->$id) }}" method="POST">
            @method('PUT')
            <label for="name">Nom du produit:</label>
            <input type="text" name="name" id="name" value="{{ $product->name }}">
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $product->description }}</textarea>
            <label for="price">Prix:</label>
            <input type="number" name="price" id="price" value="{{ $product->price }}">
            <button type="submit">Modifier</button>
    </form>


