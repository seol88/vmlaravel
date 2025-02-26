<!DOCTYPE html>
<html lang="en" data-theme="valentine">

<head>
    <title>VM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <style>
        body {
            background-image: url('{{ asset('images/wp1892101.webp') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        @media (max-width: 768px) {
            body {
                background-position-x: 33.33%;
            }
        }
    </style>
<body>


    <div class="h-screen relative overflow-hidden"> <!-- Semicirculo blanco -->
        <div
            class="bg-stone-50 w-screen h-screen rounded-l-none absolute right-0 transform translate-x-1/2 -translate-y-1/2 top-1/2 shadow-lg opacity-0 md:opacity-30 md:rounded-l-full">
        </div> <!-- Contenido centrado sobre el semicirculo -->
        <div class="h-screen flex items-center justify-end relative">
            <div class="w-1/2 text-center place-items-center">
                <div class="relative w-full md:w-1/3 mx-auto">
                    <img class="mask mask-heart" src="{{ asset('images/VM.jpg') }}" />
                </div>
                <h1 class="text-xl mb-4">Muy pronto nos Casamos!!!!</h1>
                <p class="text-lg mb-2">V&M</p>
                <p class="px-4">NO ESTAN PREPARADOS!!!</p>
                <a href="/modelo1" class="inline-block mt-4 px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                    Ver alternativa
                </a>
                <a href="/invitacion" class="inline-block mt-4 px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                    Ver Invitación
                </a>
                <div class="hidden md:block">
                    <x-countdown id="countdown-desktop"></x-countdown>
                </div>
            </div>
        </div>
        <div class="fixed bottom-1 place-items-center justify-center w-full md:hidden">
            <x-countdown id="countdown-mobile"></x-countdown>
        </div>
    </div>
</body>