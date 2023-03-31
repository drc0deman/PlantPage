<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta name="author" content="Your name">
        <meta name="description"
            content="see: https://moz.com/learn/seo/meta-description">

        <title>see: https://moz.com/learn/seo/title-tag</title>

        <link rel = "stylesheet"
            href = "css/custom.css?version=<?php print time(); ?>"
            type = "text/css">
        <link rel = "stylesheet" media="(max-width:800px)"
            href = "css/tablet.css?version=<?php print time(); ?>"
            type = "text/css">
        <link rel = "stylesheet" media="(max-width: 600px)"
            href = "css/phone.css?version=<?php print time(); ?>"
            type = "text/css">
    </head>

<?php

include 'lib/constants.php';

print '<!-- *** START of BODY *** -->';

print PHP_EOL;

include 'header.php';
print PHP_EOL;

include 'nav.php';
print PHP_EOL;

// include 'connect-DB.php';

require_once(LIB_PATH . 'DataBase.php');
$thisDataBaseReader = new DataBase('owelford_reader', DATABASE_NAME);
$thisDataBaseWriter = new DataBase('owelford_writer', DATABASE_NAME);

print "<body class='" . PATH_PARTS['filename'] . "'>";

?>