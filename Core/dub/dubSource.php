<?php
/**
 * This file is part of the dubphp.com  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 13.02.14 21:04
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubSource {

    public $name = null;
    public $data = null;
    public $child = null;


    /**
     * @param null $data
     * @param null $child
     */
    public function __construct(  $data = null, $child = null  )
    {
        $this->name = get_class( $this );
//        $this->type = $this->getType( $data );
        $this->setChild( $data, $child );
        $this->set( $data ); // $this->data =
    }


    public function getChild()
    {
        return $this->child;
    }

    public function setChild( $data = null, $child = null  )
    {
        if( empty( $child ) )
        {
            $this->child = $data;
        } else {
            $this->child = $child;
        }
        return true;
    }

    /**
     * @param $data
     * @return bool
     */
    public function isValid( $data )
    {
        if( !empty( $data ) )
        {
            return true;
        }
        return false;
    }

    /**
     * @param $data
     * @return bool
     */
    public function set( $data )
    {
        if( $this->isValid( $data ) )
        {
            $this->data = $data;
            return true;
        }
        return false;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->data;
    }


    function getType($var)
    {

        return 'unknown';
    }
}