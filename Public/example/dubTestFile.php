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

$dub = new dubPhp (
    new dubVarHtmlQuery(
        '//div/p/strong/a/@href',
        new dubSourceHttp('http://neptun.nep/curl/company/company_275908.htm')
    )
);


dubt( $dub->make() );
