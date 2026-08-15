<x-layout>

    <h1>Products</h1>

    <a href="{{ route('products.create') }}">
        Add Product
    </a>

    @forelse ($products as $product)

        <div>
            <h2>{{ $product->name }}</h2>

            <p>{{ $product->description }}</p>

            <p>₱{{ number_format($product->price, 2) }}</p>

            <a href="{{ route('products.show', $product) }}">
                View
            </a>

            <a href="{{ route('products.edit', $product) }}">
                Edit
            </a>

            <form
                action="{{ route('products.destroy', $product) }}"
                method="POST"
                style="display:inline;"
            >

                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>

            </form>
        </div>

    @empty

        <p>No products found.</p>

    @endforelse

</x-layout>