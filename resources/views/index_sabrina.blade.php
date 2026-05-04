<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Swiftly - Sabrina</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/link/icon.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index_style.css') }}">

</head>

<body class="font-sans text-gray-800">
    <canvas id="stars" class="fixed inset-0 -z-10"></canvas>

    <!-- PARTICULAS -->

    <div id="particles" class="fixed inset-0 -z-10"></div>

    <!-- NAVBAR -->

    @include('components/header')

    <!-- HERO -->

    <section class="relative h-screen overflow-hidden">

        <div id="slider" class="absolute inset-0">

            <img src="{{ asset('imgs/index_sabrina/sabrina_palco.webp') }}"
                class="slide absolute w-full h-full object-cover opacity-100 transition-opacity duration-1000">

            <img src="{{ asset('imgs/index_sabrina/sabrina_expresso.jpg') }}"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

            <img src="{{ asset('imgs/index_sabrina/sabrina_dunkin.jpg') }}"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center">

            <h1 class="text-6xl font-extrabold mb-6">
                Sabrina Carpenter
            </h1>

            <p class="text-xl max-w-xl">
                As eras, álbuns e momentos icônicos da filha da Taylor.
            </p>

        </div>

    </section>
    <!-- TAYLOR -->
    <!-- NAV SEÇÕES -->
    <nav class="w-full bg-white/80 backdrop-blur-md shadow-md sticky top-0 z-20">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-center space-x-8 font-semibold text-gray-700">

            <a href="#eras" class="hover:text-pink-500 transition">
                Eras
            </a>

            <a href="#musicas" class="hover:text-purple-500 transition">
                Músicas
            </a>

            <a href="#posts" class="hover:text-indigo-500 transition">
                Posts
            </a>

            <a href="#qsn" class="hover:text-sky-500 transition">
                Quem somos?
            </a>

        </div>
    </nav>

    <div class="flex justify-center mt-6">
        <a class="text-white bg-indigo-500 px-6 py-3 rounded-lg hover:bg-indigo-600 transition"
            href="{{ route('index') }}">
            Ir para página da Taylor
        </a>
    </div>

    <section id=" reveal" class="py-24">

        <h2 id="eras" class="text-4xl font-bold text-center mb-16 text-purple-600">
            Álbuns da Ipanema Brina
        </h2>

        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/eyes.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-sky-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Eyes Wide Open <br>
                            O início da carreira, com um pop adolescente e leve.
                        </p>
                    </div>

                </div>

            </div>






            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/evolution.png') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-red-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Evolution<br>
                            O country romântico e cheio de hits.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/singularI.webp') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-orange-100 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Singular: Act I<br>
                            O pop cheio de histórias pessoais.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/singularII.png') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-pink-400 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Singular: Act II<br>
                            A continuação do pop pessoal, com mais maturidade.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/eics.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-sky-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Emails I Can't Send<br>
                            O pop mais maduro e emocionalmente cru.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/fruitcake.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-lime-600 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Fruitcake (EP)<br>
                            O EP de Natal cheio de músicas festivas e alegres.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/short.avif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-sky-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Short 'n Sweet<br>
                            Um pop leve e divertido.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="{{ asset('imgs/index_sabrina/albuns/mans.jfif') }}" class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-white flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Man's Best Friend<br>
                            O EP de rock alternativo e experimental.
                        </p>
                    </div>

                </div>

            </div>




        </div>

    </section>



    <section id="musicas" class="py-20 text-center">

        <h2 class="text-4xl font-bold mb-10">
            Ouça as músicas
        </h2>

        <div class="flex flex-wrap justify-center gap-10">

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2BwO5K8Q7EPAJSGze3AAh9"
                width="300" height="80" allowfullscreen="" loading="lazy"></iframe>



            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2HRqTpkrJO5ggZyyK6NPWz"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>



            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3o99q6o0C2HdEiXJbLL5Wb"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>



            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/59tskctgqUmjCWAwhzYAFm"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>


            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/359HNzfOXhCMHB1pNKhyfH"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>


            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1Xmjr9Cft2ZdiGVZPxhqCs"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>


            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5il0jwWUlvgtIzWvzJi12z"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>


            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/53pcTIVGVE58vWWM7hfYPl"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>


            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5wX5skuafFdeF31vpM6Krl"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>


            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2KTdmzSdPipwFYdUdilmi3"
                width="300" height="80" allowfullscreen="" loading="lazy">

            </iframe>

        </div>

    </section>

    


    <!-- posts -->
    {{-- todo add os posts aq tirados do banco --}}
    <section id="posts" class="py-24">

        <h2 class="text-4xl font-bold text-center mb-16">
            The Life of the Swifties (e dos Carpenters)
        </h2>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">


            <img src="https://image.stern.de/34908840/t/AU/v5/w1440/r1.7778/-/taylorswift.jpg"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://s2-oglobo.glbimg.com/yMt5cSlX8RcKaIbuQTODJ9r_5p4=/0x0:1193x732/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2024/R/1/r9SaB3QXqA4LTto1cd8g/105475182-topshot-us-singer-songwriter-taylor-swift-arrives-for-the-81st-annual-golden-globe-a.jpg"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://images.impresa.pt/expresso/2025-12-12-taylor-swift.jpg-a5ce4154/original"
                class="rounded-xl hover:scale-105 transition">

        </div>

    </section>

    <section id="qsn" class="relative py-32 overflow-hidden">

        <div class="absolute inset-0 animated-bg"></div>

        <div class="stars"></div>

        <div class="relative max-w-6xl mx-auto px-6">

            <h2 class="text-center text-4xl md:text-5xl font-bold text-white mb-6">
                Feito com my blood, sweat and tears for this
            </h2>

            <p class="text-center text-white/80 mb-16">
                Valeu ai pro Roger que não me xingou quando eu disse que ia fazer <i> outro </i> site da loirinha. (Ele
                xingou, eu que ignorei)
            </p>

            <!-- 🪩 Glass Card -->
            <div class="grid md:grid-cols-2 gap-10 items-center">

                <!-- TEXTO -->
                <div
                    class="backdrop-blur-xl bg-white/10 p-8 rounded-3xl shadow-2xl border border-white/20 animate-fade-in">

                    <h3 class="text-2xl font-bold text-white mb-4">
                        Sobre o Projeto
                    </h3>

                    <p class="text-white/80 leading-relaxed">
                        Esse site foi criado para reunir eras, álbuns e momentos icônicos.
                        Um espaço feito por fãs, para fãs
                    </p>

                    <!-- LINKS -->
                    <div class="flex gap-4 mt-6 flex-wrap">

                        <a href="https://github.com/lanasparremberger" target="_blank"
                            class="social-btn bg-orange-300/80 hover:bg-orange-300">
                            <i class="fa-brands fa-github"></i>
                        </a>

                        <a href="https://www.instagram.com/lana.sparremberger/" target="_blank"
                            class="social-btn bg-pink-500/80 hover:bg-pink-500">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="https://x.com/evermorepeeta" target="_blank"
                            class="social-btn bg-blue-400/80 hover:bg-blue-400">
                            <i class="fa-brands fa-twitter" style="color: rgb(255, 255, 255);"></i>
                        </a>

                    </div>

                </div>

                <!-- FOTO -->
                <div class="flex justify-center items-center py-20">

                    <div class="card-3d">
                        <div class="card-content">

                            <img src="{{ asset('imgs/quemsomosnos/eunatheeras.jpg') }}" alt="Lana Sparremberger"
                                class="w-28 h-28 rounded-full mx-auto mb-4 border-4 border-pink-300 object-cover">

                            <h3 class="text-xl font-bold text-white text-center">
                                Lana Sparremberger
                            </h3>

                            <p class="text-white/70 text-center">
                                Desenvolvedora, <i> swiftie</i>, <i>carpenter</i> e criadora deste site.
                            </p>

                        </div>

                        <!-- brilho -->
                        <div class="glare"></div>
                    </div>

                </div>

            </div>
        </div>


    </section>



    <script src="{{ asset('script/index_script.js') }}"></script>

</body>

</html>
