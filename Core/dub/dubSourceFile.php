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

class dubSourceFile extends dubSource
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    function create()
    {
        $data = file_put_contents_utf8( $this->get() );
        return $data;
    }

    function read()
    {
        $content = file_get_contents( $this->get() );
        $data = $this->fromListToArray( $content );
        return $data;
    }

    function update( $content )
    {
        $content = $this->fromArrayToList( $content );
        $data = file_put_contents( $this->get(), $content );
        return $data;
    }

    function updateAppend()
    {
        //$data = file_put_contents_utf8( $this->get );
//        return $data;
    }

    function updatePreppend()
    {
        //$data = file_put_contents_utf8( $this->get );
//        return $data;
    }

    function delete()
    {
        $data = file_get_contents_utf8( $this->get );
        return $data;
    }


    function fromArrayToList( $content )
    {
        if( is_array( $content ) )
        {
            $content = implode("\n",$content);
        }
        return $content;
    }

    function fromListToArray( $content )
    {
        if( is_string( $content ) )
        {
            $content = explode("\n",$content);
        }
        return $content;
    }

/*
    function make()
    {
        $data = $this->read();
//        var_dump( $data );
        return $data;
    }
    */
}