<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Pel·lícules</title>
    <!-- Enllaç a Tailwind CSS per estilitzar la pàgina -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8">

<!-- Contenidor principal per a la llista de pel·lícules -->
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <!-- Títol de la pàgina -->
    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">Llista de Pel·lícules</h1>

    <!-- Botons per afegir una nova pel·lícula i per tornar a la pàgina principal -->
    <div class="flex flex-col md:flex-row gap-2 md:gap-4 mb-4">
        <a href="/create" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 text-center">Afegir Nova Pel·lícula</a>
        <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 text-center">Tornar a la pàgina principal</a>
    </div>

    <!-- Taula per a la llista de pel·lícules -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <!-- Encapçalament de la taula amb noms de les columnes -->
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-xs md:text-sm leading-normal">
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">ID</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">Títol</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">Director</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-left">Any</th>
                <th class="py-2 px-4 md:py-3 md:px-6 text-center">Accions</th>
            </tr>
            </thead>

            <!-- Cos de la taula on es llistaran les pel·lícules -->
            <tbody class="text-gray-600 text-xs md:text-sm font-light">
            <?php if (empty($films)): ?>
                    <!-- Missatge quan no hi ha pel·lícules disponibles -->
            <tr>
                <td colspan="5" class="py-3 px-4 text-center">No hi ha pel·lícules disponibles.</td>
            </tr>
            <?php else: ?>
                    <!-- Recorrem cada pel·lícula per mostrar-la en una fila de la taula -->
                <?php foreach ($films as $film): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-4 md:py-3 md:px-6"><?= $film['id'] ?></td>
                <td class="py-3 px-4 md:py-3 md:px-6"><?= htmlspecialchars($film['name']) ?></td>
                <td class="py-3 px-4 md:py-3 md:px-6"><?= htmlspecialchars($film['director']) ?></td>
                <td class="py-3 px-4 md:py-3 md:px-6"><?= htmlspecialchars($film['year']) ?></td>
                <td class="py-3 px-4 md:py-3 md:px-6 text-center">
                    <!-- Enllaços per editar o eliminar la pel·lícula -->
                    <a href="/edit/<?= $film['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-2">Edita</a>
                    <a href="/delete/<?= $film['id'] ?>" class="text-red-500 hover:text-red-700">Elimina</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
