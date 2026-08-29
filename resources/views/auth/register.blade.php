<x-layout>
    <x-slot:title>Register - Black & White</x-slot:title>

    <div class="page" style="max-width: 550px; margin: auto;">
        <h1>Create an Account</h1>
        <p>Register to manage your products.</p>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required>
            </div>

            <button class="button" type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </div>
</x-layout>
