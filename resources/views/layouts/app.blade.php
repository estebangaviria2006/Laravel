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

    <header class="flex items-center justify-between p-5 bg-white border-b shadow">
        <h1 class="text-3xl font-black">
            Electrodomesticos gaviria
        </h1>
        @auth
            <nav class="flex items-center gap-2">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="font-bold text-gray-600 uppercase"> Cerrar sesión </button>
                </form>
            </nav>
        @endauth

        @guest
            <nav class="flex items-center gap-2">
                <a class="font-bold text-gray-600 uppercase" href="{{ route('login') }}"> Login </a>
                <a class="font-bold text-gray-600 uppercase" href="{{ route('register') }}"> Crear cuenta </a>
            </nav>
        @endguest

    </header>
    <main class="container flex flex-col justify-center mx-auto mt-10">
        <h2 class="mb-10 text-3xl font-black text-center">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
</body>

</html>
