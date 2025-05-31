<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe oublié</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-2xl p-6 w-full max-w-md">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Mot de passe oublié ?</h2>

        <p class="text-sm text-gray-600 mb-4">
            Pas de souci. Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.
        </p>

        <form method="POST" action="/forgot-password">
            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Adresse e-mail</label>
                <input type="email" name="email" id="email" required
                       class="mt-1 block w-full h-12 px-4 text-base border border-gray-300 rounded-lg shadow-sm focus:ring-[#1E40AF] focus:border-[#1E40AF] placeholder-gray-400"
                       placeholder="">
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                        class="w-full bg-[#1E40AF] hover:bg-[#1E3A8A] text-white font-semibold py-3 rounded-xl transition">
                    Envoyer le lien de réinitialisation
                </button>
            </div>
        </form>
    </div>
</body>
</html>

