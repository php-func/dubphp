<?php
/**
 * This file is part of the dubphp.com  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 13.02.14 20:20
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubRender
{
    public $name = null;
//    public $type = 'variable'; getType
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


    /**
     * @param $var
     * @return bool|dubArray|dubFloat|dubInteger|dubResource|dubString|string
     */
    function getType($var)
    {

        return 'unknown';
    }

} 