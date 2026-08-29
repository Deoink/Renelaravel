<x-layout>
    <x-slot:title>Edit Product - Black & White</x-slot:title>

    <div class="page">
        <h1>Edit Product</h1>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Product Name</label>
                <input id="name" name="name" type="text" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5" required>{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" name="price" type="number" step="0.01" min="0" value="{{ old('price', $product->price) }}" required>
            </div>

            <button class="button" type="submit">Update Product</button>
            <a href="{{ route('products.show', $product) }}" class="button light">Cancel</a>
        </form>
    </div>
</x-layout>
