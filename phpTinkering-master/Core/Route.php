<?php
// Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    protected $routes = [];

    public function register($route)
    {
        $this->routes[] = $route;
    }

    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    public function redirect($uri)
    {
        $parts = explode('/', trim($uri, '/'));
        $filmController = 'App\Controllers\FilmController';
        $futbolistaController = 'App\Controllers\FutbolistaController';

        // Ruta principal
        if ($uri === '/') {
            require '../resources/views/landing.blade.php';
            return;
        }

        // Rutas de películas
        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->index();
        }

        if ($uri === '/create') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->create();
        }

        if ($uri === '/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        if ($parts[0] === 'edit' && isset($parts[1])) {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            return $controllerInstance->edit($parts[1]);
        }

        if ($uri === '/update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            $controllerInstance = new $filmController();
            $data = $_POST;
            if (!isset($data['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($data['id'], $data);
        }

        if ($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $filmController();
            return $controllerInstance->delete($parts[1]);
        }

        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $filmController();
            //comprovem si pasen id
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Rutas de futbolistas
        if ($uri === '/futbolistes') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->index();
        }

        if ($uri === '/create-futbolista') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->create();
        }

        if ($uri === '/store-futbolista' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        if ($parts[0] === 'edit-futbolista' && isset($parts[1])) {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->edit($parts[1]);
        }

        if ($uri === '/update-futbolista' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            $data = $_POST;
            if (!isset($data['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($data['id'], $data);
        }

        if ($parts[0] === 'delete-futbolista' && isset($parts[1])) {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            return $controllerInstance->delete($parts[1]);
        }

        if ($uri === '/destroy-futbolista' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FutbolistaController.php';
            $controllerInstance = new $futbolistaController();
            if (!isset($_POST['id'])) {
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }

        // Si no coincideix, mostra error 404
        return require '../resources/views/errors/404.blade.php';
    }
}