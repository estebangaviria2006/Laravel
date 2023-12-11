@extends('layouts.app')

@section('titulo')
    Crear cuenta
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="p-6 bg-white rounded-lg shadow-xl md:w-96">
            <form method="post" action="/register">
                @csrf
                @if (session('mensaje'))
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ session('mensaje') }} </p>
                @endif
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-gray-500 uppercase"> Nombre </label>
                    <input type="name" name="name" id="name"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su correo" value="{{ old('name') }}">
                    @error('name')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-gray-500 uppercase"> Email </label>
                    <input type="email" name="email" id="email"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su correo" value="{{ old('email') }}">
                    @error('email')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-gray-500 uppercase"> Contraseña </label>
                    <input type="password" name="password" id="password"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su contraseña">
                    @error('email')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full p-3 font-bold text-white uppercase transition-colors rounded-lg cursor-pointer bg-sky-300 hover:bg-sky-500">
                    Crear cuenta </button>
            </form>
        </div>
    </div>
@endsection
