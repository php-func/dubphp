<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 15.02.14 00:01
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubVarStringMerge extends dubVar
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    public function isValid( $data )
    {
        if( is_array( $data ) && count( $data ) > 0 )
        {
            return true;
        }
        return false;
    }

    public function getParentParts()
    {

    }

    public function getCountParts()
    {
        $elements = $this->get();
        $counts = array();
        foreach( $elements as $parts )
        {
            $counts[] = count( $parts );
        }
        sort($counts);
        end($counts);
        $result = current($counts);
//        dubt($result);
        return $result;
    }

    public function makeArrayParts()
    {
        $elements = $this->get();
        $elements_count = count($elements);
        $elements_result = array();
        foreach( $elements as $key => $parts )
        {
            if( !is_array( $parts ) )
            {
                $elements[$key] = array_fill(0, $elements_count, $parts);
            }
        }
        return $elements;
    }


    function make()
    {
        $elements = $this->makeArrayParts();
        $parts_count = count($elements);
        $elements_count = $this->getCountParts();

//        dubt( $elements );
//        die;



//        $elements = $this->get();
//        dubt( $elements );

        $elements_result = array();
//

        for( $yy = 0; $yy< $parts_count; $yy++)
        {
//            if( is_array($parts) && count($parts)>0 )
//            {
//                foreach( $elements as $key => $part )
                for( $xx = 0; $xx< $elements_count; $xx++)
                {
                    if( !isset($elements_result[ $yy ]) )
                    {
                        $elements_result[ $yy ] = '';
                    }
                    $elements_result[ $yy ] .= $elements[ $xx ][ $yy ];
//                    $part_val = $element . $part;
                }
//            }
        }

//        dubt( $elements_result );
        return $elements_result;
//        die;
        if( is_object( $this->get() ) )
        {
            $elements = $this->get()->make();
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