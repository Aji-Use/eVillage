<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eVillage</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> --}}
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body class="h-full">
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000, // Durasi animasi (ms)
                once: true, // Animasi berjalan hanya sekali
            });
        });
    </script>


    <div class="min-h-full">

        <x-navbar></x-navbar>
        {{-- <x-header>
            {{ $title }}
        </x-header> --}}

        <main>
            {{-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
            </div> --}}
            {{ $slot }}
        </main>
    </div>

</body>

</html>
