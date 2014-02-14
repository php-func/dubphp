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

class dubSourceFilesystem {

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
        $this->type = $this->getType( $data );
        $this->child = $child;
        $this->set( $data ); // $this->data =
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
        if(is_object($var))
            return get_class($var);
        if(is_null($var))
            return false; //'null';
        if(is_string($var))
            return new dubString(); //'string';
        if(is_array($var))
            return new dubArray(); //'array';
        if(is_int($var))
            return new dubInteger(); //'integer';
        if(is_bool($var))
            return true; //'boolean';
        if(is_float($var))
            return new dubFloat(); //'float';
        if(is_resource($var))
            return new dubResource(); //'resource';
        //throw new NotImplementedException();
        return 'unknown';
    }
}