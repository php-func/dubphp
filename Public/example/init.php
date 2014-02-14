<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 11:17
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


require_once '../../Private/example.config.php';
require_once '../../Private/dub.functions.php';
require_once '../../Core/dub/dub.php';

/**
 * init auto loader
 */
spl_autoload_register("dub_autoload");