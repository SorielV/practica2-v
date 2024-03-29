<?php
define('DIR_VENDOR', $_SERVER['DOCUMENT_ROOT'] . '/vendor/');

require_once(DIR_VENDOR . 'autoload.php');

if (!getenv('NO_ENV')) {
  $dotenv = Dotenv\Dotenv::create($_SERVER['DOCUMENT_ROOT']);
  $dotenv->load();
}

//Definición de variable global
$url= getenv('URL') ?? '/';

//Definir el código de caracteres
header('Content-Type: text/html; charset=utf-8');
////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set('MST');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');


////////////////////////////////////////////////////////////////////////////////
// Define constants for database connectivty
////////////////////////////////////////////////////////////////////////////////
defined('DATABASE_HOST') ? NULL : define('DATABASE_HOST', getenv('DATABASE_HOST'));
defined('DATABASE_NAME') ? NULL : define('DATABASE_NAME', getenv('DATABASE_NAME'));
defined('DATABASE_USER') ? NULL : define('DATABASE_USER', getenv('DATABASE_USER'));
defined('DATABASE_PASSWORD') ? NULL : define('DATABASE_PASSWORD', getenv('DATABASE_PASSWORD'));

////////////////////////////////////////////////////////////////////////////////
// Define absolute application paths
////////////////////////////////////////////////////////////////////////////////

// Use PHP's directory separator for windows/unix compatibility
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);

// Define absolute path to server root
defined('SITE_ROOT') ? NULL : define('SITE_ROOT', dirname(dirname(__FILE__)).DS);

// Define absolute path to includes
defined('INCLUDE_PATH') ? NULL : define('INCLUDE_PATH', SITE_ROOT.'includes'.DS);
defined('FUNCTION_PATH') ? NULL : define('FUNCTION_PATH', INCLUDE_PATH.'functions'.DS);
defined('LIB_PATH') ? NULL : define('LIB_PATH', INCLUDE_PATH.'libraries'.DS);
defined('MODEL_PATH') ? NULL : define('MODEL_PATH', INCLUDE_PATH.'models'.DS);
defined('VIEW_PATH') ? NULL : define('VIEW_PATH', INCLUDE_PATH.'views'.DS);

////////////////////////////////////////////////////////////////////////////////
// Include library, helpers, functions
////////////////////////////////////////////////////////////////////////////////
require_once(FUNCTION_PATH.'functions.inc.php');
require_once(LIB_PATH.'database.class.php');
require_once(MODEL_PATH.'personas.model.php');