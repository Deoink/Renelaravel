<x-layout>
    <x-slot:title>Products - Black & White</x-slot:title>

    <div class="page">
        <h1>My Products</h1>
        <p>These products belong to your account.</p>

        <a href="{{ route('products.create') }}" class="button">Add Product</a>

        @forelse ($products as $product)
            <div class="card">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p><strong>₱{{ number_format($product->price, 2) }}</strong></p>

                <div class="actions">
                    <a href="{{ route('products.show', $product) }}" class="button light">View</a>
                    <a href="{{ route('products.edit', $product) }}" class="button light">Edit</a>

                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button danger">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p>No products found. Add your first product.</p>
        @endforelse
    </div>
</x-layout>
