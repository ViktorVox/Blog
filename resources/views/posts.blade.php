@extends('layout')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Архив новостей</h1>
        <a href="/" class="text-gray-500 hover:text-blue-500">На главную</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($posts as $post)
            <article class="bg-white p-6 rounded-lg shadow border border-gray-200 flex flex-col h-full">
                <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $post->title }}</h2>
                <span class="text-sm text-gray-400 mb-4">{{ $post->published_at }}</span>
                <p class="text-gray-600 mb-4 flex-row">{{ Str::limit($post->content, 150) }}</p>
                <a href="/post/{{ $post->id }}" class="mt-auto bg-gray-100 text-gray-700 px-4 py-2 rounded text-center hover:bg-gray-200 transition">
                    Читать
                </a>
            </article>
        @endforeach
    </div>
@endsection