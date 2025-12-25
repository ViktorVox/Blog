@extends('layout')

@section('content')
    <div class="max-w-4xl mx-auto">
        
        <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Давайте знакомиться</h1>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden md:flex">
            
            <div class="md:w-1/3 bg-gradient-to-br from-blue-600 to-indigo-800 p-8 text-white flex flex-col items-center justify-center text-center">
                
                <img src="https://avatars.githubusercontent.com/u/125863878?v=4" 
                    alt="Avatar" 
                    class="w-32 h-32 rounded-full border-4 border-white shadow-lg mb-4">
                
                <h2 class="text-2xl font-bold">Виктор</h2>
                <p class="text-blue-200 text-sm uppercase tracking-wide font-semibold">Разработчик</p>
            </div>

            <div class="p-8 md:w-2/3">
                <h3 class="text-xl font-bold text-gray-800 mb-3">О себе</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Привет! Мой путь в IT начался с фриланса и создания <b>Landing Page</b>.
                    Разбираясь с версткой и желаниями клиентов, я понял, что хочу создавать более сложные и функциональные системы.
                    <br><br>
                    Сейчас я углубился в <b>Backend-разработку</b>: проектирую базы данных, пишу логику на <b>Laravel</b> и создаю свои первые полноценные веб-приложения.
                    Моя цель - стать профессионалом.
                </p>

                <h3 class="text-xl font-bold text-gray-800 mb-3">Мой стек технологий</h3>
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="px-3 py-1 bg-red-100 text-red-600 rounded-full text-sm font-semibold">Laravel</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold">PHP 8</span>
                    <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-sm font-semibold">JavaScript</span>
                    <span class="px-3 py-1 bg-teal-100 text-teal-700 rounded-full text-sm font-semibold">Tailwind CSS</span>
                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold">MySQL</span>
                    <span class="px-3 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm font-semibold">Godot Engine</span>
                </div>

                <div class="flex gap-4">
                    <a target="_blank" href="https://github.com/ViktorVox" class="px-6 py-2 bg-gray-800 text-white rounded-lg hover:bg-black transition shadow-md">
                        GitHub
                    </a>
                    <a href="mailto:wbdev.vox@gmail.com" class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition">
                        Написать мне
                    </a>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12 text-center">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="text-3xl mb-2">🎮</div>
                <div class="font-bold text-gray-800">Геймдев</div>
                <div class="text-sm text-gray-500">Люблю пиксель-арт</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="text-3xl mb-2">💻</div>
                <div class="font-bold text-gray-800">Чистый код</div>
                <div class="text-sm text-gray-500">Фанат PSR стандартов</div>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="text-3xl mb-2">🚀</div>
                <div class="font-bold text-gray-800">Обучение</div>
                <div class="text-sm text-gray-500">Каждый день что-то новое</div>
            </div>
        </div>

    </div>
@endsection