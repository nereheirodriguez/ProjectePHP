<!DOCTYPE html>
<html lang="ca">
<head>
    <!-- Meta informació per configurar la codificació i la vista responsiva -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Títol de la pàgina -->
    <title>Afegir Pel·lícula</title>

    <!-- Enllaç a la biblioteca TailwindCSS per a l'estil de la pàgina -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<!-- Contenidor principal per la forma de l'usuari, amb estil TailwindCSS -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <!-- Títol de la pàgina -->
    <h1 class="text-3xl font-bold mb-4">Afegir Pel·lícula</h1>

    <!-- Formulari per afegir una nova pel·lícula -->
    <form action="/store" method="POST">
        <!-- Camp per introduir el títol de la pel·lícula -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Title:</label>
            <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter film title">
        </div>

        <!-- Camp per introduir el nom del director -->
        <div class="mb-4">
            <label for="director" class="block text-sm font-medium text-gray-700">Director:</label>
            <input type="text" name="director" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter director's name">
        </div>

        <!-- Camp per introduir l'any de l'estrena de la pel·lícula -->
        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Release Year:</label>
            <input type="number" name="year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter release year">
        </div>

        <!-- Botó per enviar el formulari -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Afegir</button>
    </form>

    <!-- Enllaç per tornar a la pàgina de llistat de pel·lícules -->
    <a href="/films" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 mt-4 inline-block">Tornar a la pàgina principal</a>
</div>
</body>
</html>
