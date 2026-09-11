<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Belen's Special Palabok")</title>
    <meta name="description" content="Authentic homemade palabok, made fresh daily by Belen's Special Palabok.">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">

    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    <x-menu-modal />
    <x-order-modal />

</body>
</html>
