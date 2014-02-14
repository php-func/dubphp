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

<!DOCTYPE html>
<html>
<head>
    <title>test dub Lib</title>
    <style>
        body, textarea {
            font-family: Arial;
            background-color: #111;
            color: #a8ee62;
            margin: 0;
            padding: 7px 10px 10px 10px;
            border-color: #4c6a1e;
        }
    </style>

    <script type="text/javascript"  src="debug.style.dub.js"></script>

</head>
<body>

<?php
    /**
     * Init errors
     */
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
?>

<?php
    require 'dubTestFile.php';
//    require 'dubTestAction.php';
//    require 'dubTestXpath.php';
?>
</body>
</html>