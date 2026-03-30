<header id="mainHeader"
class="fixed top-0 left-0 w-full bg-white/60 backdrop-blur-lg border-b border-pink-100 transition-all duration-300 z-50">

    <div class="max-w-7xl mx-auto flex items-center justify-between px-8 py-4">

        <!-- LOGO -->
        <a href="{{ route('index') }}"
            class="text-3xl font-extrabold bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">
            Swiftly
        </a>

        <!-- NAV -->
        <nav class="flex items-center gap-8 text-gray-600 font-medium">

            <a href="{{ route('usuario.create') }}"
                class="{{ request()->routeIs('usuario.create') ? 'text-pink-500 font-semibold' : 'text-gray-600' }} hover:text-pink-500 transition">
                Entrar
            </a>

            <a href="#musicas" class="hover:text-purple-500 transition hover:scale-105">
                Feed
            </a>

            <a href="#posts" class="hover:text-indigo-500 transition hover:scale-105">
                Comentados
            </a>

            <!-- BOTÃO DESTACADO -->
            <a href="{{ route('musica.create') }}"
                class="{{ request()->routeIs('musica.create') ? 'text-purple-500 font-semibold' : 'text-gray-600' }} hover:text-purple-500 transition">
                + Música
            </a>

        </nav>

    </div>

</header>
