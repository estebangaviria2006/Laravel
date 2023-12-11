@extends('layouts.app')

@section('titulo')
    Editar cliente
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="p-6 bg-white rounded-lg shadow-xl md:w-96">
            <form method="post" action="{{ url('clientes/' . $cliente->cedula) }}">
                @csrf
                @method('PUT')

                @if (session('mensaje'))
                    <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg">{{ session('mensaje') }} </p>
                @endif
                <div class="mb-5">
                    <label for="cedula" class="block mb-2 text-gray-500 uppercase"> Cedula </label>
                    <input type="number" name="cedula" id="cedula"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su cedula" value="{{ $cliente->cedula }}">
                    @error('cedula')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-gray-500 uppercase"> Nombre </label>
                    <input type="name" name="name" id="name"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su nombre" value="{{ $cliente->nombre }}">
                    @error('name')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="direccion" class="block mb-2 text-gray-500 uppercase"> Dirección </label>
                    <input type="text" name="direccion" id="direccion"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su direccion" value="{{ $cliente->direccion }}">
                    @error('direccion')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="telefono" class="block mb-2 text-gray-500 uppercase"> Telefono </label>
                    <input type="number" name="telefono" id="telefono"
                        class="border p-3 w-full rounded-lg @error('name')
                            border-red-500
                        @enderror"
                        placeholder="Ingrese su telefono" value="{{ $cliente->telefono }}">
                    @error('telefono')
                        <p class="p-2 my-2 text-sm text-center text-white bg-red-500 rounded-lg"> {{ $message }} </p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full p-3 font-bold text-white uppercase transition-colors rounded-lg cursor-pointer bg-sky-300 hover:bg-sky-500">
                    Actualizar cliente </button>
            </form>
        </div>
    </div>
@endsection

{{-- @extends('layouts.app')

@section('contenido')

<form action="{{ route('clientes.destroy') }}">

    @csrf
    @method('DELETE')

    <p> Seguro que quieres eliminar a <strong> {{ $cliente->nombre }} ? </strong> </p>

    <button type="submit" class="p-1 bg-green-500 border border-green-800 rounded-lg"> Confirmar </button>
    <button type="button" class="p-1 ml-5 bg-red-500 border border-red-800 rounded-lg"> Regresar </button>

</form>

@endsection --}}
