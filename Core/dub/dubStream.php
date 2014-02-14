<?php
/**
 * This file is part of the dubphp.com  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 13.02.14 21:23
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubStream extends dubVar
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    public function isValid( $data )
    {
        if( !empty( $data ) && strlen( $data ) > 2 )
        {
            return true;
        }
        return false;
    }

    function make ()
    {

    }
} 