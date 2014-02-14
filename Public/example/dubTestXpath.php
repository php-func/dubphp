<?php
/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com> 
 * 14.02.14 17:02
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
?>

<!--<pre>-->

<!--    <b>Fatal error</b>-->
<?php

/**
 * loading: config, functions, autorouters
 */
require 'init.php';

/*
    test for:
    1. get data from file in html format from external page
    2. query by xpath - get url
    3. save url in csv file as new record
*/

/*
$dub = new dubPhp (
    new dubSourceHttp('http://neptun.nep/curl/company/company_275908.htm')
);
echo $dub->make();
*/

//die;

/*
$dubVarHtmlQuery = new dubVarHtmlQuery(
    '//div/p/strong/a/@href',
    //    new dubQueryXpath('/div/p/strong/a'),
    new dubSourceHttp('http://neptun.nep/curl/company/company_275908.htm')
);
dubd( $dubVarHtmlQuery->make() );
*/

//echo $dubVarHtmlQuery->make();


$dub = new dubPhp (
        new dubVarHtmlQuery(
            '//div/p/strong/a/@href',
            new dubSourceHttp('http://neptun.nep/curl/company/company_275908.htm')
        )
    );


dubt( $dub->make() );

?>

<!--</pre>-->