<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 23:03
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubSourceFolder extends dubSource
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
        $filter = '*.*';
        if( !is_array( $this->get() ) )
        {
            $result = $this->getList( $filter );
        }
        else
        {
            die('NOT');
            $result = array();

            foreach( $this->get() as $url )
            {
                $result[] = $this->getList( $filter );
            }

        }
//        dubt( $result );
//        die;
        return $result;

    }


    public function getList( $filter = '*.*' )
    {
//        $filter = '*.htm';

        $directory = $this->get();
        $result = glob($directory );  //$filter

        return $result;
    }


//foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.')) as $filename)
//{
//echo "$filename\n";
//}


} 