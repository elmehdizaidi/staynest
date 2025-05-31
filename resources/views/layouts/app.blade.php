<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>StayNest</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-primary p-4 text-white flex justify-between items-center shadow-md">
        <h1 class="text-xl font-bold tracking-wide">StayNest</h1>
        <div class="space-x-6">
            @auth
                <a href="{{ route('dashboard') }}" class="hover:text-secondary transition font-semibold">Profil</a>
                <a href="{{ route('bookings.index') }}" class="hover:text-secondary transition font-semibold">Mes Réservations</a>
                <a href="#" class="hover:text-secondary transition font-semibold">Aide</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-secondary transition font-semibold">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:text-secondary transition font-semibold">Se connecter</a>
                <a href="{{ route('register') }}" class="hover:text-secondary transition font-semibold">S’inscrire</a>
            @endauth
        </div>
    </nav>

    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>
    <footer class="bg-primary text-white mt-12">
    <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row justify-between items-center">
        <p class="text-sm">&copy; 2025 StayNest. Tous droits réservés.</p>
        <div class="space-x-6 mt-4 md:mt-0">
            <a href="#" class="hover:text-secondary transition font-semibold">Mentions légales</a>
            <a href="#" class="hover:text-secondary transition font-semibold">Politique de confidentialité</a>
            <a href="#" class="hover:text-secondary transition font-semibold">Contacts</a>
        </div>
    </div>
</footer>


    @livewireScripts
</body>
</html>


