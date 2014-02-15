<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 11:16
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 *  Get dubPHP's Config
 */
define('DS', DIRECTORY_SEPARATOR);

define('LIB_DIR', 'Core' . DS );

define('ROOT', dirname(__FILE__));




/**
 * Init errors
 */


// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');


/* Komunikowanie błędów przez PHP. Tabela nazw + ID.
UWAGA! W przypadku ustalenia kilku opcji na raz phpinfo() zwróci ID o wartosci sumy numerów ID ustalonych opcji.

1       E_ERROR
2       E_WARNING
4       E_PARSE
8       E_NOTICE
16      E_CORE_ERROR
32      E_CORE_WARNING
64      E_COMPILE_ERROR
128     E_COMPILE_WARNING
256     E_USER_ERROR
512     E_USER_WARNING
1024    E_USER_NOTICE
6143    E_ALL
2048    E_STRICT
4096    E_RECOVERABLE_ERROR
8192    E_DEPRECATED
16384   E_USER_DEPRECATED
*/

//raportowanie wszystkich bledow
error_reporting(E_ALL);

//Wyświetla tylko błędy i ostrzeżenia
//ini_set('error_reporting', E_ERROR | E_WARNING);
ini_set('error_reporting', E_ALL );

//nic nie trafi na wyjscie
//    ini_set('display_errors','Off');
ini_set('display_errors', 'On');

//wlaczamy logowanie bledow
ini_set('log_errors','On');

//Ścieżka do pliku logowania
$path_error_log = '../../Private/system/' . date("Y-m-d") .'.error-php.log';
ini_set ('error_log', $path_error_log);



// Nadpisanie php.ini
ini_set("memory_limit", "512M");

# Maksymalny czas oczekiwania na wykonanie skryptu
ini_set("max_execution_time", "600");
ini_set("default_socket_timeout", "600");

// #SessionHandling
ini_set('session.entropy_length', 16);
ini_set('session.entropy_file', '/dev/urandom');
ini_set('session.hash_function', 1);
ini_set('session.hash_bits_per_character', 6);
ini_set('session.gc_maxlifetime', 0);
ini_set('session.gc_probability', 0);
ini_set('session.cookie_lifetime', 0);
ini_set('session.cache_expire', 480);

//das();


