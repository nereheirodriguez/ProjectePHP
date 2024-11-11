<!DOCTYPE html>
<html lang="ca">
<head>
    <!-- Defineix el tipus de document com a HTML5 -->
    <meta charset="UTF-8">
    <!-- Defineix la codificació de caràcters com a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajusta la mida de la pàgina segons la mida de la pantalla del dispositiu -->
    <title>Add New Futbolista</title>
    <!-- Títol de la pàgina que es mostrarà a la pestanya del navegador -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Inclou la llibreria de Tailwind CSS per donar estil a la pàgina -->
</head>
<body class="bg-gray-100 p-8">
<!-- Cos de la pàgina amb un fons gris clar i padding de 8 unitats Tailwind -->

<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
    <!-- Contenidor principal centrat amb ample màxim petit (lg), fons blanc, ombra, cantonades arrodonides i padding intern de 6 unitats -->

    <h1 class="text-3xl font-bold mb-4">Add New Futbolista</h1>
    <!-- Títol amb mida de font gran (3xl), text en negreta (bold) i separació inferior (margin-bottom) de 4 unitats -->

    <form action="/store-futbolista" method="POST">
        <!-- Formulari amb acció POST que envia les dades al servidor a la ruta "/store-futbolista" -->

        <!-- Camp per al nom del futbolista -->
        <div class="mb-4">
            <label for="nom_futbolista" class="block text-gray-700">Name:</label>
            <!-- Etiqueta amb estil de color gris per al camp de text -->
            <input type="text" name="nom_futbolista" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            <!-- Input per al nom del futbolista, amb un marge superior (mt-1), ocupant tota l'amplada (w-full),
                 vora grisa clara, cantonades arrodonides i padding intern de 2 unitats.
                 L'atribut `required` indica que aquest camp és obligatori -->
        </div>

        <!-- Camp per a l'equip -->
        <div class="mb-4">
            <label for="equip" class="block text-gray-700">Team:</label>
            <input type="text" name="equip" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Camp per a l'any d'incorporació -->
        <div class="mb-4">
            <label for="any" class="block text-gray-700">Year:</label>
            <input type="number" name="any" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            <!-- Input de tipus `number` per permetre l'entrada només de números -->
        </div>

        <!-- Camp per al número dorsal del jugador -->
        <div class="mb-4">
            <label for="dorsal" class="block text-gray-700">Dorsal:</label>
            <input type="number" name="dorsal" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Camp per a la nacionalitat -->
        <div class="mb-4">
            <label for="nacionalitat" class="block text-gray-700">Nationality:</label>
            <input type="text" name="nacionalitat" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <!-- Botó d'enviament -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add</button>
        <!-- Botó d'estil amb fons blau, text blanc, padding de 4 (horizontal) i 2 (vertical), cantonades arrodonides,
             i efecte hover per canviar el fons a blau més fosc -->
    </form>

    <!-- Enllaç per tornar a la llista de futbolistes -->
    <a href="/futbolistes" class="text-gray-500 hover:underline mt-4 block">Return</a>
    <!-- Enllaç amb estil de text gris, efecte hover que subratlla el text, marge superior de 4 unitats i format de bloc -->
</div>
</body>
</html>
