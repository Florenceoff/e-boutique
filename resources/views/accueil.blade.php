<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des produits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Produits26</h1>

                    <ul>
                        @foreach($products as $product)
                            <li>{{ $product->name }}</li>
                            <h1>Détails du produit {{ $product->name }}</h1>

                        <p>{{ $product->description }}</p>
                        <p>Prix : {{ $product->price }}</p>
                        @endforeach
                    </ul>
                </div>
               

            </div>
        </div>
    </div>
</x-app-layout>

{{--
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
</body>
</html>
 --}}
