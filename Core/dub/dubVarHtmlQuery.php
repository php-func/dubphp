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

class dubVarHtmlQuery extends dubVar
{

    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }


    public function xpath( $query )
    {
//        var_dump( $query );
        $HTML = new DOMDocument(); //'1.0', 'iso-8859-1');
        $HTML->preserveWhiteSpace = false;

//        dubt( $this );
//        die;
        $html_str = $this->getChild()->make();
//        dubt( $html_str );

        $HTML->loadHTML( $html_str );
        $xpath = new DOMXPath( $HTML );

        return $xpath->query( $query );
//        $result->length;

    }

    // TODO: implementing  dubSourceHttp.php
    public function make()
    {
//        var_dump( $this->get() );
//        die;
        // "//a"
        $elements = $this->xpath( $this->get() );

        $result = array();
        foreach ($elements as $element)
        {
            // get ad url
//            $url = $result->getAttribute;
//            var_dump( $result, $url );
//            var_dump( $element->nodeName );

//            $result[] = $element->nodeName;
//            $result[] = $element->nodeValue;
            $result[] = $element->textContent;

//            var_dump( $element->nodeValue );
//            var_dump( $element->item(0)->nodeValue );

//            $nodes = $element->childNodes;
//            foreach ($nodes as $node) {
//                echo $node->nodeValue. "\n";
//            }

//            var_dump( $element->n );
//            var_dump( $element->getAttribute('href') );
//            $result = $element->getAttribute('href');
//            ->nodeValue
        }

//        return $result;
//        var_dump( $result );

//        return $result->length;

//        if( !is_readable( $this->data ) )
//        {
//            throw new Exception ("Path ( $this->data ) to Data files is empty <br/>");
//        }
//        $data = file_get_contents( $this->data );
//        var_dump( $data );
        return $result;
    }
} 