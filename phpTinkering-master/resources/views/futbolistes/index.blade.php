<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llista de Futbolistes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Llista de Futbolistes</h1>
    <a href="/create-futbolista" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Futbolista</a>
    <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Tornar a la pàgina principal</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Nom</th>
            <th class="py-3 px-6 text-left">Equip</th>
            <th class="py-3 px-6 text-left">Any</th>
            <th class="py-3 px-6 text-left">Dorsal</th>
            <th class="py-3 px-6 text-left">Nacionalitat</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($futbolistes)): ?>
        <tr>
            <td colspan="6" class="py-3 px-6 text-center">No hi ha futbolistes disponibles.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($futbolistes as $futbolista): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?= htmlspecialchars($futbolista['nom_futbolista']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($futbolista['equip']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($futbolista['any']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($futbolista['dorsal']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($futbolista['nacionalitat']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/edit-futbolista/<?= $futbolista['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/delete-futbolista/<?= $futbolista['id'] ?>" class="text-red-500 hover:text-red-700 ">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
</body>
</html>