<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Selamat Datang - Praktikum Mobile 2024</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            padding: 2rem;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #4a90e2;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1rem;
            color: #666;
            margin-top: 0.5rem;
        }

        .marquee {
            font-size: 1.2rem;
            font-weight: 500;
            color: #4a90e2;
            margin-top: 1rem;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Selamat Datang di Praktikum Mobile 2024</h1>
        <p>Universitas Khairun - Program Studi Informatika</p>

        <div class="marquee">
            <marquee scrollamount="6">Selamat Belajar! Semoga pengalaman belajar Anda menyenangkan dan bermanfaat!
            </marquee>
        </div>
    </div>
</body>

</html>
