<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Black & White' }}</title>

    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #222;
        }
        nav {
            background: #111;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav .logo {
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }
        nav ul {
            display: flex;
            align-items: center;
            gap: 20px;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav a, nav button {
            color: #ccc;
            text-decoration: none;
            background: none;
            border: 0;
            font: inherit;
            cursor: pointer;
        }
        nav a:hover, nav button:hover { color: white; }
        .nav-user { color: #aaa; font-size: 14px; }
        main {
            max-width: 900px;
            margin: 50px auto;
            padding: 0 20px;
        }
        .page {
            background: white;
            padding: 30px;
            border-radius: 10px;
        }
        .button {
            display: inline-block;
            padding: 10px 16px;
            background: #111;
            color: white;
            text-decoration: none;
            border: 0;
            border-radius: 6px;
            cursor: pointer;
        }
        .button.light {
            background: #eee;
            color: #111;
        }
        .button.danger { background: #b91c1c; }
        .actions { display: flex; gap: 8px; flex-wrap: wrap; }
        .card {
            background: #f5f5f5;
            padding: 20px;
            margin: 18px 0;
            border-radius: 10px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font: inherit;
        }
        label { font-weight: bold; }
        .form-group { margin-bottom: 18px; }
        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px 16px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background: #111;
            color: #aaa;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('welcome') }}" class="logo">BLACK & WHITE</a>

        <ul>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>

            @auth
                <li><a href="{{ route('products.index') }}">Products</a></li>

                @can('view-admin')
                    <li><a href="{{ route('admin') }}">Admin</a></li>
                @endcan

                <li class="nav-user">Hi, {{ auth()->user()->name }}</li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer>
        © 2026 Black & White
    </footer>
</body>
</html>
