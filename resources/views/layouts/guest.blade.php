<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex pt-6 sm:pt-0 bg-gray-100">
            <div id="animated-bg" class="md:w-1/2 hidden md:flex md:items-center bg-slate-300 min-h-screen">
                <div class="w-full px-20">
                    <h1 class="font-montserrat font-black text-white text-5xl">Something Great!</h1>
                    <p class="text-white font-montserrat font-light text-3xl mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn btn-secondary px-5 py-3 rounded-md mt-10 text-xl">Get started today</button>
                </div>
            </div>
            <div class="md:w-1/2 w-full px-10 min-h-screen flex flex-col justify-center items-center ">
                <div>
                    <a href="/">
                        <x-application-logo class="w-20 h-20" />
                    </a>
                </div>
    
                <div class="w-full flex flex-col justify-center items-center">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
