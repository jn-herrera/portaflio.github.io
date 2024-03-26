@extends('layouts.app')

@section('titulo')
    Ingresa en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-5/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="img_login" class="shadow-xl">
        </div>

        <div class="md:w-4/12 bg-white p-6 shadow-xl rounded-lg">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf <!-- Validar cadena -->

                @if (@session('message'))

                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ session('message') }}</p>

   
                @endif



                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input id="email" name="email" type="text" placeholder="Tu email" class="border p-3 w-full rounded-lg 
                    @error('email') border-red-500 @enderror" value="{{old('email')}}">
                    
                    @error('email') 
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
                    <input id="password" name="password" type="password" placeholder="Password" class="border p-3 w-full rounded-lg 
                    @error('password') border-red-500 @enderror" value="{{old('password')}}">
                    
                    @error('password') 
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror


                </div>

             
                <input type="submit" value="Iniciar sesion" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
