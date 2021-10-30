<?php

namespace Controller;

use MVC\Router;

class PortafolioController {
    public static function index(Router $router) {
        $router->render('portafolio/index', [

        ]);
    }

    public static function portafolio(Router $router) {
        $router->render('portafolio/portafolio', [

        ]);
    }

    public static function servicios(Router $router) {
        $router->render('portafolio/servicios', [

        ]);
    }

    public static function contacto(Router $router) {
        $router->render('portafolio/contacto', [

        ]);
    }
}