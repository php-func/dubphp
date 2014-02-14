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
    return realpath( __DIR__ . DS . $folder .  $filename .  '.' . $extension );
}


/**
 * autoloader for the class
 *
 * @param $pClassName
 * @throws Exception
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
    if ( empty($path) ) {
        throw new Exception ("For Class ( $pClassName ) Path to library files is empty <br/>");
    }

    if ( !is_readable($path) ) {
        throw new Exception ("For Class ( $pClassName ) File $path not exist <br/>");
    }
    include_once($path);
}



function dubt( $data )
{
    echo '<textarea cols="100" rows="19">';
    print_r( $data );
    echo '</textarea>';
}



function dubr( $data)
{
    echo '<pre>';
    print_r( $data );
    echo '</pre>';
}

function dubd( $data)
{
    echo '<pre>';
    var_dump( $data );
    echo '</pre>';
}