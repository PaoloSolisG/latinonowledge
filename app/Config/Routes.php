<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('contacto', 'Front\\Contacto::index');
$routes->get('servicios', 'Front\\Servicios::index');
$routes->get('admin', 'Admin\\Dashboard::index');

// Ruta para el artículo de errores comunes al declarar impuestos
$routes->get('articulos/common-tax-filing-mistakes', 'Front\Articles\CommonTaxFilingMistakes::index');

// Ruta para el controlador TaxMistakes
$routes->get('tax-mistakes', 'Front\TaxMistakes::index');

// Ruta para el controlador Slider
$routes->get('slider', 'Front\\Slider::index');

// Ruta para el controlador InsightsEnhanced
$routes->get('insights', 'Front\\InsightsEnhanced::index');

// Ruta para el controlador TeamEnhanced
$routes->get('team', 'Front\\TeamEnhanced::index');
