<?php
define ('DEBUG', false);

$_SERVER = filter_input_array(INPUT_SERVER, FILTER_SANITIZE_STRING);

define ('SERVER', $_SERVER['SERVER_NAME']);

define('DOMAIN', '//' . SERVER);

define('PHP_SELF', $_SERVER['PHP_SELF']);
define('PATH_PARTS', pathinfo(PHP_SELF));

define ('BASE_PATH', DOMAIN . PATH_PARTS['dirname'] . '/');

define ('LIB_PATH', 'lib/');

define ('BIN_PATH', '/users/o/w/owelford/bin');

define ('DATABASE_NAME', 'OWELFORD_final' );

print 'SERVER';

if(DEBUG) {
    print DEBUG;
    print PHP_SELF;
    print_r(PHP_SELF);
    print_r(PATH_PARTS);
    print BASE_PATH;
    print LIB_PATH;
    print DATABASE_NAME;
}
?>