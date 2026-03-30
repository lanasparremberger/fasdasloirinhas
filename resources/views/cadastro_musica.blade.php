<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('imgs/link/icon.png') }}">
    <title>Cadastro de Música</title>
</head>

<body class="bg-gradient-to-br from-pink-50 via-white to-purple-100 min-h-screen text-gray-800">

    @include('header')

    <main class="max-w-5xl mx-auto mt-24 bg-white/80 backdrop-blur-lg p-8 rounded-3xl shadow-xl border border-pink-200">

    <h1 class="text-4xl font-bold text-center text-transparent bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text mb-8">
        ✨ Cadastre sua música favorita
    </h1>

    <div class="grid md:grid-cols-2 gap-8">

        <!-- FORM -->
        <form method="POST" action="{{ route('musica.store') }}" enctype="multipart/form-data" class="space-y-5">
            @csrf

            <div>
                <label class="text-sm text-gray-600">Música</label>
                <input type="text" name="musica_favorita"
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300 outline-none">
            </div>

            <div>
                <label class="text-sm text-gray-600">Número no álbum</label>
                <input type="number" name="numero_musica"
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300 outline-none">
            </div>

            <div>
                <label class="text-sm text-gray-600">Álbum</label>
                <select name="album_musica"
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300">
                    <option disabled selected>Selecione</option>
                    <option>1989</option>
                    <option>Red</option>
                    <option>Lover</option>
                </select>
            </div>

            <div>
                <label class="text-sm text-gray-600">Gênero</label>
                <select name="genero_musica"
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300">
                    <option>Pop</option>
                    <option>Folk</option>
                </select>
            </div>

            <div>
                <label class="text-sm text-gray-600">Comentário</label>
                <textarea rows="3"
                    class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300 resize-none"></textarea>
            </div>

            <div>
                <label class="text-sm text-gray-600">Imagem</label>
                <input type="file" id="imgInput"
                    class="w-full text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:bg-pink-400 file:text-white hover:file:bg-pink-500">
            </div>

            <button
                class="w-full py-3 mt-4 bg-gradient-to-r from-pink-400 to-purple-400 text-white font-semibold rounded-xl shadow-md hover:scale-105 transition">
                Enviar 💕
            </button>
        </form>

        <!-- PREVIEW / EXTRA -->
        <div class="bg-gradient-to-br from-pink-100 to-purple-100 rounded-2xl p-6 flex flex-col justify-between">

            <div>
                <h2 class="text-xl font-semibold text-gray-700 mb-4">
                    🎧 Preview
                </h2>

                <div class="bg-white rounded-xl p-4 shadow-md">
                    <p class="text-gray-500 text-sm">Sua música aparecerá assim:</p>

                    <div class="mt-3">
                        <h3 class="font-bold text-pink-500">Nome da música</h3>
                        <p class="text-sm text-gray-500">Álbum • Gênero</p>
                    </div>

                    <img id="previewImg" src="https://via.placeholder.com/300"
                        class="mt-4 rounded-lg w-full object-cover">
                </div>
            </div>

            <div class="mt-6 text-sm text-gray-500">
                💡 Dica: escolha uma imagem bonita pra deixar seu post mais atraente!
            </div>

        </div>

    </div>

</main>
<script src="{{asset('script/cadastro_musica_script.js')}}"></script>
</body>

</html>