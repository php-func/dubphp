<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 17:05
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubSourceHttp extends dubSource
{

    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    function make()
    {
//        if( !is( $this->get() ) )
//        {
//            throw new Exception ("Path ( $this->data ) to Data files is empty <br/>");
//        }
        $data = file_get_contents( $this->get() );
//        var_dump( $data );
        return $data;
    }
} 