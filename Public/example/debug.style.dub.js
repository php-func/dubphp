/**
 * This file is part of the dubphp  package.
 *
 * (c) Tom Sapletta <tom@sapletta.com>
 * 14.02.14 11:07
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


// Make special style for different contents:
// Fatal Error, Warning, Notice
// Solution for make a nice wiev, when some parts are different

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
        pretag[0].style.whiteSpace='pre';
        pretag[0].style.fontFamily='Courier';
        pretag[0].style.fontSize='10pt';
    }


    var tag_b = pretag[0].getElementsByTagName('b');
    for (var i = 0; i < tag_b.length; i++)
    {
        var b_value = tag_b[i].innerHTML;

        if( b_value === 'Fatal error' || b_value === 'Warning' || b_value === 'Parse error')
        {
            pretag[0].style.backgroundColor='#511';
            pretag[0].style.color='#fee';
            pretag[0].style.whiteSpace='pre';
            pretag[0].style.fontFamily='Courier';
            pretag[0].style.fontSize='10pt';
        }

        if( b_value === 'Notice' )
        {
            pretag[0].style.backgroundColor='#00001e';
            pretag[0].style.whiteSpace='pre';
            pretag[0].style.fontFamily='Courier';
            pretag[0].style.fontSize='10pt';
        }

    }



};
