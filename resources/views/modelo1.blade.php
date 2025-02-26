<!DOCTYPE html>
<html lang="en" data-theme="dim">

<head>
    <title>VM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
    .fondo {
        background-image: url('{{ asset('images/wp1892101.webp') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    @media (max-width: 768px) {
        .fondo {
            background-position-x: 33.33%;
        }
    }
</style>


<body>


    <div class="fondo grid grid-flow-dense grid-cols-3 grid-rows-3 h-screen w-screen bg-cover bg-center gap-10">
        <div class="col-span-3 md:col-span-1 md:row-span-1 content-center place-items-center mx-9">
            <div class="relative">
                <img class="mask mask-heart " src="{{ asset('images/VM.jpg') }}" />
            </div>
        </div>
        <div class="row-start-2 col-start-1 col-span-3 content-center place-items-center  md:col-start-3 ">
            <h1 class="text-3xl mb-4">Muy pronto nos Casamos!!!!</h1>
            <p class="text-7xl mb-2">V&M</p>
            <p class="px-4">NO ESTAN PREPARADOS!!!</p>
            <a href="/modelo1" class="inline-block mt-4 px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                Ver alternativa
            </a>
            <a href="/invitacion" class="inline-block mt-4 px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                Ver Invitación
            </a>
        </div>
        <div class="row-start-3 col-start-3 col-span-3  content-center place-items-center  hidden md:block">
            <x-countdown id="countdown-desktop"></x-countdown>
        </div>
        <div class="fixed bottom-1 place-items-center justify-center w-full md:hidden">
            <x-countdown id="countdown-mobile"></x-countdown>
        </div>
    </div>




    <!-- <div class="h-screen w-screen bg-cover bg-center" style="background-image: url('{{ asset('images/wp1892101.webp') }}')">
        <div>
            <div class="flex items-start justify-start pt-10">
                <div class=" relative  md:w-1/3">
                    <img class="mask mask-heart" src="{{ asset('images/VM.jpg') }}" />
                </div>
            </div>
            <div class="grid grid-col-3 place-content-center h-full">
                <div class="col-start-1 w-1/3 absolute"></div>
                <div class="col-start-1 w-1/3 absolute"></div>
                <div class="col-start-2 w-1/3"></div>
                <div class="col-start-1 text-center bg-white bg-opacity-50 p-4 rounded-lg">
                    <h1 class="text-xl mb-4">Muy pronto nos Casamos!!!!</h1>
                </div>
                <div class="col-start-3 text-center bg-red-800 bg-opacity-50 p-4 rounded-lg">
                    <p class="text-lg mb-2">V&M</p>
                    <p class="px-4">NO ESTAN PREPARADOS!!!</p>
                </div>
                <div class="col-start-3 text-center hidden md:block pt-4">
                        <x-countdown id="countdown-desktop"></x-countdown>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-1 place-items-center justify-center w-full md:hidden">
        <x-countdown id="countdown-mobile"></x-countdown>
    </div> -->
</body>