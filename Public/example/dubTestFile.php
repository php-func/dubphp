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


/*
 * get path
 * read all files in folder
 * read all files, get xpath value
 * make a list with result
 *
 */

/*
$dub = new dubSourceFolder('/home/neptun/www/curl/company/');
dubt( $dub->make() );
*/

/*
$dub =
    new dubVarHtmlQuery(
        '//div/p/strong/a/@href',
        new dubSourceHttp(
            array(
                'http://neptun.nep/curl/company/company_275908.htm',
                'http://neptun.nep/curl/company/company_284207.htm',
                'http://neptun.nep/curl/company/company_284528.htm'
            )
        )
);
*/

/*
$dub =
        new dubSourceHttp(
            new dubSourceFolder( '/home/neptun/www/curl/company/' )
        );
*/

/*
// get from folder list file, than get from html files only link by xpath, make array
$dub =
    new dubVarHtmlQuery(
        '//div/p/strong/a/@href',
        new dubSourceHttp(
            new dubSourceFolder( '/home/neptun/www/curl/company/' )
        )
    );
*/

/*
$dub =
    new dubVarHtmlQuery(
        '//div/p/strong/a/@href',
        new dubSourceHttp(
            new dubSourceFolder( '/home/neptun/www/curl/company/*.htm' )
        )
    );

$lista_url_wizytowka = $dub->make();
dubt( $lista_url_wizytowka );
*/
/*
$dub =
    new dubVarStringSplit (
        //data
        array(
            'separator-left' => '-',
            'separator-right' => '?'
        ),
        //callback
        new dubVarHtmlQuery(
            '//div/p/strong/a/@href',
            new dubSourceHttp(
                new dubSourceFolder( '/home/neptun/www/curl/company/*.htm' )
            )
        )
    );

$list_ids = $dub->make();
dubt( $list_ids );


$dub =
    new dubVarStringSplit (
    //data
        array(
            'separator-left' => '?heading_id='
        ),
        //callback
        new dubVarHtmlQuery(
            '//div/p/strong/a/@href',
            new dubSourceHttp(
                new dubSourceFolder( '/home/neptun/www/curl/company/*.htm' )
            )
        )
    );


$list_heading_id = $dub->make();
dubt( $list_heading_id );



$dub =
    new dubVarStringSplit (
    //data
        array(
            'separator-left' => 'http://',
            'separator-right' => '?'
        ),
        //callback
        new dubVarHtmlQuery( $lista_url_wizytowka )
    );


$list_url_email_part1 = $dub->make();
dubt( $list_url_email_part1 );
*/


$list_url_email_part1 = array(
    'dom1', 'dom2', 'dom3', 'dom4', 'dom5'
);

$list_heading_id = array(
    '11', '22', '33', '44', '55'
);

$dub =
    new dubVarStringMerge (
        array (
            'http://',
            $list_url_email_part1,
            '/email_enquiries/new?heading_id=',
            $list_heading_id,
            '&origin=fi'
        )
    );


$list_url_email = $dub->make();
dubt( $list_url_email );


///email_enquiries/new?heading_id=78777&origin=fi

/*

http://www.wlw.de/p/spiess-elektro-markt-gmbh-998885?heading_id=78777
http://www.wlw.de/p/spiess-elektro-markt-gmbh-998885/email_enquiries/new?heading_id=78777&origin=fi

*/
//stwórz na dysku zmienną, do której bedziesz sie odnosił
// dub Source File Data

