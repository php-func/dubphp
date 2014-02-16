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

class dubSourceFileSave extends dubSourceFile
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }



    function make()
    {
        $result = array();

        if( is_object( $this->get() ) )
        {
            $content = $this->get()->make();
        }
        else
        {
//            $filename = $this->get();
            $content = $this->getChild()->make();
        }
/*
        if( !is_array( $elements ) )
        {
//            $result = file_get_contents( $elements );
        }
        else
        {
//
            foreach( $elements as $line )
            {
                $result[] = get_between($line, $start, $end);
            }

        }
//        return $result;
*/

//        var_dump( $result, $content );
//        die;
        $result = $this->update( $content );

//        var_dump( $result );
//        die;
        return $result;
    }
}