<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name') }} - Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50 font-sans text-gray-900 min-h-screen flex flex-col">

    <header class="bg-primary text-white p-4 shadow-md flex justify-between items-center">
        <h1 class="text-2xl font-bold">ImmoBooking Admin</h1>
        <nav>
            <!-- Ici liens ou actions admin -->
            <a href="{{ route('filament.logout') }}" class="hover:underline">Déconnexion</a>
        </nav>
    </header>

    <div class="flex flex-1 overflow-hidden">

        <aside class="w-64 bg-white shadow-md p-4 flex flex-col">
            {{-- Sidebar menu --}}
            {{ \Filament\Facades\Filament::renderNavigation() }}
        </aside>

        <main class="flex-1 overflow-auto p-6">
            {{ $slot }}
        </main>

    </div>

    <footer class="bg-white text-center p-4 text-gray-500 text-sm">
        &copy; {{ date('Y') }} ImmoBooking - Tous droits réservés
    </footer>

    @livewireScripts
</body>
</html>
