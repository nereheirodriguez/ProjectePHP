<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App de Pel·lícules i Futbol</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html { scroll-behavior: smooth; }

        /* Navbar */
        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.7);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1.2s ease-in-out forwards;
        }

        /* Fons de la secció Hero */
        .hero {
            background: linear-gradient(120deg, #a1b0fd, rgba(255, 120, 120, 0.76));
            color: #fff;
        }

        /* Efecte de hover per al botó */
        .button-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        /* Animació de les seccions */
        .section {
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 1s forwards;
            animation-delay: 0.3s;
        }

        @keyframes fadeIn { to { opacity: 1; } }
        @keyframes slideUp { to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- Navbar -->
<nav class="navbar fixed w-full z-50 text-gray-800 py-4">
    <div class="max-w-6xl mx-auto px-6 flex justify-between items-center">
        <a href="#inici" class="text-2xl font-extrabold tracking-wider hover:text-blue-500 transition duration-300">🎬⚽️ App de Pel·lícules i Futbol</a>

        <!-- Menú responsiu -->
        <div class="hidden md:flex space-x-4">
            <a href="/films" class="hover:text-blue-500 transition duration-300">Pàgina de Pel·lícules</a>
            <a href="/futbolistes" class="hover:text-green-500 transition duration-300">Pàgina de Futbolistes</a>
            <a href="#films" class="hover:text-blue-500 transition duration-300">Secció Pel·lícules</a>
            <a href="#futbolistes" class="hover:text-green-500 transition duration-300">Secció Futbolistes</a>
            <a href="#contacte" class="hover:text-blue-500 transition duration-300">Contacte</a>
        </div>

        <!-- Botó del menú per a mòbils -->
        <button id="menu-toggle" class="md:hidden text-blue-500 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Menú desplegable per a mòbils -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col items-center space-y-2 mt-4">
        <a href="/films" class="hover:text-blue-500 transition duration-300">Pàgina de Pel·lícules</a>
        <a href="/futbolistes" class="hover:text-green-500 transition duration-300">Pàgina de Futbolistes</a>
        <a href="#films" class="hover:text-blue-500 transition duration-300">Secció Pel·lícules</a>
        <a href="#futbolistes" class="hover:text-green-500 transition duration-300">Secció Futbolistes</a>
        <a href="#contacte" class="hover:text-blue-500 transition duration-300">Contacte</a>
    </div>
</nav>

<!-- Secció Hero -->
<section id="inici" class="hero section pt-28 pb-20 text-center">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-6 text-white drop-shadow-md">Benvingut a l'App de Pel·lícules i Futbolistes</h1>
        <p class="text-base md:text-lg mb-8 text-gray-200">Descobreix i gestiona les teves pel·lícules i futbolistes favorits!</p>
        <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
            <a href="#films" class="button-hover bg-white text-blue-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-100 transition duration-300">Explora Pel·lícules</a>
            <a href="#futbolistes" class="button-hover bg-white text-green-600 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-green-100 transition duration-300">Explora Futbolistes</a>
        </div>
    </div>
</section>

<!-- Secció de Pel·lícules -->
<section id="films" class="section py-16 bg-white text-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-blue-600">Les Nostres Pel·lícules</h2>
        <p class="text-sm md:text-base text-gray-600 mb-12">Explora una gran varietat de pel·lícules, i afegeix les teves preferides a la col·lecció.</p>
        <a href="/films" class="button-hover bg-blue-500 text-white font-semibold py-3 px-6 rounded-full hover:bg-blue-600 transition duration-300">Veure Pel·lícules</a>
    </div>
</section>

<!-- Secció de Futbolistes -->
<section id="futbolistes" class="section py-16 bg-gradient-to-r from-green-100 via-white to-green-100 text-gray-800">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-green-600">Els Millors Futbolistes</h2>
        <p class="text-sm md:text-base text-gray-600 mb-12">Descobreix els futbolistes més destacats i afegeix els teus preferits a la col·lecció.</p>
        <a href="/futbolistes" class="button-hover bg-green-500 text-white font-semibold py-3 px-6 rounded-full hover:bg-green-600 transition duration-300">Veure Futbolistes</a>
    </div>
</section>

<!-- Secció de Contacte -->
<section id="contacte" class="section py-16 bg-blue-600 text-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">Contacte</h2>
        <p class="text-sm md:text-lg mb-12">Tens alguna pregunta o suggeriment? No dubtis en contactar amb nosaltres.</p>
        <a href="mailto:info@nerehei.com" class="button-hover bg-white text-blue-600 font-semibold py-3 px-6 rounded-full hover:bg-blue-100 transition duration-300">Envia un Missatge</a>
    </div>
</section>

<!-- Peu de pàgina -->
<footer class="bg-gray-800 text-gray-400 py-8">
    <div class="max-w-6xl mx-auto text-center px-4">
        <p class="text-sm mb-2">Creat per <span class="text-blue-400 font-semibold">Nerehei</span></p>
        <p class="text-xs opacity-75">&copy; 2024 Tots els drets reservats.</p>
        <div class="mt-3 animate-bounce">
            <a href="#inici" class="text-blue-300 hover:text-blue-500 transition duration-300">Torna a dalt</a>
        </div>
    </div>
</footer>

<!-- Script per al menú desplegable en mòbils -->
<script>
    const menuToggle = document.getElementById("menu-toggle");
    const mobileMenu = document.getElementById("mobile-menu");

    menuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>

</body>
</html>
