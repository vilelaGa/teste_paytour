<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/app/Config.php";

$router = new Router(URL_BASE);

/**
 * Controllers
 */
$router->namespace("App\Controllers");


$router->group(null);

/**
 * Web
 * home
 */
$router->get("/", "Web:home");


/**
 * Data
 * cadastro
 */
$router->post("/data/cadastro", "Data:dataCadastro");


/**
 * Web
 * error
 */
$router->group("ops");
$router->get('/{errcode}', "Web:error");


//Execulta as rotas
$router->dispatch();


//Check erro na rota
if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}