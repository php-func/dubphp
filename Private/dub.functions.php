<?php
/**
 * Project: dubphp.com
 * User: tom.sapletta.com
 * Date: 08.02.14 19:39
 */


/**
 * get parts of camels name
 *
 * @param $camel
 * @param string $glue
 * @return mixed
 */
function dub_camel($camel, $glue = ' ')
{
    return preg_replace( '/([a-z0-9])([A-Z])/', "$1$glue$2", $camel );
}


/**
 * for make a path
 *
 * @param null $folder
 * @param null $filename
 * @param string $extension
 * @return string
 */
function dub_path($folder = null, $filename = null, $extension = 'php')
{
    return __DIR__ . DS . $folder .  $filename .  '.' . $extension;
}


/**
 * autoloader for the class
 *
 * @param $pClassName
 */
function dub_autoload ($pClassName)
{

    $part = explode( ' ', dub_camel( $pClassName ) );
    $path = dub_path(
        '..' . DS . LIB_DIR, // path to library
        $part[0] . DS . $pClassName // folder + filename
        // extension: default php
    );

//    echo $path;
    include_once($path);
}
