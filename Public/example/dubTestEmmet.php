<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 11:51
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * loading: config, functions, autorouters
 */
require 'init.php';

// function dubug - for debugging system with used renderring for emmet
// Normally the output is object, but when you use dubug - is used debug method
dubDebug(
    new dubRenderEmmet( 'html>body>p.content#cos' )
);

// it is equal like below code example
$object = new dubRenderEmmet( 'html>body>p.content#cos' );
echo $object->debug();



// Default way to use dub system.
// Normally the output is object, but when you use - is used make method
echo
    dub (
        new dubRenderEmmet( 'div>p>span.content#cos' )
);


// it is equal like below code example
$object = new dubRenderEmmet( 'div>p>span.content#cos' );
echo $object->make();


// var_dump on object from ->make();
dubDump (
    new dubRenderEmmet( 'div>p>span.content#cos' )
);

