{{-- resources/views/auth/login.blade.php --}}

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Mon App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl">
        <h1 class="text-2xl font-bold text-center text-[#1E40AF] mb-6">Connexion</h1>

        @if(session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" name="email" id="email" required autofocus
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E40AF]"
                       value="{{ old('email') }}">
                @error('email')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium">Mot de passe</label>
                <input type="password" name="password" id="password" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#1E40AF]">
                @error('password')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember Me --}}
            <div class="flex items-center justify-between mb-4">
                <label class="flex items-center">
                    <input type="checkbox" name="remember" class="text-[#1E40AF] border-gray-300 rounded shadow-sm focus:ring-[#1E40AF]">
                    <span class="ml-2 text-sm text-gray-600">Se souvenir de moi</span>
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-[#1E40AF] hover:underline">Mot de passe oublié ?</a>
                @endif
            </div>

            <button type="submit"
                    class="w-full bg-[#1E40AF] hover:bg-[#172c85] text-white font-semibold py-2 px-4 rounded-lg transition">
                Connexion
            </button>
        </form>
    </div>
</body>
</html>
