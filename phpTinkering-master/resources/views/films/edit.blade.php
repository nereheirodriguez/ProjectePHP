<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuració de meta-informació: codificació de caràcters i visualització responsiva -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Títol de la pàgina -->
    <title>Films</title>

    <!-- Enllaç a la llibreria TailwindCSS per a l'estil de la pàgina -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<!-- Contenidor principal del formulari d'edició de pel·lícula, centrat i estilitzat -->
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">

    <!-- Títol de la pàgina -->
    <h1 class="text-3xl font-bold mb-4">Edit Film</h1>

    <!-- Formulari per editar la informació de la pel·lícula -->
    <form action="/update" method="POST">
        <!-- Camp ocult per enviar l'ID de la pel·lícula -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($film->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

        <!-- Camp per editar el nom de la pel·lícula -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name:</label>
            <input type="text" name="name" value="<?= htmlspecialchars($film->name) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Camp per editar el nom del director de la pel·lícula -->
        <div class="mb-4">
            <label for="director" class="block text-gray-700">Director:</label>
            <input type="text" name="director" value="<?= htmlspecialchars($film->director) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Camp per editar l'any de llançament de la pel·lícula -->
        <div class="mb-4">
            <label for="year" class="block text-gray-700">Year:</label>
            <input type="number" name="year" value="<?= htmlspecialchars($film->year) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Botó per enviar el formulari amb els canvis realitzats -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
    </form>

    <!-- Enllaç per tornar a la llista de pel·lícules -->
    <a href="/films" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>
