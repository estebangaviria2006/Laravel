<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body>

    <header class="p-5 border-b bg-white shadow flex justify-between items-center">
        <h1 class="text-3xl font-black">
            Electrodomesticos full
        </h1>
        <nav class="flex gap-2 items-center">
            <a class="font-bold uppercase text-gray-600" href="{{ route('login') }}"> Login </a>
            <a class="font-bold uppercase text-gray-600" href="{{ route('register') }}"> Crear cuenta </a>
        </nav>
    </header>
    <main class="flex flex-col justify-center container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
</body>
</html>