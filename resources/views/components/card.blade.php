<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .card {
            background-color: #f5f5f5;
            padding: 20px;
            margin: 20px auto;
            border-radius: 10px;
            max-width: 500px;
            text-align: center;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <div class="card">
        <h2>{{ $title }}</h2>

        <p>
            {{ $slot }}
        </p>
    </div>

</body>
</html>