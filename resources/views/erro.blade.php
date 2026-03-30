<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 via-white to-purple-100 text-gray-800 flex items-center justify-center min-h-screen">

    <div class="text-center px-8 py-12 bg-white rounded-3xl shadow-xl max-w-md w-full border border-pink-100">
        <!-- Código 404 -->
        <h1 class="text-7xl font-extrabold text-pink-400">
            404
        </h1>

        <!-- Mensagem -->
        <h2 class="text-2xl font-semibold mt-4 text-gray-700">
            Página não encontrada 🎧
        </h2>

        <p class="text-gray-500 mt-2 text-sm">
            Essa música ainda não existe no Swiftly... mas você pode adicionar uma 😉
        </p>

        <!-- Botões -->
        <div class="mt-6 flex flex-col gap-3">
            <a href="{{ route('index') }}" class="w-full px-6 py-3 bg-pink-400 hover:bg-pink-500 text-white rounded-xl font-medium transition">
                Voltar ao início
            </a>

            <a href="{{ route('usuario.create') }}" class="w-full px-6 py-3 bg-purple-400 hover:bg-purple-500 text-white rounded-xl font-medium transition">
                Criar conta
            </a>
        </div>

        <!-- Rodapé -->
        <p class="mt-8 text-xs text-gray-400">
            Swiftly © {{ date('Y') }}
        </p>
    </div>

</body>
</html>