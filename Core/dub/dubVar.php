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

class dubVar
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

//        var_dump( $_GET, $data );

        if( is_object( $data ) )
        {
            $data = $data->make();
//            var_dump( $data );
//            die('ssss');
        }

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


    public  function isHtmlDoc()
    {
//        return preg_match("/<[^<]+>/",$string,$m) != 0;

        if ( preg_match('/<html.*/', $this->get() ) ) {
            # Successful match
            return true;
        } else {
            # Match attempt failed
            return false;
        }
    }

    public  function isHtmlContent()
    {
        preg_match(
            "/<\/?\w+((\s+\w+(\s*=\s*(?:\".*?\"|'.*?'|[^'\">\s]+))?)+\s*|\s*)\/?>/",
            $this->get(),
            $matches);
        if(count($matches)==0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }


    /**
     * @param $var
     * @return bool|dubArray|dubFloat|dubInteger|dubResource|dubString|string
     */
    function getType($var)
    {
        if(is_object($var))
            return get_class($var);
        if(is_null($var))
            return false; //'null';
        if(is_string($var))
            return new dubVarString(); //'string';
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