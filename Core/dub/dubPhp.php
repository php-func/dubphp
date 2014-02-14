<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 11:26
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


//TODO can be possible to put different objects format: JSON, PHP, yaml, ...
class dubPhp extends dubVar
{
    public $name = null;
//    public $type = 'variable'; getType
    public $data = null;
    public $child = null;


    function __construct( $data = null, $child = null )
    {
        parent::__construct($data, $child);
    }

    public function fromJsonToPhp()
    {

    }

    public function fromPhpToJson()
    {

    }

    public function make()
    {
        $obj = $this->getChild();
        return $obj->make();
    }


    public function testJson()
    {
        $obj = $this->getChild();

        $obj = array(
            'name' => get_class($obj),
//                        'data' => $obj,
            'child' => $obj
        );

//die;
        echo "\n<h3>".'test obiekt PHP'."</h3>\n";
        var_dump( $obj );
// convert object => json
        $json = json_encode( $obj );


        echo "\n<h3>".'test obiekt JSON'."</h3>\n";
        echo $json."\n";

// convert json => object
//        $obj = json_decode($json);
//        echo "\n<h3>".'test obiekt PHP'."</h3>\n";
//        var_dump( $obj );
    }

    public function action()
    {
        $action = null;
        $object = $this->get();
        $action = 'action'.$action;
        $object->$action();
    }

    public function dump()
    {
        $object = $this->get();
        var_dump(
            $object->make()
        );
    }

    public function debug()
    {
        $object = $this->get();
        var_dump(
            $object->make()
        );
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

        //throw new NotImplementedException();
        return 'unknown';
    }

}