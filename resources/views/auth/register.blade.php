{{-- resources/views/auth/register.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - Mon App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl">
        <h1 class="text-2xl font-bold text-center text-[#1E40AF] mb-6">Créer un compte</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nom --}}
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium">Nom</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E40AF]">
                @error('name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E40AF]">
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Mot de passe --}}
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Mot de passe</label>
                <input type="password" name="password" id="password" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E40AF]">
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirmation mot de passe --}}
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-medium">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E40AF]">
                @error('password_confirmation')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-6">
                <a href="{{ route('login') }}" class="text-sm text-[#1E40AF] hover:underline">Déjà inscrit ?</a>
                <button type="submit"
                        class="bg-[#1E40AF] hover:bg-[#172c85] text-white font-semibold py-2 px-4 rounded-lg transition">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>

</body>
</html>
