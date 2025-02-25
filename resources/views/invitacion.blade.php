<!DOCTYPE html>
<html lang="en" data-theme="dim">

<head>
    <title>VM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen w-screen bg-cover bg-center" style="background-image: url('{{ asset('images/wp1892101.webp') }}')">
        <div class="flex items-center justify-center h-full">
            <h1 class="text-white text-4xl">Texto centrado al medio</h1>
        </div>
    </div>

    <div class="h-1/3 w-screen bg-purple-950 flex items-center justify-center">
        <x-countdown id="countdown-desktop"></x-countdown>
    </div>
    <div class="h-1/3 w-screen bg-green-600 flex items-center justify-center">
        <x-countdown id="countdown-lalal"></x-countdown>
    </div>

</body>