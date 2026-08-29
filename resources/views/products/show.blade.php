<x-layout>
    <x-slot:title>{{ $product->name }} - Black & White</x-slot:title>

    <div class="page">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p><strong>Price: ₱{{ number_format($product->price, 2) }}</strong></p>
        <p>Created by: {{ $product->user?->name ?? 'Unknown' }}</p>

        <div class="actions">
            <a href="{{ route('products.edit', $product) }}" class="button">Edit</a>
            <a href="{{ route('products.index') }}" class="button light">Back</a>

            <form action="{{ route('products.destroy', $product) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="button danger" type="submit">Delete</button>
            </form>
        </div>
    </div>
</x-layout>
