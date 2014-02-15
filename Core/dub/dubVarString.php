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

} 