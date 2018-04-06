<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../config.php';

/*Obtenemos el directorio raiz desde el cual vamos a trabajar(en este caso la carpeta public)
y lo guardamos en un constante "BASE_URL"
*/
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);

$route = $_GET['route'] ?? '/';

function render($fileName, $params = []) {
    ob_start();
    extract($params);
    include $fileName;
    return ob_get_clean();
}

use Phroute\Phroute\RouteCollector;

//Routes
$router = new RouteCollector();
$router->controller('/admin', App\Controllers\Admin\IndexController::class);
$router->controller('/admin/posts', App\Controllers\Admin\PostController::class);
$router->controller('/', App\Controllers\IndexController::class);

$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;