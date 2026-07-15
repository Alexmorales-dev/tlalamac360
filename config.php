<?php

// Zona horaria
date_default_timezone_set('America/Mexico_City');

// URL base
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    define('BASE_URL', '/Hola Mundo/Tlalamac360/');
} else {
    define('BASE_URL', '/tlalamac360');
}

// Nombre del sitio
define('SITE_NAME', 'TLALAMAC');
?>