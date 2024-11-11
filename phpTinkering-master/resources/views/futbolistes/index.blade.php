<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Futbolistes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-4 md:p-6">
    <h1 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">Llista de Futbolistes</h1>

    <!-- Botons per afegir futbolista i tornar a la pàgina principal -->
    <div class="flex flex-col md:flex-row items-center justify-between mb-4">
        <a href="/create-futbolista" class="bg-blue-500 text-white px-4 py-2 rounded mb-2 md:mb-0 md:mr-2 w-full md:w-auto text-center hover:bg-blue-700">
            Add New Futbolista
        </a>
        <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded w-full md:w-auto text-center hover:bg-blue-700">
            Tornar a la pàgina principal
        </a>
    </div>

    <!-- Taula responsive -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-xs md:text-sm leading-normal">
                <th class="py-2 px-3 md:py-3 md:px-6 text-left">Nom</th>
                <th class="py-2 px-3 md:py-3 md:px-6 text-left">Equip</th>
                <th class="py-2 px-3 md:py-3 md:px-6 text-left">Any</th>
                <th class="py-2 px-3 md:py-3 md:px-6 text-left">Dorsal</th>
                <th class="py-2 px-3 md:py-3 md:px-6 text-left">Nacionalitat</th>
                <th class="py-2 px-3 md:py-3 md:px-6 text-center">Actions</th>
            </tr>
            </thead>
            <tbody class="text-gray-600 text-xs md:text-sm font-light">
            <!-- Comprovar si no hi ha futbolistes disponibles -->
            <?php if (empty($futbolistes)): ?>
            <tr>
                <td colspan="6" class="py-3 px-6 text-center">No hi ha futbolistes disponibles.</td>
            </tr>
            <?php else: ?>
                    <!-- Recorregut per cada futbolista i afegir una fila a la taula per a cadascun -->
                <?php foreach ($futbolistes as $futbolista): ?>
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-2 px-3 md:py-3 md:px-6"><?= htmlspecialchars($futbolista['nom_futbolista']) ?></td>
                <td class="py-2 px-3 md:py-3 md:px-6"><?= htmlspecialchars($futbolista['equip']) ?></td>
                <td class="py-2 px-3 md:py-3 md:px-6"><?= htmlspecialchars($futbolista['any']) ?></td>
                <td class="py-2 px-3 md:py-3 md:px-6"><?= htmlspecialchars($futbolista['dorsal']) ?></td>
                <td class="py-2 px-3 md:py-3 md:px-6"><?= htmlspecialchars($futbolista['nacionalitat']) ?></td>
                <td class="py-2 px-3 md:py-3 md:px-6 text-center">
                    <!-- Enllaç per editar el futbolista -->
                    <a href="/edit-futbolista/<?= $futbolista['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                    <!-- Enllaç per eliminar el futbolista -->
                    <a href="/delete-futbolista/<?= $futbolista['id'] ?>" class="text-red-500 hover:text-red-700">Delete</a>
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
