<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Defineix el document com a HTML5 -->
    <meta charset="UTF-8">
    <!-- Defineix la codificació de caràcters com UTF-8 per suportar diversos idiomes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ajusta la visualització per adaptar-se a la mida de pantalla del dispositiu -->
    <title>Delete Futbolista</title>
    <!-- Defineix el títol de la pàgina que es mostra a la pestanya del navegador -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Inclou la biblioteca Tailwind CSS per donar estil a la pàgina -->
</head>
<body class="bg-gray-100 p-8">
<!-- Defineix el fons de la pàgina com gris clar i aplica un padding de 8 unitats -->

<h1 class="text-3xl font-bold mb-4">Delete Futbolista</h1>
<!-- Títol principal amb text gran (text-3xl), negreta (font-bold) i separació inferior de 4 unitats (mb-4) -->

<p>Vols eliminar el futbolista "<?= htmlspecialchars($futbolista->nom_futbolista) ?>"?</p>
<!-- Missatge de confirmació amb el nom del futbolista obtingut del servidor, escapant caràcters especials per seguretat -->

<form action="/destroy-futbolista" method="POST" class="mt-4">
    <!-- Formulari amb mètode POST que enviarà les dades a la ruta "/destroy-futbolista" per processar la eliminació -->

    <input type="hidden" name="id" value="<?= $futbolista->id ?>">
    <!-- Camp ocult per enviar l'ID del futbolista al servidor sense mostrar-lo a l'usuari -->

    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Delete</button>
    <!-- Botó de confirmació per eliminar el futbolista, amb estil de fons vermell (bg-red-500), text blanc, padding horitzontal i vertical, cantonades arrodonides, i canvi de color en hover -->
</form>

<a href="/futbolistes" class="text-gray-500 hover:underline mt-4 block">Cancel</a>
<!-- Enllaç per cancel·lar l'operació i tornar a la llista de futbolistes, amb text gris clar, efecte de subratllat en hover, separació superior (mt-4) i format de bloc -->
</body>
</html>
