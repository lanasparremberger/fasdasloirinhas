<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Swiftly</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('imgs/link/icon.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index_style_nicolas.css') }}">

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

            <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26.jpeg') }}"
                class="slide absolute w-full h-full object-cover opacity-100 transition-opacity duration-1000">

            <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (4).jpeg') }}"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

            <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (10).jpeg') }}"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center">

            <h1 class="text-6xl font-extrabold mb-6">
                Nicolas Kreling
            </h1>

            <p class="text-xl max-w-xl">
                O mais lindo do mundo
            </p>

        </div>

    </section>
   

    <div class="flex justify-center mt-6">
        <a class="text-white bg-indigo-500 px-6 py-3 rounded-lg hover:bg-indigo-600 transition"
            href="{{ route('index_sabrina') }}">
            Ir para página da Sabrina
        </a>
    </div>
    <div class="flex justify-center mt-6">
        <a class="text-white bg-indigo-500 px-6 py-3 rounded-lg hover:bg-indigo-600 transition"
            href="{{ route('index') }}">
            Ir para página da Taylor
        </a>
    </div>

   <section id="reveal" class="py-24">

    <h2 id="eras" class="text-4xl font-bold text-center mb-16 text-purple-600">
        Fotos do polaquinho
    </h2>

    <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">

        <!-- CARD 1 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.24.jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-lime-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        carrapato
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 2 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (2).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-yellow-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        amassando pizza
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 3 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (1).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-violet-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        comendo pão
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 4 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (3).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-red-400 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        besties
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 5 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (5).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-sky-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        lindo
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 6 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (6).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-gray-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        indo ver a bosta do Grêmio
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 7 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (7).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-pink-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        REPUTATION
                    </p>
                </div>

            </div>
        </div>

        <!-- CARD 8 -->
        <div class="card">
            <div class="card-inner">

                <div class="card-front bg-white shadow-xl flex items-center justify-center overflow-hidden rounded-2xl h-80">
                    <img src="{{ asset('imgs/index_nicolas/WhatsApp Image 2026-05-04 at 13.25.26 (8).jpeg') }}"
                        class="w-full h-full object-cover">
                </div>

                <div class="card-back bg-zinc-200 flex items-center justify-center text-center p-6 rounded-2xl h-80">
                    <p class="font-bold text-lg">
                        little fortune
                    </p>
                </div>

            </div>
        </div>

    </div>

</section>

    
  

    <section class="py-28 text-center">

        <h2
            class="text-5xl font-extrabold mb-16 
    bg-gradient-to-r from-pink-500 to-purple-600 
    bg-clip-text text-transparent">

            Times do Polaco

        </h2>

        <div class="grid md:grid-cols-5 sm:grid-cols-2 gap-6 max-w-6xl mx-auto">

            <div onclick="setTema('gremio')" class="era bg-blue-500">
                Grêmio
            </div>

            <div onclick="setTema('corinthians')" class="era bg-gray-400">
                curinthians
            </div>

            <div onclick="setTema('barcelona')" class="era bg-blue-700">
                Barça
            </div>

            <div onclick="setTema('arsenal')" class="era bg-red-500">
                Arsenal
            </div>

            <div onclick="setTema('bayern')" class="era bg-red-800">
                Bayern
            </div>

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
                                Desenvolvedora, <i> swiftie</i>, <i>carpenter</i>, <i>namorada do polaquinho</i> e criadora deste site.
                            </p>

                        </div>

                        <!-- brilho -->
                        <div class="glare"></div>
                    </div>

                </div>

            </div>
        </div>


    </section>



    <script src="{{ asset('script/index_script_nicolas.js') }}"></script>

</body>

</html>
