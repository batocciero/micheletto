<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/*
 *  Controllers
 */
$router->namespace("Source\App");


/*
 * Web
 */
$router->group(null);

$router->get("/", "Web:home");

$router->get("/historia", "Web:historia");

// Produtos
$router->get("/produtos/vinhos", "Web:vinhos");
$router->get("/produtos/uvas", "Web:uvas");
$router->get("/produtos/mudasdeuvas", "Web:mudasdeuvas");
$router->get("/produtos/flores", "Web:flores");
$router->get("/produtos/emporio", "Web:emporio");
$router->get("/produtos/cavalos", "Web:cavalos");

/*
 * Errors
 */

$router->group("ooops");
$router->get("/{errcode}", "Web:error");


$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}