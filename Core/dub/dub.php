<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 11:26
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


//TODO can be possible to put different objects format: JSON, PHP, yaml, ...
/**
 * init for all executing in dub system
 *
 * @param $object
 */
function dub( $object )
{
//    if( PHP pbject )
//    if( JSON object )
    return $object->make();
//    $object->get();
}

function dubDebug( $object )
{
    $object->debug();
}

function dubDump( $object )
{
    var_dump(
        $object->make()
    );
}

function dubAction( $action, $object )
{
   $action = 'action'.$action;
   $object->$action();
}