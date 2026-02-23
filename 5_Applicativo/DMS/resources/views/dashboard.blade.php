<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - DMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen">
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
                <!DOCTYPE html>
                <html lang="it">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Dashboard - DMS</title>
                    <script src="https://cdn.tailwindcss.com"></script>
                </head>
                <body class="bg-gray-100 min-h-screen flex items-center justify-center">
                    <div class="w-full max-w-4xl p-6">
                        <div class="bg-white rounded-2xl shadow-lg p-6">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center gap-4">
                                    <div class="bg-gray-100 p-3 rounded-lg">
                                        <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h1 class="text-xl font-semibold text-gray-800">DMS</h1>
                                        <p class="text-sm text-gray-500">Sistema di gestione documentale</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <p class="text-gray-800 font-medium">{{ Auth::user()->name }}</p>
                                        <p class="text-xs text-gray-500 uppercase">@if (Auth::user()->role === 'admin') Amministratore @else Utente @endif</p>
                                    </div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm">Logout</button>
                                    </form>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                                <div class="p-4 bg-gray-50 rounded-md">
                                    <div class="text-sm text-gray-500">Documenti accessibili</div>
                                    <div class="text-2xl font-bold text-gray-800">--</div>
                                </div>
                                <div class="p-4 bg-gray-50 rounded-md">
                                    <div class="text-sm text-gray-500">Pubblici</div>
                                    <div class="text-2xl font-bold text-gray-800">--</div>
                                </div>
                                <div class="p-4 bg-gray-50 rounded-md">
                                    <div class="text-sm text-gray-500">Privati</div>
                                    <div class="text-2xl font-bold text-gray-800">--</div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-md">
                                @if (Auth::user()->role === 'admin')
                                    <h2 class="text-lg font-semibold text-gray-800 mb-2">Pannello amministrazione</h2>
                                    <div class="flex gap-2">
                                        <a href="{{ route('admin.users.index') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm">Gestione utenti</a>
                                        <a href="#" class="bg-white border border-gray-200 px-3 py-2 rounded-md text-sm text-gray-700">Gestione tag</a>
                                    </div>
                                @else
                                    <h2 class="text-lg font-semibold text-gray-800">Benvenuto</h2>
                                    <p class="text-sm text-gray-600">Usa la barra di ricerca per trovare documenti o caricane di nuovi.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </body>
                </html>
