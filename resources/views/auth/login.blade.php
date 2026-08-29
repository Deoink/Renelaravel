<x-layout>
    <x-slot:title>Login - Black & White</x-slot:title>

    <div class="page" style="max-width: 550px; margin: auto;">
        <h1>Login</h1>
        <p>Sign in to manage your products.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>

            <button class="button" type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>
</x-layout>
