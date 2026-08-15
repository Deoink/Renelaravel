<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - Black & White</title>

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

        /* Contact Content */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 40px;
            text-align: center;
            background-color: white;
            border-radius: 10px;
        }

        .container h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .container p {
            color: #666;
            line-height: 1.6;
        }

        .contact-info {
            margin-top: 30px;
        }

        .contact-info p {
            font-size: 17px;
            margin: 15px 0;
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

        <a href="{{ url('/') }}" class="logo">
            BLACK & WHITE
        </a>

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


    <!-- Contact Content -->
    <div class="container">

        <h1>Contact Us</h1>

        <p>
            If you have any questions or concerns,
            feel free to contact us.
        </p>

        <div class="contact-info">

            <p><strong>Email:</strong> example@gmail.com</p>

            <p><strong>Phone:</strong> 0912-345-6789</p>

            <p><strong>Location:</strong> Batangas, Philippines</p>

        </div>

    </div>


    <!-- Footer -->
    <footer>
        © 2026 Black & White
    </footer>

</body>
</html>