<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-slate-800/50 backdrop-blur-md border-b border-slate-700 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-2 rounded-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold text-white">DMS</span>
            </div>
            <div class="flex items-center gap-6">
                <div class="text-right">
                    <p class="text-slate-300 font-medium">{{ Auth::user()->name }}</p>
                    <p class="text-slate-500 text-xs uppercase tracking-wider">@if (Auth::user()->role === 'admin') Administrator @else User @endif</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600/20 hover:bg-red-600/30 text-red-400 font-semibold py-2 px-4 rounded-lg border border-red-500/30 transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="text-center">
            @if (Auth::user()->role === 'admin')
                <div class="mb-8">
                    <div class="inline-block bg-gradient-to-r from-purple-500 to-pink-600 p-4 rounded-full mb-6">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.5 1.5H5.75A2.25 2.25 0 003.5 3.75v12.5A2.25 2.25 0 005.75 18.5h8.5a2.25 2.25 0 002.25-2.25V6.5m-11-5v4m5-4v4m-5 9.5h10"></path>
                        </svg>
                    </div>
                    <h1 class="text-5xl font-bold text-white mb-3">Questo è l'admin</h1>
                    <p class="text-slate-400 text-lg">Hai accesso completo al sistema</p>
                </div>
            @else
                <div class="mb-8">
                    <div class="inline-block bg-gradient-to-r from-blue-500 to-cyan-600 p-4 rounded-full mb-6">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h1 class="text-5xl font-bold text-white mb-3">Questo è lo user</h1>
                    <p class="text-slate-400 text-lg">Hai accesso alle funzioni base del sistema</p>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
