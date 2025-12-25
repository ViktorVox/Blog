@extends('layout')

@section('content')
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Регистрация</h1>

        <form action="/register" method="POST" class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Имя</label>
                <input type="text" name="name" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Пароль</label>
                <input type="password" name="password" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Повторите пароль</label>
                <input type="password" name="password_confirmation" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
                Зарегистрироваться
            </button>
        </form>
    </div>
@endsection