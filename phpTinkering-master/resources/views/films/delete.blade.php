<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Configuració de la codificació de caràcters i la visualització responsiva -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Títol de la pàgina -->
    <title>Films</title>

    <!-- Enllaç a TailwindCSS per al disseny i l'estil de la pàgina -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

<!-- Títol de la secció d'eliminació de pel·lícules -->
<h1 class="text-3xl font-bold mb-4">Delete Film</h1>

<!-- Missatge de confirmació d'eliminació de la pel·lícula amb el seu nom -->
<p>Vols eliminar la peli "<?= htmlspecialchars($film->name) ?>"?</p>

<!-- Formulari per confirmar l'eliminació de la pel·lícula -->
<form action="/destroy" method="POST" class="mt-4">
    <!-- Camp ocult amb l'ID de la pel·lícula que es vol eliminar -->
    <input type="hidden" name="id" value="<?= $film->id ?>">

    <!-- Botó per confirmar l'eliminació, amb estil en vermell -->
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
</form>

<!-- Enllaç per cancel·lar l'acció d'eliminació i tornar a la llista de pel·lícules -->
<a href="/films" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
</body>
</html>
