<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel CRUD</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="-mr-2 flex sm:hidden">
                        <!-- Mobile menu button-->
                    </div>
                    <div class="hidden sm:ml-6 sm:flex">
                        <a href="{{ route('home') }}" class="text-gray-700 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="{{ route('addPost') }}" class="text-gray-700 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium">Add Post</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </div>

</body>
</html>
