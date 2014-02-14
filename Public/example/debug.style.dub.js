/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com>
 * 14.02.14 11:07
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Make special style for Fatal Error
window.onload = function() {
    // color per Fatal error
//            var pretag = document.getElementsByTagName("body");
//            var xx = document.querySelectorAll("b, pre.a");
    var pretag = document.getElementsByTagName("body");


    var str = pretag[0].innerHTML;
//            console.log( str );
    var isObject = (str.indexOf('object(') > 0);
//            console.log( isObject );
    if( isObject )
    {
//                pretag[0].style.backgroundColor='#511';
//                pretag[0].style.color='#fee';
        pretag[0].style.whiteSpace='pre';
        pretag[0].style.fontFamily='Courier';
        pretag[0].style.fontSize='10pt';
    }


    var tag_b = pretag[0].getElementsByTagName('b');
    for (var i = 0; i < tag_b.length; i++)
    {
//        console.log(tag_b[i].innerHTML );
        if(tag_b[i].innerHTML === 'Fatal error' || tag_b[i].innerHTML === 'Warning')
        {
            pretag[0].style.backgroundColor='#511';
            pretag[0].style.color='#fee';
            pretag[0].style.whiteSpace='pre';
            pretag[0].style.fontFamily='Courier';
            pretag[0].style.fontSize='10pt';
        }

//        console.log( tag_b[i].innerHTML );
        if( tag_b[i].innerHTML === 'Notice' )
        {
            pretag[0].style.backgroundColor='#00001e';
//                pretag[0].style.color='#fee';
            pretag[0].style.whiteSpace='pre';
            pretag[0].style.fontFamily='Courier';
            pretag[0].style.fontSize='10pt';
        }

    }



};
