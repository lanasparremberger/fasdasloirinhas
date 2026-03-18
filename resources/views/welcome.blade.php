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
                        <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/d/8/1/d/416201728294476.jpg"
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
                        <img src="https://akamai.sscdn.co/uploadfile/letras/albuns/a/5/c/f/1398201666349375.jpg"
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
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
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

            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://upload.wikimedia.org/wikipedia/pt/3/3e/Taylor_Swift_%C3%81lbum.jpg"
                            class="w-52 rounded-xl">
                    </div>

                    <div class="card-back bg-indigo-200 flex items-center justify-center text-center p-6">
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

                    <div class="card-back bg-indigo-200 flex items-center justify-center text-center p-6">
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
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
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


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
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


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
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


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
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


            <div class="card">

                <div class="card-inner">

                    <div class="card-front bg-white shadow-xl flex items-center justify-center">
                        <img src="https://i.scdn.co/image/ab67616d0000b273e787cffec20aa2a396a61647"
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
            class="text-5xl font-extrabold mb-16 bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
            Mapa das Eras
        </h2>

        <div class="grid md:grid-cols-5 gap-6 max-w-6xl mx-auto">

            <div onclick="setEra('lover')" class="era bg-pink-400">
                Lover
            </div>

            <div onclick="setEra('folklore')" class="era bg-gray-400">
                Folklore
            </div>

            <div onclick="setEra('1989')" class="era bg-blue-400">
                1989
            </div>

            <div onclick="setEra('reputation')" class="era bg-gray-800">
                Reputation
            </div>

            <div onclick="setEra('midnights')" class="era bg-indigo-700">
                Midnights
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

            if (era === "lover") {

                document.body.style.background =
                    "linear-gradient(135deg,#ff9ecf,#ff4da6)"

            }

            if (era === "folklore") {

                document.body.style.background =
                    "linear-gradient(135deg,#d1d5db,#6b7280)"

            }

            if (era === "1989") {

                document.body.style.background =
                    "linear-gradient(135deg,#60a5fa,#38bdf8)"

            }

            if (era === "reputation") {

                document.body.style.background =
                    "linear-gradient(135deg,#000000,#1f2937)"

            }

            if (era === "midnights") {

                document.body.style.background =
                    "linear-gradient(135deg,#1e1b4b,#4338ca)"

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
