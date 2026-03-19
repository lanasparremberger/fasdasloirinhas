<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Swiftly</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <!-- Particles -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

    <style>
        .era {
            padding: 40px;
            border-radius: 16px;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .era:hover {
            transform: scale(1.08) rotate(-1deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        body {
            background: linear-gradient(135deg, #fdf2f8, #e0e7ff);
        }

        /* cards giratorios */

        .card {
            perspective: 1000px;
            height: 340px;
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .card:hover .card-inner {
            transform: rotateY(180deg);
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 16px;
        }

        .card-back {
            transform: rotateY(180deg);
        }




        .album {

            width: 220px;
            height: 220px;
            border-radius: 50%;
            animation: spin 12s linear infinite;
            transition: transform 0.4s;

        }

        .album:hover {

            animation-play-state: paused;
            transform: scale(1.1);

        }

        @keyframes spin {

            from {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(360deg)
            }

        }

        .reveal {

            opacity: 0;
            transform: translateY(80px);
            transition: all 1s ease;

        }

        .reveal.active {

            opacity: 1;
            transform: translateY(0);

        }

        .era {

            color: white;
            font-weight: bold;
            padding: 40px;
            border-radius: 16px;
            cursor: pointer;
            transition: all .4s;

        }

        .era:hover {

            transform: scale(1.1);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);

        }
    </style>

</head>

<body class="font-sans text-gray-800">
    <canvas id="stars" class="fixed inset-0 -z-10"></canvas>

    <!-- PARTICULAS -->

    <div id="particles" class="fixed inset-0 -z-10"></div>

    <!-- NAVBAR -->

    <header class="fixed w-full backdrop-blur-md bg-white/30 border-b border-white/20 z-50">

        <div class="max-w-7xl mx-auto flex justify-between items-center p-4">

            <h1 class="text-2xl font-bold bg-pink-500 bg-clip-text text-transparent">
                Swiftly
            </h1>

            <nav class="space-x-6 font-semibold">

                <a href="#taylor" class="hover:text-pink-500">Eras</a>
                <a href="#sabrina" class="hover:text-purple-500">Musicas</a>
                <a href="#galeria" class="hover:text-indigo-500">Galeria</a>

            </nav>

        </div>

    </header>

    <!-- HERO -->

    <section class="relative h-screen overflow-hidden">

        <div id="slider" class="absolute inset-0">

            <img src="https://cdn.wallpapersafari.com/29/56/EMzRax.jpg"
                class="slide absolute w-full h-full object-cover opacity-100 transition-opacity duration-1000">

            <img src="https://pbs.twimg.com/media/Fm6pWFLaEAEz-dx.jpg"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

            <img src="https://w0.peakpx.com/wallpaper/189/822/HD-wallpaper-taylor-swift-in-red-lightning-background-wearing-glittering-dress-singing-celebrities.jpg"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center">

            <h1 class="text-6xl font-extrabold mb-6">
                Taylor Swift
            </h1>

            <p class="text-xl max-w-xl">
                As eras, álbuns e momentos icônicos do pop moderno.
            </p>

        </div>

    </section>
    <!-- TAYLOR -->

    <section id="taylor reveal" class="py-24">

        <h2 class="text-4xl font-bold text-center mb-16 text-purple-600">
            Álbuns da Taylor
        </h2>

        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/3/3e/Taylor_Swift_%C3%81lbum.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-lime-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Taylor Swift (debut)<br>
                            O ínicio da jornada country.
                        </p>
                    </div>

                </div>

            </div>






            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b2735ab4f806b1126caf63492fc5"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-yellow-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Fearless<br>
                            O country romântico e cheio de hits.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/0/00/Taylor_Swift_-_Speak_Now.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-violet-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Speak Now<br>
                            O pop country cheio de histórias pessoais.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b27396384c98ac4f3e7c2440f5b5"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-red-400 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Red<br>
                            A transição para o pop e o country moderno.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/e/f/e/5/376171685470680.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-sky-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            1989<br>
                            A era pop que mudou tudo.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273da5d5aeeabacacc1263c0f4b"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-gray-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Reputation<br>
                            Volta por cima com uma era mais sombria e cheia de hits.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-pink-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Lover<br>
                            Romance, cores e liberdade.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/0/1/1/6/932571680531157.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-zinc-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Folklore<br>
                            Indie instrumental e letras introspectivas.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/e/a/8/a/991101607683335.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-yellow-600 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Evermore<br>
                            A continuação do folklore, com mais histórias e atmosferas.
                        </p>
                    </div>

                </div>

            </div>



            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273a48964b5d9a3d6968ae3e0de"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-amber-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Fearless (Taylor's Version)<br>
                            A regravação do clássico com novas faixas e uma nova perspectiva.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273318443aab3531a0558e79a4d"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-red-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Red (Taylor's Version)<br>
                            A regravação do álbum que marcou a transição para o pop, com novas faixas e uma nova
                            perspectiva.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/a/5/c/f/1398201666349375.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-blue-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Midnights<br>
                            Noites, pensamentos e introspecção.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b2730b04da4f224b51ff86e0a481"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-indigo-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Speak Now (Taylor's Version)<br>
                            Album regravado com novas faixas e uma nova perspectiva sobre a fase country pop.
                        </p>
                    </div>

                </div>

            </div>


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d00001e02904445d70d04eb24d6bb79ac"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-blue-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            1989 (Taylor's Version)<br>
                            A regravação do álbum que mudou tudo, com novas faixas e uma nova perspectiva sobre a era
                            pop.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b2738ecc33f195df6aa257c39eaa"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-stone-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            The Tortured Poets Department<br>
                            A era com uma vibe mais sombria e poética.
                        </p>
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273d7812467811a7da6e6a44902"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-orange-300 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            The Life of a Showgirl<br>
                            A era com uma vibe mais teatral e glamourosa.
                        </p>
                    </div>

                </div>

            </div>



        </div>

    </section>

    <!-- SABRINA -->


    <section class="py-28">

        <h2 class="text-5xl font-extrabold text-center mb-24">
            Linha do Tempo — Eras da Taylor Swift
        </h2>

        <div class="relative max-w-6xl mx-auto">

            <!-- linha central -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-pink-400"></div>

            <!-- Debut -->
            <div class="mb-16 flex justify-between items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-green-600">2006 — Debut</h3>
                    <p class="text-gray-600 mt-2">
                        O primeiro álbum de Taylor Swift apresentou sua mistura de country e pop.
                        Com apenas 16 anos, ela começou a ganhar atenção com composições autobiográficas.
                    </p>
                </div>

            </div>


            <!-- Fearless -->
            <div class="mb-16 flex justify-between flex-row-reverse items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-yellow-500">2008 — Fearless</h3>
                    <p class="text-gray-600 mt-2">
                        Inclui sucessos como “Love Story” e “You Belong With Me”.
                        O álbum venceu o Grammy de Álbum do Ano.
                    </p>
                </div>

            </div>


            <!-- Red -->
            <div class="mb-16 flex justify-between items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-red-500">2012 — Red</h3>
                    <p class="text-gray-600 mt-2">
                        Uma mistura de country, pop e eletrônico.
                        A música “All Too Well” se tornou uma das mais aclamadas da carreira.
                    </p>
                </div>

            </div>


            <!-- 1989 -->
            <div class="mb-16 flex justify-between flex-row-reverse items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-sky-500">2014 — 1989</h3>
                    <p class="text-gray-600 mt-2">
                        Primeiro álbum totalmente pop.
                        Inclui hits como “Shake It Off”, “Blank Space” e “Style”.
                        Venceu o Grammy de Álbum do Ano.
                    </p>
                </div>

            </div>


            <!-- Reputation -->
            <div class="mb-16 flex justify-between items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900">2017 — Reputation</h3>
                    <p class="text-gray-600 mt-2">
                        Uma era mais sombria e eletrônica, criada após polêmicas públicas.
                        A turnê do álbum quebrou recordes de bilheteria.
                    </p>
                </div>

            </div>


            <!-- Lover -->
            <div class="mb-16 flex justify-between flex-row-reverse items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-pink-500">2019 — Lover</h3>
                    <p class="text-gray-600 mt-2">
                        Uma era colorida e romântica.
                        O álbum traz temas de amor, maturidade e esperança.
                    </p>
                </div>

            </div>


            <!-- Folklore -->
            <div class="mb-16 flex justify-between items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-gray-500">2020 — Folklore</h3>
                    <p class="text-gray-600 mt-2">
                        Um álbum indie/folk lançado durante a pandemia.
                        Ganhou o Grammy de Álbum do Ano.
                    </p>
                </div>

            </div>


            <!-- Midnights -->
            <div class="mb-16 flex justify-between flex-row-reverse items-center w-full">

                <div class="w-5/12"></div>

                <div class="z-10 bg-pink-500 w-6 h-6 rounded-full"></div>

                <div class="w-5/12 bg-white p-6 rounded-xl shadow-lg">
                    <h3 class="text-xl font-bold text-indigo-600">2022 — Midnights</h3>
                    <p class="text-gray-600 mt-2">
                        Explora pensamentos e histórias de noites sem dormir.
                        Quebrou recordes de streaming no lançamento.
                    </p>
                </div>

            </div>


        </div>
    </section>



    <section class="py-20 text-center">

        <h2 class="text-4xl font-bold mb-10">
            Ouça as músicas
        </h2>

        <div class="flex flex-wrap justify-center gap-10">

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/0V3wPSX9ygBnCm8psDIegu"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>

            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1VdZ0vKfR5jneCmWIUAMxK"
                width="300" height="80" allowfullscreen="" loading="lazy">
            </iframe>

        </div>

    </section>

    <section class="py-28 text-center">

        <h2
            class="text-5xl font-extrabold mb-16 
    bg-gradient-to-r from-pink-500 to-purple-600 
    bg-clip-text text-transparent">

            Mapa das Eras

        </h2>

        <div class="grid md:grid-cols-5 sm:grid-cols-2 gap-6 max-w-6xl mx-auto">

            <div onclick="setEra('debut')" class="era bg-green-500">
                Debut
            </div>

            <div onclick="setEra('fearless')" class="era bg-yellow-400 text-black">
                Fearless
            </div>

            <div onclick="setEra('speaknow')" class="era bg-purple-600">
                Speak Now
            </div>

            <div onclick="setEra('red')" class="era bg-red-500">
                Red
            </div>

            <div onclick="setEra('1989')" class="era bg-sky-400">
                1989
            </div>

            <div onclick="setEra('reputation')" class="era bg-gray-900">
                Reputation
            </div>

            <div onclick="setEra('lover')" class="era bg-pink-400">
                Lover
            </div>

            <div onclick="setEra('folklore')" class="era bg-gray-400 text-black">
                Folklore
            </div>

            <div onclick="setEra('evermore')" class="era bg-amber-700">
                Evermore
            </div>

            <div onclick="setEra('midnights')" class="era bg-indigo-700">
                Midnights
            </div>

            <div onclick="setEra('ttpd')" class="era bg-stone-300 text-black">
                TTPD
            </div>

        </div>

    </section>

    <!-- GALERIA -->

    <section id="galeria" class="py-24">

        <h2 class="text-4xl font-bold text-center mb-16">
            The Life of the Taylor Swift
        </h2>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">

            {{-- <img src="{{ asset('imgs/show.jpg') }}" class="rounded-xl hover:scale-105 transition"> --}}

            <img src="https://image.stern.de/34908840/t/AU/v5/w1440/r1.7778/-/taylorswift.jpg"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://s2-oglobo.glbimg.com/yMt5cSlX8RcKaIbuQTODJ9r_5p4=/0x0:1193x732/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2024/R/1/r9SaB3QXqA4LTto1cd8g/105475182-topshot-us-singer-songwriter-taylor-swift-arrives-for-the-81st-annual-golden-globe-a.jpg"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://images.impresa.pt/expresso/2025-12-12-taylor-swift.jpg-a5ce4154/original"
                class="rounded-xl hover:scale-105 transition">

        </div>

    </section>

    <!-- SCRIPT PARTICLES -->

    <script>
        window.onload = () => {

            confetti({
                particleCount: 200,
                spread: 120,
                origin: {
                    y: 0.6
                }
            })

        }
        const canvas = document.getElementById("stars")
        const ctx = canvas.getContext("2d")

        canvas.width = window.innerWidth
        canvas.height = window.innerHeight

        let stars = []

        for (let i = 0; i < 120; i++) {

            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                size: Math.random() * 2,
                speed: Math.random() * 0.3
            })

        }

        function animate() {

            ctx.clearRect(0, 0, canvas.width, canvas.height)

            stars.forEach(star => {

                ctx.fillStyle = "white"
                ctx.beginPath()
                ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2)
                ctx.fill()

                star.y += star.speed

                if (star.y > canvas.height) {
                    star.y = 0
                }

            })

            requestAnimationFrame(animate)

        }

        animate()

        tsParticles.load("particles", {
            particles: {
                number: {
                    value: 60
                },
                size: {
                    value: 3
                },
                move: {
                    speed: 1
                },
                links: {
                    enable: true,
                    color: "#ffffff"
                },
                color: {
                    value: "#ffffff"
                }
            },
            background: {
                color: "transparent"
            }
        })




        function setEra(era) {
            switch (era) {
                case "lover":
                    document.body.style.background = "linear-gradient(135deg,#ff9ecf,#ff4da6)";
                    break;

                case "folklore":
                    document.body.style.background = "linear-gradient(135deg,#d1d5db,#6b7280)";
                    break;

                case "1989":
                    document.body.style.background = "linear-gradient(135deg,#7dd3fc,#38bdf8)";
                    break;

                case "reputation":
                    document.body.style.background = "linear-gradient(135deg,#000000,#1f2937)";
                    break;

                case "midnights":
                    document.body.style.background = "linear-gradient(135deg,#1e1b4b,#4338ca)";
                    break;

                case "red":
                    document.body.style.background = "linear-gradient(135deg,#ef4444,#7f1d1d)";
                    break;

                case "fearless":
                    document.body.style.background = "linear-gradient(135deg,#facc15,#f59e0b)";
                    break;

                case "speaknow":
                    document.body.style.background = "linear-gradient(135deg,#a855f7,#6b21a8)";
                    break;

                case "evermore":
                    document.body.style.background = "linear-gradient(135deg,#b45309,#78350f)";
                    break;

                case "debut":
                    document.body.style.background = "linear-gradient(135deg,#9acd32,#2e8b57)";
                    break;

                case "ttpd":
                    document.body.style.background = "linear-gradient(135deg,#f5f5f4,#a8a29e)";
                    break;
            }
        }


        function reveal() {

            let elements = document.querySelectorAll(".reveal")

            elements.forEach(el => {

                let windowHeight = window.innerHeight
                let elementTop = el.getBoundingClientRect().top

                if (elementTop < windowHeight - 100) {

                    el.classList.add("active")

                }

            })

        }

        window.addEventListener("scroll", reveal)

        let slides = document.querySelectorAll(".slide")
        let index = 0

        setInterval(() => {

            slides[index].style.opacity = 0
            index = (index + 1) % slides.length
            slides[index].style.opacity = 1

        }, 4000)
    </script>

</body>

</html>
