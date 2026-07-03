<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>
    
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
    <main class="min-h-screen bg-gradient-to-br from-pink-100 via-fuchsia-50 to-sky-100 py-10">

    <div class="max-w-5xl mx-auto">

        <div class="bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl overflow-hidden">

            <div class="bg-gradient-to-r from-pink-500 to-cyan-500 p-8">

                <h1 class="text-4xl font-bold text-white">
                    🎵 Cadastrar Música
                </h1>

                <p class="text-pink-100 mt-2">
                    Adicione uma nova música à plataforma.
                </p>

            </div>

            <form action="{{ route('musica.store') }}" method="POST" enctype="multipart/form-data" class="p-10 space-y-8">

                @csrf

                <div>

                    <label class="font-semibold text-gray-700">
                        Nome da Música
                    </label>

                    <input
                        type="text"
                        name="name"
                        class="mt-2 w-full rounded-xl border-pink-300 focus:border-cyan-400 focus:ring-cyan-400"
                        placeholder="Digite o nome da música"
                    >

                </div>

                <div>

                    <label class="font-semibold text-gray-700">
                        Imagem
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="mt-2 w-full rounded-xl border"
                        onchange="previewImage(event)"
                    >

                    <img
                        id="preview"
                        class="hidden mt-4 rounded-xl shadow-lg w-52"
                    >

                </div>

                <div class="grid grid-cols-2 gap-6">

                    <div>

                        <label class="font-semibold text-gray-700">
                            Nota
                        </label>

                        <input
                            type="number"
                            min="0"
                            max="10"
                            name="rating"
                            class="mt-2 w-full rounded-xl border-pink-300"
                        >

                    </div>

                    <div>

                        <label class="font-semibold text-gray-700">
                            Álbum
                        </label>

                        <select
                            name="album_id"
                            class="mt-2 w-full rounded-xl border-pink-300"
                        >

                            @foreach($albums as $album)

                                <option value="{{ $album->id }}">
                                    {{ $album->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="grid grid-cols-2 gap-6">

                    <div>

                        <label class="font-semibold text-gray-700">
                            Gênero
                        </label>

                        <select
                            name="genre_id"
                            class="mt-2 w-full rounded-xl border-pink-300"
                        >

                            @foreach($genres as $genre)

                                <option value="{{ $genre->id }}">
                                    {{ $genre->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <div>

                        <label class="font-semibold text-gray-700">
                            Artista
                        </label>

                        <select
                            name="artist_id"
                            class="mt-2 w-full rounded-xl border-pink-300"
                        >

                            @foreach($artists as $artist)

                                <option value="{{ $artist->id }}">
                                    {{ $artist->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div>

                    <label class="font-semibold text-gray-700">
                        Descrição
                    </label>

                    <textarea
                        id="description"
                        name="description"
                    ></textarea>

                </div>

                <div class="flex justify-end">

                    <button
                        class="bg-gradient-to-r from-pink-500 to-cyan-500 text-white px-10 py-4 rounded-2xl font-bold hover:scale-105 duration-300 shadow-xl"
                    >
                        💖 Salvar Música
                    </button>

                </div>

            </form>

        </div>

    </div>

</main>
    <script src="{{ asset('script/cadastro_musica_script.js') }}"></script>
</body>

</html>
