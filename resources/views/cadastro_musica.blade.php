<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@7/tinymce.min.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <link rel="icon" href="{{ asset('imgs/link/icon.png') }}">
    <title>Cadastro de Música</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro_musica_style.css') }}">
</head>

<body class="bg-gradient-to-br from-pink-500 via-white to-purple-100 min-h-screen text-gray-800">

    @include('components/header')
<canvas id="stars" class="fixed inset-0 -z-10"></canvas>
        <!-- PARTICULAS -->

    <div id="particles" class="fixed inset-0 -z-10"></div>
    <main class="max-w-5xl mx-auto mt-24 bg-white/80 backdrop-blur-lg p-8 rounded-3xl shadow-xl border border-pink-200">
        
        <h1
            class="text-4xl font-bold text-center text-transparent bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text mb-8">
            Cadastre sua música favorita
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
                    <label class="text-sm text-gray-600">Dê uma nota para esta música</label>
                    <ul class="avaliacao flex gap-1">
            <li class="star-icon star-vazia" data-avaliacao="1">★</li>
            <li class="star-icon star-vazia" data-avaliacao="2">★</li>
            <li class="star-icon star-vazia" data-avaliacao="3">★</li>
            <li class="star-icon star-vazia" data-avaliacao="4">★</li>
            <li class="star-icon star-vazia" data-avaliacao="5">★</li>
        </ul>
        
        <input type="hidden" name="avaliacao" id="avaliacao" value="0">
        
        <p class="mt-3 text-pink-500 font-bold text-sm">Nota atual: <span id="nota-display">0</span></p>
                </div>

                <div>
                    <label class="text-sm text-gray-600">Álbum</label>
                    <select name="album_musica"
                        class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300">
                        <option value="" class="text-gray-400" disabled selected>Selecione um álbum</option>
            
            <option value="1" class="text-pink-400">Taylor Swift (2006)</option>
            <option value="2" class="text-pink-400">Fearless (2008)</option>
            <option value="3" class="text-pink-400">The Taylor Swift Holiday Collection (2008)</option>
            <option value="4" class="text-pink-400">Speak Now (2010)</option>
            <option value="5" class="text-pink-400">Red (2012)</option>
            <option value="6" class="text-pink-400">1989 (2014)</option>
            <option value="7" class="text-pink-400">reputation (2017)</option>
            <option value="8" class="text-pink-400">Lover (2019)</option>
            <option value="9" class="text-pink-400">Folklore (2020)</option>
            <option value="10" class="text-pink-400">evermore (2020)</option>
            <option value="11" class="text-pink-400">Fearless (Taylor's Version) (2021)</option>
            <option value="12" class="text-pink-400">Red (Taylor's Version) (2021)</option>
            <option value="13" class="text-pink-400">Midnights (The Til Dawn Edition) (2022)</option>
            <option value="14" class="text-pink-400">Speak Now (Taylor's Version) (2023)</option>
            <option value="15" class="text-pink-400">1989 (Taylor's Version) (2023)</option>
            <option value="16" class="text-pink-400">THE TORTURED POESTS DEPARTAMENT: THE ANTHOLOGY (2024)</option>
            <option value="17" class="text-pink-400">The Life of a Showgirl (2025)</option>
            <option value="18" class="text-pink-400">Outros</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm text-gray-600">Gênero</label>
                    <select name="genero_musica"
                        class="w-full px-4 py-3 rounded-xl border border-pink-200 focus:ring-2 focus:ring-pink-300">
                        <option value="" class="text-gray-400" disabled selected>Selecione um estilo</option>
            <option value="1" class="text-pink-400">Pop</option>
            <option value="2" class="text-pink-400">Synth-Pop</option>
            <option value="3" class="text-pink-400">Country</option>
            <option value="4" class="text-pink-400">Dream Pop</option>
            <option value="5" class="text-pink-400">Bubblegum Pop</option>
            <option value="6" class="text-pink-400">Pop Funk</option>
            <option value="7" class="text-pink-400">Indie Pop</option>
            <option value="8" class="text-pink-400">R&B</option>
            <option value="9" class="text-pink-400">Soft Rock</option>
            <option value="10" class="text-pink-400">Folk Rock</option>
            <option value="11" class="text-pink-400">Disco Pop</option>
            <option value="12" class="text-pink-400">Indie Folk</option>
            <option value="13" class="text-pink-400">Art Pop</option>
            <option value="14" class="text-pink-400">Emo Pop</option>
            <option value="15" class="text-pink-400">Folk</option>
            <option value="16" class="text-pink-400">Orquestral</option>
            <option value="17" class="text-pink-400">Gospel</option>
                    </select>
                </div>

                <div>
                    <label class="text-sm text-gray-600">Comentário</label>
                    <textarea name="descricao_musica" id="descricao_musica" rows="4" placeholder="Digite aqui sua opinião ou um trecho da música..."
            class="w-full px-4 py-2 bg-[#1F2937] text-gray-200 border border-pink-500 rounded focus:outline-none focus:ring-2 focus:ring-sky-200 resize-none"></textarea>
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

                        <img id="previewImg" src="{{asset('imgs/cadastro_musica/previa.jpg')}}" alt="Preview da imagem"
                            class="mt-4 rounded-lg w-full object-cover">
                    </div>
                </div>

            </div>

        </div>

    </main>
    <script src="{{ asset('script/cadastro_musica_script.js') }}"></script>
</body>

</html>
