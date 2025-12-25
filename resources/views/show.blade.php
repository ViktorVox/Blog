@extends('layout')

@section('content')
    <a href="/" class="inline-block text-gray-500 hover:text-blue-600 mb-6 transition">
        Назад к статьям
    </a>

    <article class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
        <header>
            <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>
            <span class="text-gray-400 bg-gray-50 p-2 rounded-full text-sm">
                Опубликовано: {{ $post->published_at }}
            </span>
        </header>
        <div class="text-lg text-gray-700 leading-relaxed mt-4">
            {{ $post->content }}
        </div>
    </article>
@endsection