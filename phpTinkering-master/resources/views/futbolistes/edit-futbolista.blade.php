<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Futbolista</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Edit Futbolista</h1>
    <form action="/update-futbolista" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($futbolista->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">

        <div class="mb-4">
            <label for="nom_futbolista" class="block text-gray-700">Nom:</label>
            <input type="text" name="nom_futbolista" value="<?= htmlspecialchars($futbolista->nom_futbolista) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="equip" class="block text-gray-700">Equip:</label>
            <input type="text" name="equip" value="<?= htmlspecialchars($futbolista->equip) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="any" class="block text-gray-700">Any:</label>
            <input type="number" name="any" value="<?= htmlspecialchars($futbolista->any) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="dorsal" class="block text-gray-700">Dorsal:</label>
            <input type="number" name="dorsal" value="<?= htmlspecialchars($futbolista->dorsal) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>
        <div class="mb-4">
            <label for="nacionalitat" class="block text-gray-700">Nacionalitat:</label>
            <input type="text" name="nacionalitat" value="<?= htmlspecialchars($futbolista->nacionalitat) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
    </form>
    <a href="/futbolistes" class="text-gray-500 hover:underline mt-4 block">Return</a>
</div>
</body>
</html>
