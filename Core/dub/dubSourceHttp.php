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

//        dubt( $this->get() );
//        die;
        if( is_object( $this->get() ) )
        {
            $elements = $this->get()->make();
        }
        else
        {
            $elements = $this->get();
        }


//        dubt( $elements );
        if( !is_array( $elements ) )
        {
            $result = file_get_contents( $elements );
        }
        else
        {
            $result = array();
            foreach( $elements as $url )
            {
                $result[] = file_get_contents( $url );
            }
        }
        return $result;
    }
} 