<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gradient-to-br from-purple-100 via-white to-pink-100 min-h-screen text-gray-900 font-sans relative overflow-x-hidden">

    
    <div class="absolute inset-0 
    bg-[url('..\images\prod-bg.jpg')] bg-cover bg-center opacity-30 pointer-events-none z-0"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 py-12 space-y-10">
        <!-- Header -->
        <header class="text-center">
            <h1 class="text-5xl font-bold text-purple-900 tracking-tight mb-3">Product Manager</h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                Manage your products with ease using the <span class="font-medium text-purple-600">Product Manager CRUD Interface</span> .
            </p>
        </header>

        <!-- Callout / Banner -->
        <div class="bg-purple-100/50 border border-purple-200 rounded-xl shadow-md p-6 text-center text-purple-800">
            Built with <span class="font-semibold">Laravel 12</span>, <span class="font-semibold">Livewire</span>, <span class="font-semibold">TailwindCSS</span>, and <span class="font-semibold">PostgreSQL</span>.
        </div>

        <!-- Livewire Component -->
        <main>
            <livewire:product-manager />
        </main>

        <!-- Footer -->
        <footer class="text-center text-sm text-gray-500 pt-10">
             Product Management • Crafted by Aishwarya S.
        </footer>
    </div>

    @livewireScripts
</body>
</html>
