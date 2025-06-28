<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Ruta para el artículo de errores comunes al declarar impuestos

// Ruta para el controlador TaxMistakes

// Ruta para el controlador Contacto
$routes->get('contacto', 'Front\Contacto::index');

$routes->get('home', 'Front\Home::index');
$routes->get('servicios', 'Front\Servicios::index');
$routes->get('about', 'Front\About::index');
$routes->get('insights', 'Front\Insights::index');
$routes->get('slider', 'Front\Slider::index');
$routes->get('team', 'Front\Team::index');
