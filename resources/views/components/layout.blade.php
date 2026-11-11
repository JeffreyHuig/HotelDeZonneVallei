<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/favicon.ico">
    <title>Home Page</title>
    @vite(['resources/js/app.js'])
</head>
    <body class="h-full">
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12" src="/images/zonnevallei_logo.png" alt="Hotel De Zonne Vallei">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link href="/hotelkamers" :active="request()->is('/hotelkamers')">Hotelkamers</x-nav-link>
                                    <x-nav-link href="/restaurant" :active="request()->is('/restaurant')">Restaurant</x-nav-link>
                                    <x-nav-link href="/overons" :active="request()->is('/overons')">Over Ons</x-nav-link>
                                    <x-nav-link href="/contact" :active="request()->is('/contact')">Contact</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6 space-x-4">
                                @guest
                                    <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>    
                                    <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>   
                                @endguest

                                @auth
                                    <x-nav-link href="{{ route('dashboard') }}">Dashboard</x-nav-link>
                                    <form method="POST" action="/logout">
                                        @csrf
                                        
                                        <x-form-button>Log Out</x-form-button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-4 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                </div>
            </header>

            <main>
                <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>