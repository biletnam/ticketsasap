<?php

define( 'root', __DIR__ );
define( 'lib', root.'/lib/');
define( 'templates', root.'/templates/');

define( 'home', 'http://localhost/tixy/');
define( 'styles', home.'assets/css/' );
define( 'scripts', home.'assets/js/' );
define( 'images', home.'assets/img/' );
define( 'fonts', home.'assets/fonts/' );
define( 'media', home.'assets/media-demo/' );

define( 'colors', [ 'pink', 'yellow' ] );

require_once 'config.php';
require_once lib.'mysqli.php';
require_once lib.'functions.php';

$usersblacklist = [];
$agentsblacklist = [];
$eventsblacklist = [];
$postsblacklist = [];
$optionsblacklist = [];

$tables = [ 'users', 'posts', 'events', 'options' ];
foreach ( $tables as $table ) {
	$GLOBALS[$table] = new \PatiPati\MySQL\SANDAL( $table, $table.'blacklist' );
}

$GLOBALS['grecords'] = $GLOBALS['posts'] -> fetch();
$GLOBALS['grecord'] = null;
$GLOBALS['grecord_count'] = 0;
$GLOBALS['grecord_index'] = 0;