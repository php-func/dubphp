<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 17:21
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubVarHtml extends dubSource
{

    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    function make()
    {
        $data = file_get_contents_utf8( $this->data );
//        var_dump( $data );
        return $data;
    }
}
