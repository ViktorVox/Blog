@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Создать новый пост</h1>

    <form action="/post" method="POST" class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
        @csrf

        <div class="mb-4 p-2">
            <label class="block text-gray-700 font-bold mb-2">Заголовок</label>
            <input type="text" name="title" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="Придумайте название...">
        </div>

        <div class="mb-4 p-2">
            <label class="block text-gray-700 font-bold mb-2">Содержание</label>
            <textarea name="content" rows="5" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:border-blue-500" placeholder="О чем вы думаете?"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Опубликовать
        </button>
    </form>
@endsection