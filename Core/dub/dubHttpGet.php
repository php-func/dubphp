<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 12:17
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubHttpGet extends dubVar
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

    public function make()
    {
//                var_dump( $_GET, $this->get(), empty($_GET[ $this->get() ]) );
//        return $this->get();
        if( !empty($_GET[ $this->get() ]) )
        {
            $result = $_GET[ $this->get() ];
//            var_dump( $result );
            return $result;
        }
        return false;
    }

}
