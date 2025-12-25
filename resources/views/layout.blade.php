<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f3f4f6;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 20px;
            border: 2px solid #f3f4f6;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #3b82f6;
        }

        img, a, body {
            -webkit-user-drag: none;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans text-gray-800 selection:bg-blue-200 selection:text-blue-900">
    <header class="bg-white shadow-md">
        <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between items-center">
            <p class="text-xl font-bold text-blue-600 select-none">Blog</p>
            
            <nav class="space-x-4 flex items-center">
                <a href="/" class="text-gray-600 hover:text-blue-500 transition select-none">Главная</a>
                <a href="/about" class="text-gray-600 hover:text-blue-500 transition select-none">Обо мне</a>
                @auth
                    <span class="text-blue-600 font-bold"> 👤 {{ auth()->user()->name }}</span>
                    
                    <a href="/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-sm">
                       + Пост
                    </a>

                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm ml-2">Выйти</button>
                    </form>
                @endauth

                @guest
                    <a href="/login" class="text-gray-600 hover:text-blue-500 transition font-bold mr-4">Войти</a>
                    <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Регистрация</a>
                @endguest
            </nav>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 mt-8 min-h-screen"> 
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-6 mt-12">
        <p>© 2025 Все права защищены. Сделано на Laravel.</p>
    </footer>

</body>
</html>