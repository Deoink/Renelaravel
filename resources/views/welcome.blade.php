<x-layout>
    <x-slot:title>Black & White</x-slot:title>

    <div class="page" style="text-align:center;">
        <h1>Black & White</h1>
        <h2 style="color:#777; font-weight:normal;">Dilaw</h2>

        <div style="max-width:700px; margin:40px auto; line-height:1.8; color:#444;">
            <p>
                A simple Laravel project about music, products,
                authentication, relationships, and authorization.
            </p>

            @guest
                <p>
                    <a href="{{ route('login') }}" class="button">Login</a>
                    <a href="{{ route('register') }}" class="button light">Register</a>
                </p>
            @else
                <p>
                    <a href="{{ route('products.index') }}" class="button">My Products</a>
                </p>
            @endguest
        </div>
    </div>
</x-layout>
