@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Свежие записи</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @foreach ($posts as $post)
            <article class="bg-white p-6 rounded-lg shadow border border-gray-200 hover:shadow-xl transition flex flex-col h-full">
                <div class="flex justify-between items-start mb-2">
                    <h2 class="text-xl font-bold text-gray-900 leading-tight">{{ Str::limit($post->title, 40) }}</h2>
                </div>
                <span class="text-xs text-gray-400 mb-2 block">{{ $post->published_at }}</span>
                
                <p class="text-gray-600 mb-4 flex-row">{{ Str::limit($post->content, 80) }}</p>

                <a href="/post/{{ $post->id }}" class="mt-auto text-blue-600 font-semibold hover:text-blue-800 transition">
                    Читать далее →
                </a>
            </article>
        @endforeach
    </div>

    <div class="text-center mb-12">
        <a href="/posts" class="inline-block border-2 border-blue-600 text-blue-600 font-bold py-2 px-8 rounded-full hover:bg-blue-600 hover:text-white transition">
            Показать все новости
        </a>
    </div>
@endsection