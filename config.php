<?php
/*
	Configuração Global
*/
	
/** Informações do Tema e Constantes */
define('THEME_VERSION', '1.0');
define('THEME_NAME', 'Duo - Life Style');
define('THEME_URL_PRO', ""); // ex. http://www.exemplo.com.br
define('THEME_URL_LOCAL', "http://localhost/freela/Duo/"); // // ex. http://localhost/xxx/webdevs/
define('PAGE_NAME', basename($_SERVER['PHP_SELF'])); // Nome arquivo atual

/** Configura os URL's. */
define('THEME_URL', THEME_URL_LOCAL); // THEME_URL_PRO (Produção) ou THEME_URL_LOCAL (Localhost)

/** Erros Show [E_ALL/1] Hidden [0/0] */
error_reporting(E_ALL); 
ini_set("display_errors", 1 );

/** Carrega Functions */
require_once('functions.php');