<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Utenti - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-4xl p-6">
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h1 class="text-xl font-semibold text-gray-800">Gestione Utenti</h1>
                    <p class="text-sm text-gray-500">Elenco utenti registrati</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-sm text-gray-700">{{ Auth::user()->name }}</div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm">Logout</button>
                    </form>
                </div>
            </div>

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">{{ session('error') }}</div>
            @endif

            <div class="overflow-x-auto bg-gray-50 p-4 rounded">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="text-left text-gray-600">
                            <th class="px-3 py-2">ID</th>
                            <th class="px-3 py-2">Username</th>
                            <th class="px-3 py-2">Email</th>
                            <th class="px-3 py-2">Ruolo</th>
                            <th class="px-3 py-2">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr class="border-t border-gray-200">
                                <td class="px-3 py-2">{{ $user->id }}</td>
                                <td class="px-3 py-2">{{ $user->username }}</td>
                                <td class="px-3 py-2">{{ $user->email }}</td>
                                <td class="px-3 py-2">{{ $user->role }}</td>
                                <td class="px-3 py-2">
                                    @if($user->id === Auth::id())
                                        <span class="text-sm text-gray-400">Non disponibile</span>
                                    @else
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo utente?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-red-600 text-white px-3 py-1 rounded text-sm">Elimina</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
