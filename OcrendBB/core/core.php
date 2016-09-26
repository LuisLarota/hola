<?php
//EL NUCLE DE LA APLICACION

session_start();

//Constantes de conexion
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ocrendb');

//Constante de la App
define('HTML_DIR','html/');
define('APP_TITLE','MI APLICACION WEB');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' System Software. ');
define('APP_URL','http://localhost:81/OcrendBB/');

// Estructura
require('vendor/autoload.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');

$users = Users();

 ?>
