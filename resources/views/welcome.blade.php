<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Black & White</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #222;
        }

        /* Navigation */
        nav {
            background-color: #111;
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
            gap: 25px;
            list-style: none;
            margin: 0;
        }

        nav ul li a {
            color: #ccc;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: white;
        }

        /* Main Content */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            text-align: center;
            background-color: white;
            border-radius: 10px;
        }

        .container h1 {
            font-size: 36px;
            margin-bottom: 5px;
        }

        .container h2 {
            color: #777;
            font-weight: normal;
        }

        .song-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin: 20px 0;
        }

        .lyrics {
            white-space: pre-line;
            line-height: 1.8;
            color: #444;
            font-size: 16px;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #111;
            color: #aaa;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <a href="{{ url('/') }}" class="logo">BLACK & WHITE</a>

        <ul>
            <li>
                <a href="{{ url('/') }}">Home</a>
            </li>

            <li>
                <a href="{{ url('/about') }}">About</a>
            </li>

            <li>
                <a href="{{ url('/contact') }}">Contact</a>
            </li>
        </ul>
    </nav>


    <!-- Main Content -->
    <div class="container">

        <h1>Black & White</h1>
        <h2>Dilaw</h2>

        <div class="lyrics">

            Ang buhay ko ay parang lumang TV na walang cable
            Kulay abo, laging malabo bawat lipat mo, walang channel

            At nang makita ka, nagliliwanag ang mga mata
            Unti-unting nagkakakulay ang mundo

            'Di makapaghunos-dili, baby
            'Di makatulog ng swabe lately

            Hay, 'di ka nakakaumay
            Nagbibigay ng kulay
            Sa mundo kong black and white

        </div>

    </div>


    <!-- Footer -->
    <footer>
        © 2026 Black & White
    </footer>

</body>
</html>