<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Defineix el tipus de document com a HTML5 -->
    <meta charset="UTF-8">
    <!-- Defineix la codificació de caràcters com a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajusta l'escala de visualització de la pàgina segons la mida de la pantalla del dispositiu -->
    <title>Edit Futbolista</title>
    <!-- Títol de la pàgina que es mostrarà a la pestanya del navegador -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Inclou Tailwind CSS per donar estil a la pàgina -->
</head>
<body class="bg-gray-100 p-8">
<!-- Defineix el fons de la pàgina en gris clar i afegeix un padding extern de 8 unitats -->

<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <!-- Contenidor centralitzat amb ample màxim mitjà (max-w-lg), fons blanc, ombra (shadow-md), cantonades arrodonides (rounded-lg), i padding intern de 6 unitats -->

    <h1 class="text-3xl font-bold mb-4">Edit Futbolista</h1>
    <!-- Títol de la pàgina amb mida de text gran (text-3xl), text en negreta (font-bold) i separació inferior de 4 unitats (mb-4) -->

    <form action="/update-futbolista" method="POST">
        <!-- Formulari amb mètode POST que enviarà les dades al servidor a la ruta "/update-futbolista" -->

        <!-- Camp ocult per al camp 'id' del futbolista (necessari per identificar l'element a editar) -->
        <input type="hidden" name="id" value="<?= htmlspecialchars($futbolista->id) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2">
        <!-- L'atribut `value` inclou l'ID del futbolista, escapant qualsevol caràcter especial per evitar problemes de seguretat (XSS) -->

        <!-- Camp per al nom del futbolista -->
        <div class="mb-4">
            <label for="nom_futbolista" class="block text-gray-700">Nom:</label>
            <!-- Etiqueta per a l'input, amb estil de text gris -->
            <input type="text" name="nom_futbolista" value="<?= htmlspecialchars($futbolista->nom_futbolista) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            <!-- Input amb valor preomplert amb el nom actual del futbolista, obligatori per omplir (required), i amb estil per adaptar-se a la pàgina -->
        </div>

        <!-- Camp per a l'equip del futbolista -->
        <div class="mb-4">
            <label for="equip" class="block text-gray-700">Equip:</label>
            <input type="text" name="equip" value="<?= htmlspecialchars($futbolista->equip) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Camp per a l'any d'incorporació del futbolista -->
        <div class="mb-4">
            <label for="any" class="block text-gray-700">Any:</label>
            <input type="number" name="any" value="<?= htmlspecialchars($futbolista->any) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            <!-- Input de tipus number per evitar l'entrada de caràcters no numèrics -->
        </div>

        <!-- Camp per al número dorsal del futbolista -->
        <div class="mb-4">
            <label for="dorsal" class="block text-gray-700">Dorsal:</label>
            <input type="number" name="dorsal" value="<?= htmlspecialchars($futbolista->dorsal) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Camp per a la nacionalitat del futbolista -->
        <div class="mb-4">
            <label for="nacionalitat" class="block text-gray-700">Nacionalitat:</label>
            <input type="text" name="nacionalitat" value="<?= htmlspecialchars($futbolista->nacionalitat) ?>" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Botó d'enviament -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</button>
        <!-- Botó amb fons blau, text blanc, padding horitzontal i vertical, cantonades arrodonides, i canvi de color en hover -->

    </form>

    <!-- Enllaç per tornar a la llista de futbolistes -->
    <a href="/futbolistes" class="text-gray-500 hover:underline mt-4 block">Return</a>
    <!-- Enllaç amb estil de text gris clar, efecte de subratllat en hover, separació superior (mt-4) i format de bloc -->
</div>
</body>
</html>
