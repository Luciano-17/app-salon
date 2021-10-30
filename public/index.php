<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controller\LoginController;
use Controller\PortafolioController;

$router = new Router();

// ZONA PUBLICA
$router->get('/', [PortafolioController::class, 'index']);
$router->get('/portafolio', [PortafolioController::class, 'portafolio']);
$router->get('/servicios', [PortafolioController::class, 'servicios']);
$router->get('/contacto', [PortafolioController::class, 'contacto']);
$router->post('/contacto', [PortafolioController::class, 'contacto']);

// ZONA PRIVADA
$router->get('/login', [LoginController::class, 'login']);
$router->post('/login', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);
$router->get('/crear-cuenta', [LoginController::class, 'crear-cuenta']);
$router->post('/crear-cuenta', [LoginController::class, 'crear-cuenta']);
$router->get('/confirmar-cuenta', [LoginController::class, 'confirmar-cuenta']);
$router->get('/mensaje', [LoginController::class, 'mensaje']);
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);

$router->get('/admin', [AdminController::class, 'admin']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();