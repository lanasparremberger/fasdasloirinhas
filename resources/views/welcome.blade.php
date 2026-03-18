<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Taylor Swift & Sabrina Carpenter</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>

body{
background: linear-gradient(135deg,#fdf2f8,#e0e7ff);
}

.card{
perspective:1000px;
}

.card-inner{
position:relative;
width:100%;
height:100%;
transition:transform 0.8s;
transform-style:preserve-3d;
}

.card:hover .card-inner{
transform:rotateY(180deg);
}

.card-front,.card-back{
position:absolute;
width:100%;
height:100%;
backface-visibility:hidden;
border-radius:16px;
}

.card-back{
transform:rotateY(180deg);
}

</style>

</head>

<body class="font-sans text-gray-800">

<!-- HEADER -->

<header class="fixed w-full backdrop-blur-md bg-white/30 shadow-lg z-50">

<div class="max-w-7xl mx-auto flex justify-between items-center p-4">

<h1 class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text text-transparent">
Swift & Carpenter
</h1>

<nav class="space-x-6 font-semibold">

<a href="#taylor" class="hover:text-pink-500 transition">Taylor</a>

<a href="#sabrina" class="hover:text-purple-500 transition">Sabrina</a>

<a href="#galeria" class="hover:text-indigo-500 transition">Galeria</a>

</nav>

</div>

</header>

<!-- HERO -->

<section 
class="h-screen bg-cover bg-center flex items-center justify-center text-center relative"
style="background-image: url('imgs/show.jpg');"
>

<!-- overlay escuro -->
<div class="absolute inset-0 bg-black/50"></div>

<div class="relative z-10 text-white px-6">

<h2 class="text-6xl md:text-7xl font-extrabold bg-gradient-to-r from-pink-400 via-purple-400 to-indigo-400 bg-clip-text text-transparent">
Taylor & Sabrina
</h2>

<p class="mt-6 text-xl max-w-xl mx-auto text-gray-200">
Um fan site dedicado a duas das maiores estrelas do pop atual.
</p>

<button class="mt-8 px-8 py-3 rounded-full bg-white text-black font-bold hover:scale-110 transition">
Explorar
</button>

</div>

</section>

<!-- TAYLOR -->

<section id="taylor" class="py-20">

<h2 class="text-4xl font-bold text-center mb-16">
Taylor Swift Albums
</h2>

<div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">

<div class="card h-80">
<div class="card-inner">

<div class="card-front bg-white shadow-xl flex items-center justify-center">
<img src="https://upload.wikimedia.org/wikipedia/en/f/f2/Taylor_Swift_-_1989.png" class="rounded-xl w-48">
</div>

<div class="card-back bg-pink-200 flex items-center justify-center text-center p-4">
<p class="font-bold text-lg">
1989<br>
Era pop icônica da Taylor
</p>
</div>

</div>
</div>

<div class="card h-80">
<div class="card-inner">

<div class="card-front bg-white shadow-xl flex items-center justify-center">
<img src="https://upload.wikimedia.org/wikipedia/en/f/f5/Taylor_Swift_-_Midnights.png" class="rounded-xl w-48">
</div>

<div class="card-back bg-purple-200 flex items-center justify-center text-center p-4">
<p class="font-bold text-lg">
Midnights<br>
Álbum vencedor de Grammy
</p>
</div>

</div>
</div>

<div class="card h-80">
<div class="card-inner">

<div class="card-front bg-white shadow-xl flex items-center justify-center">
<img src="https://upload.wikimedia.org/wikipedia/en/f/f6/Taylor_Swift_-_Lover.png" class="rounded-xl w-48">
</div>

<div class="card-back bg-indigo-200 flex items-center justify-center text-center p-4">
<p class="font-bold text-lg">
Lover<br>
Era romântica e colorida
</p>
</div>

</div>
</div>

</div>

</section>

<!-- SABRINA -->

<section id="sabrina" class="py-20 bg-white/40 backdrop-blur">

<h2 class="text-4xl font-bold text-center mb-16">
Sabrina Carpenter Albums
</h2>

<div class="grid md:grid-cols-3 gap-10 max-w-6xl mx-auto">

<div class="card h-80">
<div class="card-inner">

<div class="card-front bg-white shadow-xl flex items-center justify-center">
<img src="https://upload.wikimedia.org/wikipedia/en/5/5b/Sabrina_Carpenter_-_Emails_I_Can%27t_Send.png" class="rounded-xl w-48">
</div>

<div class="card-back bg-yellow-200 flex items-center justify-center text-center p-4">
<p class="font-bold text-lg">
Emails I Can't Send
</p>
</div>

</div>
</div>

<div class="card h-80">
<div class="card-inner">

<div class="card-front bg-white shadow-xl flex items-center justify-center">
<img src="https://upload.wikimedia.org/wikipedia/en/7/79/Sabrina_Carpenter_-_Singular_Act_I.png" class="rounded-xl w-48">
</div>

<div class="card-back bg-orange-200 flex items-center justify-center text-center p-4">
<p class="font-bold text-lg">
Singular Act I
</p>
</div>

</div>
</div>

<div class="card h-80">
<div class="card-inner">

<div class="card-front bg-white shadow-xl flex items-center justify-center">
<img src="https://upload.wikimedia.org/wikipedia/en/9/9b/Sabrina_Carpenter_-_Evolution.png" class="rounded-xl w-48">
</div>

<div class="card-back bg-red-200 flex items-center justify-center text-center p-4">
<p class="font-bold text-lg">
Evolution
</p>
</div>

</div>
</div>

</div>

</section>

<!-- GALERIA -->

<section id="galeria" class="py-20">

<h2 class="text-4xl font-bold text-center mb-16">
Galeria
</h2>

<div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">

<img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4" class="rounded-xl hover:scale-105 transition">

<img src="https://images.unsplash.com/photo-1501612780327-45045538702b" class="rounded-xl hover:scale-105 transition">

<img src="https://images.unsplash.com/photo-1518972559570-7cc1309f3229" class="rounded-xl hover:scale-105 transition">

</div>

</section>

<!-- FOOTER -->

<footer class="text-center p-10 bg-black text-white">

<p>
Fan site dedicado a Taylor Swift e Sabrina Carpenter
</p>

</footer>

</body>
</html>