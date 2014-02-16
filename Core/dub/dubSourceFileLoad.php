<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 16.02.14 11:31
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubSourceFileLoad extends dubSourceFile
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }



    function make()
    {

        $data = $this->update();
//        var_dump( $data );
        return $data;
    }
}