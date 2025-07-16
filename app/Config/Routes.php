<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/team', 'Team::index');


// Ruta para el artículo de errores comunes al declarar impuestos
$routes->get('articulos/common-tax-filing-mistakes', 'Front\Articles\CommonTaxFilingMistakes::index');

// Ruta para el controlador TaxMistakes
$routes->get('tax-mistakes', 'Front\TaxMistakes::index');
