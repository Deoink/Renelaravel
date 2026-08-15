<x-layout>

    <h1>Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <div>
            <label for="name">Product Name</label>
            <br>
            <input type="text" name="name" id="name">
        </div>

        <br>

        <div>
            <label for="description">Description</label>
            <br>
            <textarea name="description" id="description"></textarea>
        </div>

        <br>

        <div>
            <label for="price">Price</label>
            <br>
            <input type="number" name="price" id="price" step="0.01">
        </div>

        <br>

        <button type="submit">
            Add Product
        </button>

    </form>

</x-layout>