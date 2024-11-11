<?php

namespace App\Controllers;

use App\Models\Futbolista;

class FutbolistaController
{
    // Mètode per mostrar tots els futbolistes
    public function index()
    {
        // Obtenim tots els futbolistes utilitzant el model
        $futbolistes = Futbolista::getAll();

        // Retornem la vista de la llista de futbolistes
        return view('futbolistes/index', ['futbolistes' => $futbolistes]);
    }

    // Mètode per anar a la vista de creació d'un nou futbolista
    public function create()
    {
        return view('futbolistes/create');
    }

    // Mètode per emmagatzemar un nou futbolista a la base de dades
    public function store()
    {
        // Obtenim les dades del formulari enviades per l'usuari
        $data = $_POST;

        // Utilitzem el model per crear un nou futbolista
        Futbolista::create($data);

        // Redirigim a la llista de futbolistes
        header('Location: /futbolistes');
        exit;
    }

    // Mètode per anar a la vista d'edició d'un futbolista
    public function edit($id)
    {
        // Busquem el futbolista a la base de dades pel seu ID
        $futbolista = Futbolista::find($id);

        // Retornem la vista d'edició amb les dades del futbolista
        return view('futbolistes/edit-futbolista', ['futbolista' => $futbolista]);
    }

    // Mètode per actualitzar les dades d'un futbolista existent
    public function update($id)
    {
        // Obtenim les noves dades del formulari enviades per l'usuari
        $data = $_POST;

        // Actualitzem el futbolista a la base de dades
        Futbolista::update($id, $data);

        // Redirigim a la llista de futbolistes
        header('Location: /futbolistes');
        exit;
    }

    // Mètode per anar a la vista de confirmació d'eliminació d'un futbolista
    public function delete($id)
    {
        // Busquem el futbolista pel seu ID per confirmar l'eliminació
        $futbolista = Futbolista::find($id);

        // Retornem la vista de confirmació d'eliminació
        return view('futbolistes/delete-futbolista', ['futbolista' => $futbolista]);
    }

    // Mètode per eliminar el futbolista de la base de dades
    public function destroy($id)
    {
        // Eliminem el futbolista amb l'ID especificat
        Futbolista::delete($id);

        // Redirigim a la llista de futbolistes
        header('Location: /futbolistes');
        exit;
    }
}
