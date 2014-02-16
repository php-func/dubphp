<?php
/**
 * This file is part of the dubphp.com  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 13.02.14 20:19
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class dubVarString extends dubVar
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    public function isValid( $data )
    {
        if( !empty( $data ) && strlen( $data )!==0 )
        {
            return true;
        }
        return false;
    }

    public function lowerString( $string = null ) {
        if ( is_numeric($string) ) {
            if ( $string == 1 ) {
                $this->value{0} = mb_strtolower( $this->value{0}, $this->_encode );
            }
//                $this->value = ucfirst( $this->value ); // first letter
        } else if ( $string == 'capitalize') {
            $this->value = ucwords( $this->value ); // first letter in all words
        } else {
            $this->value = mb_strtolower($string, MB_CASE_UPPER, $this->_encode ); // all letter
        }
        return $this;
    }

    public function upperString( $string = null ) {
        if ( is_numeric($string) ) {
            if ( $string == 1 ) {
//                $this->value = ucfirst( $this->value ); // first letter
                $this->value{0} = mb_strtoupper( $this->value{0}, $this->_encode );
            }
        } else if ( $string == 'capitalize') {
            $this->value = mb_convert_case( $string, MB_CASE_TITLE, $this->_encode );
//                $this->value = ucwords( $this->value ); // first letter in all words = capitalize
        } else {

            $this->value = mb_strtoupper( $string, MB_CASE_UPPER, $this->_encode ); // all letter
        }
        return $this;
    }


//$rest = substr("abcdef", 2, -1);
//$parts = explode("-", $mystring);
//echo array_pop($parts);
    function startsWith($haystack,$needle)
    {
        $res=FALSE;
        if(mb_strripos($haystack,$needle,0,"utf-8")==0)
            $res= TRUE;
        return $res;
    }

    function endsWith($haystack,$needle)
    {
        $res=FALSE;
        $len=mb_strlen($haystack);
        $pos=$len-mb_strlen($needle);
        if(mb_strripos($haystack,$needle,0,"utf-8")==$pos)
            $res= TRUE;
        return $res;
    }

    function getStringLeftByLength($utf8string, $length)
    {
        $cutted = mb_substr($utf8string, 0, $length);
        echo 'leftByLength:'.$cutted.' ';
        return $cutted;
    }

    function getStringRightByLength($utf8string, $length)
    {
//    echo 'rightByLength:'.$length.' ';
        return mb_substr($utf8string, -$length);
    }

    function getPositionLeftByString($utf8string, $str_left)
    {
        $length = mb_strpos($utf8string, $str_left);
        echo 'leftByString:'.$length.' ';
        return leftByLength($utf8string, 0, $length);
    }

    function getPositionRightByString($utf8string, $str_right)
    {
        $length = mb_strpos($utf8string, $str_right);
//    echo 'leftByString:'.$length.' ';
        return rightByLength($utf8string, -$length);
    }



} 