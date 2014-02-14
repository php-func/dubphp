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
/*
class dubRenderEmmet extends dubVar
{
    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    public function isValid( $data )
    {
        if( !empty( $data ) && strlen( $data ) > 2 )
        {
            return true;
        }
        return false;
    }
}
*/

// TODO: if prefix not exist '>' than append to String:  'body>html'  char '>'
    // e.g.  '>body>html'
    // for detect type of element

// TODO: dubVarString
// TODO: dubVarStringQuery

/**
 * implementation of emment method to render html files
 * Class dubRenderEmmet
 */
class dubRenderEmmet extends dubVar
{

    public $data;
    public $elementType;
    public $elementName;
    public $child;

    public $separator = array(
        'tag' => '>',
        'id' => '#',
        'class' => '.'
    );


    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
//        $this->set$data;
    }

    // HAS

    /**
     * @param $data
     * @return bool
     */
    function hasTag( $data )
    {
        return ( strstr($data, $this->separator['tag']) !== false || strpos($data, $this->separator['class']) > 0 );
    }

    function hasClass( $data )
    {
        return ( strstr($data, $this->separator['class']) !== false && strpos($data, $this->separator['class']) == 0 );
    }

    function hasId( $data )
    {
        return ( strstr($data, $this->separator['id']) !== false && strpos($data, $this->separator['id']) == 0 );
    }

    function cutFirst( $data )
    {

        return ( strstr($data, $this->separator['id']) !== false && strpos($data, $this->separator['id']) == 0 );
    }


    // GET

    /**
     * @param $data
     */
    function getFirstTag( $data )
    {

    }

    /**
     * @param $data
     */
    function getFirstClass( $data )
    {

    }

    /**
     * @param $data
     */
    function getFirstId( $data )
    {

    }


    // Element: Type, Name, Separator Position

    /**
     * @param $data
     */
    function getFirstElement( $data )
    {

    }

    /**
     * @param $data
     * @return mixed
     */
    function getTypeOfNextElement( $data )
    {
        $array_elements_position = array();
        $array_elements_position[ strpos($data, $this->separator['tag'] ) ] = 'tag';
        $array_elements_position[ strpos($data, $this->separator['class'] ) ] = 'class';
        $array_elements_position[ strpos($data, $this->separator['id'] ) ] = 'id';
        // remove first occurences char, only postion more than 1
        if( isset($array_elements_position[0]) )
        {
            unset( $array_elements_position[0] );
        }
        return current($array_elements_position);
    }

    /**
     * @param $data
     */
    function getNameOfNextElement( $data )
    {

    }

    /**
     * @param $data
     * @return int|mixed
     */
    function getPositionOfNextElementSeparator( $data )
    {
        // searchind for separators and put info to array
        $array_elements_position = array();
        $array_elements_position[ strpos($data, $this->separator['tag'] ) ] = 'tag';
        $array_elements_position[ strpos($data, $this->separator['class'] ) ] = 'class';
        $array_elements_position[ strpos($data, $this->separator['id'] ) ] = 'id';

        // remove first occurences char, only postion more than 1
        if( isset($array_elements_position[0]) )
        {
            unset( $array_elements_position[0] );
        }

        // if separators not exist
        if( count($array_elements_position) < 1 )
        {
            return strlen( $data );
        }
//        var_dump($array_elements_position,
//            key($array_elements_position)
//    );

        return key($array_elements_position);
    }


    // PART: nextPart = Part - CurrentElement
    // EG: '>body>p' = 'html>body>p' - 'html';

    function getNextPartOfElement( $data )
    {
        $data = substr($data, $this->getPositionOfNextElementSeparator( $data ) );
        return $data;
    }



    // String - Char
    function isFirstCharTag( $data )
    {
        return  (strpos($data, $this->separator['tag'] ) === 0);
    }

    /**
     * @param $data
     * @return bool
     */
    function isFirstCharClass( $data )
    {
        return ( strpos($data, $this->separator['class'] ) === 0 );
    }

    /**
     * @param $data
     * @return bool
     */
    function isFirstCharId( $data )
    {
        return ( strpos($data, $this->separator['id'] ) === 0 );
    }

    /**
     * @param $data
     * @return string
     */
    function cutFirstSeparator( $data )
    {
//        var_dump( $data );
        $data = substr($data, 1, $this->getPositionOfNextElementSeparator( $data ) -1);
//        var_dump( $this->getPositionOfNextElementSeparator( $data ), $data );
        return $data;
        //, $separator = null
/*
        if( $this->isFirstCharTag( $data ) )
        {
            echo 'to tag [' . $data . ']';
            return $data;
        }
        else if( $this->isFirstCharClass( $data ) )
        {
            echo 'to klasa [' . $data . ']';

            // cut first char
            $data = substr($data, 1, $this->getPositionOfNextElementSeparator( $data ) -1 );
            echo 'to klasa [' . $data . ']';
            return $data;
        }
        else if( $this->isFirstCharId( $data ) )
        {
            echo 'to id [' . $data . ']';
            return $data;
        }
*/
    }


    /**
     * @param $elementType
     */
    function setCurrentElementType( $elementType )
    {
        $this->elementType = $elementType;
    }

    /**
     * @param $elementName
     */
    function setCurrentElementName( $elementName )
    {
        $this->elementName = $elementName;
    }


    /**
     * algorithm for emmett
     *
     * @param $data
     * @return string
     */
    function emmet( $data )
    {

        $tag = '';
        $id = '';
        $class = '';
        $next = "\n";

        // if has TAG
        if( $this->hasTag( $data ) )
        {
            $strnr = strpos($data, $this->separator['tag'] );
            if( !$strnr )
            {
                $strnr = strpos($data, '.');
                $tag = substr($data, 0, $strnr);
                $data = substr($data, $strnr);
            }
            else
            {
                $tag = substr($data, 0, $strnr);
                $data = substr($data, $strnr + 1);
            }


            if( $this->hasClass( $data ) )
            {
                $class = $this->cutFirstSeparator( $data );
                $class = ' class="' . $class . '"';
            }


            if( $this->hasId( $data ) || $this->getTypeOfNextElement( $data ) == 'id' )
            {
                $strnr = strpos($data, $this->separator['id'] );
                $id = substr($data, $strnr + 1);
                $id = ' id="' . $id . '"';
            }

            return $next
                        .'<' . $tag . $id . $class . '>'
                            . $this->emmet( $data )
                        . '</' . $tag . '>'
                    . $next;
        }
//        return $data;
    }


    /**
     * @return string
     */
    function make()
    {
        $data = $this->emmet( $this->data );
//        var_dump( $data );
        return $data;
    }

    /**
     * return value for debug
     */
    function debug()
    {
        echo '<textarea cols="100" rows="9">';
        echo $data = $this->emmet( $this->data );
        echo '</textarea>';
    }

}
