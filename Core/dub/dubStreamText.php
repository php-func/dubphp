<?php
/**
 * This file is part of the dubphp.com  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 09:43
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubStreamText
{
    public $data;
    function __construct( $content )
    {
        $this->data = $content;
    }

    function make()
    {
//        $size = filesize($file);
        $size = strlen( $this->data );
//        $basename = basename( $file );
        $basename = 'plik.txt';

        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header('Content-Description: File Transfer');
        header('Content-Length: ' . $size );
        header('Content-Disposition: attachment; filename=' . $basename);
        header('Content-Type: application/octet-stream');
//        readfile($file);
        print $this->data;
    }
}
