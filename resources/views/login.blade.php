@extends('layout')

@section('content')
    <div class="max-w-md mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">Вход в аккаунт</h1>

        <form action="/login" method="POST" class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2">Пароль</label>
                <input type="password" name="password" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
                Войти
            </button>
            
            <p class="mt-4 text-center text-sm text-gray-600">
                Нет аккаунта? <a href="/register" class="text-blue-500 hover:underline">Зарегистрироваться</a>
            </p>
        </form>
    </div>
@endsection