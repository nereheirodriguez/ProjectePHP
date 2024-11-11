<?php

use Core\App;

// Carregar el fitxer autoload per incloure les dependències definides a composer.json
require '../vendor/autoload.php';

// Carregar bootstrap per realitzar la configuració inicial del framework
require '../Core/bootstrap.php';

// Gestionar les rutes del projecte i redirigir la sol·licitud al controlador adequat
App::get('router')->redirect($_SERVER['REQUEST_URI']);