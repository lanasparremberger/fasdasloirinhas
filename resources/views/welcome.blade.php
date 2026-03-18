<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Swift & Carpenter</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Particles -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

    <style>
        <style>body {
            cursor: url('https://cdn-icons-png.flaticon.com/512/616/616490.png'), auto;
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
    </style>

</head>

<body class="font-sans text-gray-800">

    <!-- PARTICULAS -->

    <div id="particles" class="fixed inset-0 -z-10"></div>

    <!-- NAVBAR -->

    <header class="fixed w-full backdrop-blur-md bg-white/30 border-b border-white/20 z-50">

        <div class="max-w-7xl mx-auto flex justify-between items-center p-4">

            <h1 class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text text-transparent">
                Swift & Carpenter
            </h1>

            <nav class="space-x-6 font-semibold">

                <a href="#taylor" class="hover:text-pink-500">Taylor</a>
                <a href="#sabrina" class="hover:text-purple-500">Sabrina</a>
                <a href="#galeria" class="hover:text-indigo-500">Galeria</a>

            </nav>

        </div>

    </header>

    <!-- HERO -->

    <section class="relative h-screen overflow-hidden">

        <div id="slider" class="absolute inset-0">

            <img src="https://s.yimg.com/os/en/cosmopolitan_438/eb1a6952f38f32d9b2e0c14c8625d3c3"
                class="slide absolute w-full h-full object-cover opacity-100 transition-opacity duration-1000">

            <img src="https://people.com/thmb/dj2HODBQHv2vVlswX7ftQrzpWYI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(599x0:601x2)/sabrina-carpenter-short-tout-082124-c7c9705e347249218b25d475d195b102.jpg"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

            <img src="https://images.unsplash.com/photo-1518972559570-7cc1309f3229"
                class="slide absolute w-full h-full object-cover opacity-0 transition-opacity duration-1000">

        </div>

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="relative z-10 h-full flex flex-col justify-center items-center text-white text-center">

            <h1 class="text-6xl font-extrabold mb-6">
                Taylor & Sabrina
            </h1>

            <p class="text-xl max-w-xl">
                As eras, álbuns e momentos icônicos do pop moderno.
            </p>

        </div>

    </section>
    <!-- TAYLOR -->

    <section id="taylor" class="py-24">

        <h2 class="text-4xl font-bold text-center mb-16 text-purple-600">
            Álbuns da Taylor
        </h2>

        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/f2/Taylor_Swift_-_1989.png"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-pink-200 flex items-center justify-center text-center p-6">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/f5/Taylor_Swift_-_Midnights.png"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-purple-200 flex items-center justify-center text-center p-6">
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
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/f6/Taylor_Swift_-_Lover.png"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-indigo-200 flex items-center justify-center text-center p-6">
                        <p class="font-bold text-lg">
                            Lover<br>
                            Romance, cores e liberdade.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- SABRINA -->

    <section id="sabrina" class="py-24 bg-white/40 backdrop-blur">

        <h2 class="text-4xl font-bold text-center mb-16 text-pink-600">
            Álbuns da Sabrina
        </h2>

        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/5/5b/Sabrina_Carpenter_-_Emails_I_Can%27t_Send.png"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-yellow-200 flex items-center justify-center text-center p-6">
                        Emails I Can't Send
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/7/79/Sabrina_Carpenter_-_Singular_Act_I.png"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-orange-200 flex items-center justify-center text-center p-6">
                        Singular Act I
                    </div>

                </div>

            </div>

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/en/9/9b/Sabrina_Carpenter_-_Evolution.png"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-red-200 flex items-center justify-center text-center p-6">
                        Evolution
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="py-24">

        <h2 class="text-4xl font-bold text-center mb-20">
            Eras da Taylor
        </h2>

        <div class="max-w-4xl mx-auto border-l-4 border-pink-400 pl-8 space-y-12">

            <div>
                <h3 class="text-2xl font-bold text-pink-500">2006 — Debut</h3>
                <p class="text-gray-600">A fase country que iniciou sua carreira.</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-purple-500">2014 — 1989</h3>
                <p class="text-gray-600">A transição completa para o pop.</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-indigo-500">2019 — Lover</h3>
                <p class="text-gray-600">Uma era colorida e romântica.</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold text-blue-500">2022 — Midnights</h3>
                <p class="text-gray-600">Reflexões noturnas e introspecção.</p>
            </div>

        </div>

    </section>

    <!-- GALERIA -->

    <section id="galeria" class="py-24">

        <h2 class="text-4xl font-bold text-center mb-16">
            Galeria
        </h2>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">

            <img src="{{ asset('imgs/show.jpg') }}" class="rounded-xl hover:scale-105 transition">

            <img src="https://images.unsplash.com/photo-1501612780327-45045538702b"
                class="rounded-xl hover:scale-105 transition">

            <img src="https://images.unsplash.com/photo-1518972559570-7cc1309f3229"
                class="rounded-xl hover:scale-105 transition">

        </div>

    </section>

    <!-- SCRIPT PARTICLES -->

    <script>
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


        let slides = document.querySelectorAll(".slide")
        let index = 0

        setInterval(() => {

                slides[index].style.opacity = 0
                index = (index + 1) % slides.length
                slides[index].style.opacity = 1

            }, 4000) <
            />
    </script>

</body>

</html>
