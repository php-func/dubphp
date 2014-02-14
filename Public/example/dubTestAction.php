<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com>
 * 14.02.14 11:07
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
?>

<!--<pre>-->

<?php

/**
 * loading: config, functions, autorouters
 */
require 'init.php';

// URL:
// index.php?emmet=div>p>span.content#cos
/*
$var = dubDebug (
            new dubRenderEmmet(  // render the HTML from emmet format
                new dubHttpGet('emmet') // get param
            )
        );

echo $var;
*/
/*
var_dump(
            new dubRenderEmmet(  // render the HTML from emmet format
                new dubHttpGet('emmet') // get param
            )
);
*/
$dub = new dubPhp(
            new dubRenderEmmet(  // render the HTML from emmet format
                new dubHttpGet('emmet') // get param
            )
        );

//$dub

echo $dub->make();

/*
{
    "dubRenderEmmet":{
    "data":"div>","elementType":null,"elementName":null,"child":{
        "name":"dubHttpGet","data":"emmet","child":"emmet"},"separator":{
        "tag":">","id":"#","class":"."},"name":"dubRenderEmmet"
    }
}
*/


//var_dump( new dubHttpGet('emmet'),  $var );
/*
// dub as controller
$param = 'div>p>span.content#cos';
dubAction (
    'html',
    new dubRenderEmmet(
        new dubHttpGet()
    )
);
*/