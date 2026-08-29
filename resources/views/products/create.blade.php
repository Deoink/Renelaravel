<x-layout>
    <x-slot:title>Add Product - Black & White</x-slot:title>

    <div class="page">
        <h1>Add Product</h1>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Product Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input id="price" name="price" type="number" step="0.01" min="0" value="{{ old('price') }}" required>
            </div>

            <button class="button" type="submit">Save Product</button>
            <a href="{{ route('products.index') }}" class="button light">Cancel</a>
        </form>
    </div>
</x-layout>
