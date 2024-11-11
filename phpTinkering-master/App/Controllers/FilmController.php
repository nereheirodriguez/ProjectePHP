<?php
namespace App\Controllers;

use App\Models\Film;

class FilmController
{
    // Funció per mostrar totes les pel·lícules
    public function index()
    {
        // Obtenim totes les pel·lícules
        $films = Film::getAll();

        // Passem les pel·lícules a la vista
        return view('films/index', ['films' => $films]);
    }

    // Funció per anar a la vista de creació de pel·lícula
    public function create()
    {
        return view('films/create');
    }

    // Funció per guardar les pel·lícules i redirigir a la vista principal
    public function store($data)
    {
        // Truquem la funció create del model
        Film::create($data);
        // Redirigim a la vista principal
        header('location: /films');
        exit;
    }

    // Funció per anar a la vista d'edició
    public function edit($id)
    {
        // Si no es passa la id, redirigim a la vista principal
        if ($id === null) {
            header('location: /films');
            exit;
        }

        // Cerquem la pel·lícula amb la id especificada
        $film = Film::find($id);

        // Si no trobem la pel·lícula, mostrem un error 404
        if (!$film) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornem la vista d'edició amb la pel·lícula trobada
        return view('films/edit', ['film' => $film]);
    }

    // Funció per actualitzar les dades de la pel·lícula
    public function update($id, $data)
    {
        // Modifiquem la pel·lícula amb les noves dades
        Film::update($id, $data);

        // Redirigim a la pàgina principal de pel·lícules
        header('location: /films');
        exit;
    }

    // Funció per anar a la vista de confirmació d'eliminació
    public function delete($id)
    {
        // Si no es passa la id, redirigim a la vista principal
        if ($id === null) {
            header('location: /films');
            exit;
        }

        // Cerquem la pel·lícula amb la id especificada
        $film = Film::find($id);

        // Si no trobem la pel·lícula, mostrem un error 404
        if (!$film) {
            require '../../resources/views/errors/404.blade.php';
            return;
        }

        // Retornem la vista de confirmació d'eliminació amb la pel·lícula
        return view('films/delete', ['film' => $film]);
    }

    // Funció per eliminar la pel·lícula de la base de dades
    public function destroy($id)
    {
        // Utilitzem la funció delete del model per eliminar la pel·lícula
        Film::delete($id);

        // Redirigim a la vista de totes les pel·lícules
        header('location: /films');
        exit;
    }
}
