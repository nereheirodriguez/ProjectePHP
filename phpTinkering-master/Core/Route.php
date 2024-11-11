<?php
// Fitxer de classe per gestionar les rutes de l'aplicació
namespace Core;

use RuntimeException;

class Route
{
    protected $routes = []; // Array per emmagatzemar les rutes registrades

    // Registra una nova ruta a l'array de rutes
    public function register($route)
    {
        $this->routes[] = $route;
    }

    // Defineix totes les rutes a través d'un array passat com a paràmetre
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    // Gestiona la redirecció a la ruta adequada en funció de la URI
    public function redirect($uri)
    {
        // Divideix la URI en parts separades per "/"
        $parts = explode('/', trim($uri, '/'));

        // Controladors per gestionar films i futbolistes
        $filmController = 'App\Controllers\FilmController';
        $futbolistaController = 'App\Controllers\FutbolistaController';

        // Ruta principal que mostra la pàgina d'inici (landing page)
        if ($uri === '/') {
            require '../resources/views/landing.blade.php';
            return;
        }

        // Rutes relacionades amb la gestió de "films"
        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->index();
        }

        // Mostra el formulari per crear un nou "film"
        if ($uri === '/create') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->create();
        }

        // Guarda un nou "film" a la base de dades amb una petició POST
        if ($uri === '/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            $data = $_POST; // Recull les dades enviades pel formulari
            return $controllerInstance->store($data);
        }

        // Mostra el formulari per editar un "film" existent, identificat per l'ID
        if ($parts[0] === 'edit' && isset($parts[1])) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitza un "film" amb les dades enviades pel formulari amb una petició POST
        if ($uri === '/update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            $data = $_POST;
            if (!isset($data['id'])) {
                throw new RuntimeException('No id provided'); // Llença error si no es troba l'ID
            }
            return $controllerInstance->update($data['id'], $data);
        }

        // Mostra el missatge de confirmació per eliminar un "film", identificat per l'ID
        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->delete($parts[1]);
        }

        // Elimina un "film" de la base de dades amb una petició POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided'); // Llença error si no es troba l'ID
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Rutes relacionades amb la gestió de "futbolistes"
        if ($uri === '/futbolistes') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->index();
        }

        // Mostra el formulari per crear un nou "futbolista"
        if ($uri === '/create-futbolista') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->create();
        }

        // Guarda un nou "futbolista" a la base de dades amb una petició POST
        if ($uri === '/store-futbolista' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            $data = $_POST; // Recull les dades del formulari
            return $controllerInstance->store($data);
        }

        // Mostra el formulari per editar un "futbolista" existent, identificat per l'ID
        if ($parts[0] === 'edit-futbolista' && isset($parts[1])) {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->edit($parts[1]);
        }

        // Actualitza un "futbolista" amb les dades enviades pel formulari amb una petició POST
        if ($uri === '/update-futbolista' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            $data = $_POST;
            if (!isset($data['id'])) {
                throw new RuntimeException('No id provided'); // Llença error si no es troba l'ID
            }
            return $controllerInstance->update($data['id'], $data);
        }

        // Mostra el missatge de confirmació per eliminar un "futbolista", identificat per l'ID
        if ($parts[0] === 'delete-futbolista' && isset($parts[1])) {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->delete($parts[1]);
        }

        // Elimina un "futbolista" de la base de dades amb una petició POST
        if ($uri === '/destroy-futbolista' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided'); // Llença error si no es troba l'ID
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Si cap de les rutes coincideix, mostra la pàgina d'error 404
        return require '../resources/views/errors/404.blade.php';
    }
}
