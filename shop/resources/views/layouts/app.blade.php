<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @vite('resources/css/app.css')
    <title>Главная</title>
</head>

<body class="flex flex-col min-h-screen font-Spectral text-xl">
    @include('components.header')
    <main class="flex flex-col gap-14 py-10 container mx-auto max-w-[1280px] px-4">
        @yield('content')
    </main>
    @include('components.footer')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="Assets/JS/main.js"></script>
</body>

</html>
