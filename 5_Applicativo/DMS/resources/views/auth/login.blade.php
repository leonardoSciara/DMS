<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-sm">
        <div class="bg-white rounded-2xl shadow-lg p-8">
            <div class="flex flex-col items-center gap-4 mb-4">
                <div class="bg-gray-100 rounded-full p-4">
                    <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 8h10M7 12h10M7 16h6" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">DMS - Document Management</h1>
                <p class="text-gray-500 text-sm">Accedi al sistema di gestione documentale</p>
            </div>

            @if ($errors->any())
                <div class="mb-4 text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ url('/login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input
                        type="text"
                        id="username"
                        name="username"
                        value="{{ old('username') }}"
                        required
                        autofocus
                        placeholder="Inserisci username"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-md text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300"
                    />
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="Inserisci password"
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-md text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-300"
                    />
                </div>

                <button
                    type="submit"
                    class="w-full bg-gray-900 text-white font-semibold py-3 rounded-md shadow-sm hover:opacity-95"
                >
                    Accedi
                </button>
            </form>
        </div>
    </div>
</body>
</html>
