<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 15.02.14 21:01
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function array_map_recursive($callback, $array) {
    foreach ($array as $key => $value) {
        if (is_array($array[$key])) {
            $array[$key] = array_map_recursive($callback, $array[$key]);
        }
        else {
            $array[$key] = call_user_func($callback, $array[$key]);
        }
    }
    return $array;
}


class dubVarStringSplit extends dubVar
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    public function isValid( $data )
    {
//        if( !empty( $data ) && strlen( $data ) > 2 )
//        {
            return true;
//        }
//        return false;
    }



    // wytnij do lewej
    public function betweenString( $string = null ) {

    }


//mb_strrpos — Find position of last occurrence of a string in a string

    // wytnij od prawej
    public function rightString( $string = null ) {
        $rigth_with_string = mb_stristr( $this->value, $string, FALSE, $this->_encode );
        $length = mb_strlen($rigth_with_string, $this->_encode);
        $space = mb_strlen($string, $this->_encode);
        $this->value =  mb_substr($rigth_with_string, $space, $length - $space, $this->_encode);
        return $this;
    }

    public function leftString( $string = null ) {
        $left_with_string = mb_stristr($this->value, $string, TRUE, $this->_encode );
        $length = mb_strlen($left_with_string, $this->_encode);
        $this->value =  mb_substr($left_with_string, 0,  $length,  $this->_encode);
        return $this;
    }



    function insert_substr($str, $pos, $substr) {
        $part1 = substr($str, 0, -$pos);
        $part2 = substr($str, -$pos);
        return $part1.$substr.$part2;
    }

    function getBetweenString($input, $start, $end)
    {
        $substr = substr($input, strlen($start)+strpos($input, $start), (strlen($input) - strpos($input, $end))*(-1));
        return $substr;
    }


    function split()
    {
//        $first = strpos($string, $split_point);
# retrieve second $split_point positon
        $second = strpos($string, $split_point, $first+strlen($split_point));
# extract from the second $split_point onwards (with $split_point)
        $substr = substr($string, $second);
    }

    function make()
    {
        $result = array();

//        if( !is( $this->get() ) )
//        {
//            throw new Exception ("Path ( $this->data ) to Data files is empty <br/>");
//        }

//        dubt( $this->get() );
//        die;
        if( is_object( $this->get() ) )
        {
            $elements = $this->get()->make();
        }
        else
        {
            $params = $this->get();
            $elements = $this->getChild();
        }

//        dubt( $elements );
//        die;
        if( !is_array( $elements ) )
        {
//            $result = file_get_contents( $elements );
        }
        else
        {
//            $result = array_map_recursive('md7',$elements);
//            var_dump( $params );
//            die;
            if(empty($params['separator-left']))
            {
                $params['separator-left'] = '';
            }
            if(empty($params['separator-right']))
            {
                $params['separator-right'] = '';
            }

            $start = $params['separator-left'];
            $end = $params['separator-right'];

            foreach( $elements as $line )
            {
                $result[] = get_between($line, $start, $end);
            }

        }
        return $result;
    }

    function md7( $param )
    {

        return $param . '---';
    }

}


function get_between($input, $start, $end)
{
//    $substr = substr($input, strpos($input, $start), ( strlen($input) - strpos($input, $end) ));

    //more
//    $substr = substr($input, strlen($start)+strpos($input, $start), (strlen($input) - strpos($input, $end))*(-1));


    if( !empty($end) )
    {
        // smaller region
        $substr = substr($input, strlen($start)+strrpos($input, $start), (strlen($input) - strrpos($input, $end))*(-1));

    } else {
        $substr = substr($input, strlen($start)+strrpos($input, $start) );
    }
    return $substr;
}