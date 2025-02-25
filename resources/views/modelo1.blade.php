<!DOCTYPE html>
<html lang="en" data-theme="dim">

<head>
    <title>VM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen w-screen bg-cover bg-center" style="background-image: url('{{ asset('images/wp1892101.webp') }}')">
        <div>
            <div class="flex items-start justify-start pt-4">
                <div class=" relative w-full md:w-1/3">
                    <img class="mask mask-heart" src="{{ asset('images/VM.jpg') }}" />
                </div>
            </div>
            <div class="flex items-end justify-end">
                <div class="w-1/2 text
                -center place-items-center">
                    <h1 class="text-xl mb-4">Muy pronto nos Casamos!!!!</h1>
                    <p class="text-lg mb-2">V&M</p>
                    <p class="px-4">NO ESTAN PREPARADOS!!!</p>
                    <div class="pt-4">
                        <x-countdown id="countdown-desktop"></x-countdown>
                    </div>
            </div>
        </div>
    </div>
</body>