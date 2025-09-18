{{-- resources/views/components/app-layout.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'My Clothing Store') }}</title>

    {{-- Example CSS/JS from Laravel Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col">

        {{-- Header --}}
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-4 px-6">
                <h1 class="text-xl font-bold">
                    {{ config('app.name', 'My Clothing Store') }}
                </h1>
            </div>
        </header>

        {{-- Main content --}}
        <main class="flex-1 max-w-7xl mx-auto p-6">
            {{ $slot }}
        </main>

        {{-- Footer --}}
        <footer class="bg-white border-t py-4 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name', 'My Clothing Store') }}. All rights reserved.
        </footer>
    </div>
</body>
</html>
