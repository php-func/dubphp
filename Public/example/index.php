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
            background-color: #222;
            color: #aaee41;
            margin: 0;
            padding: 7px 10px 10px 10px;
            border-color: #4c6a1e;
        }
    </style>
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
//    require 'dubTestFile.php';
    require 'dubTestAction.php';
?>
</body>
</html>