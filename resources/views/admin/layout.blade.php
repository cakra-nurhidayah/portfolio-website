{{-- resources/views/admin/layout.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #4599b3;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>

<body class="min-h-screen">
    <header class="sticky top-0 z-30 bg-[#4599b3]/90 backdrop-blur shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/astrazen.png') }}" alt="Logo" class="w-10 h-10 rounded-full border-2 border-white shadow">
                <span class="ml-2 text-2xl font-extrabold bg-gradient-to-r from-[#000000] via-black to-[#000000] bg-clip-text text-transparent tracking-wide drop-shadow-lg animate-pulse">
                    Cakra <span class="mx-1 text-lg font-light text-black/100">|</span> Astra<span class="text-[#262525] font-black">_zen</span>
                </span>
            </div>
            <nav class="hidden md:flex gap-2">
                <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition">Dashboard</a>
                <a href="{{ route('admin.skills') }}" class="px-4 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition">Skills</a>
                <a href="{{ route('admin.services') }}" class="px-4 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition">Services</a>
                <a href="{{ route('admin.projects.index') }}" class="px-4 py-2 rounded-xl text-white font-semibold hover:bg-white/20 hover:text-[#F9B654] transition">Projects</a>
            </nav>
        </div>
    </header>

    <div class="max-w-7xl mx-auto p-6">
        <div class="bg-white/80 rounded-2xl shadow-xl p-6 md:p-8">
            <h1 class="text-2xl md:text-3xl font-bold text-[#262525] mb-6">@yield('page_title')</h1>
            @yield('content')
        </div>
    </div>

    <footer class="mt-8 pb-6 text-center text-white/80">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-sm">© {{ date('Y') }} Admin Panel - Cakra Astra_zen</p>
        </div>
    </footer>
</body>

</html>