<?php
require_once 'config.php';
require_once 'lib/mysqli.php';

$tables = [
	'users' => [
		'id INT AUTO_INCREMENT',
	    'author VARCHAR(12)',
	    'avatar VARCHAR(100)',
	    'categories VARCHAR(20)',  
	    'company VARCHAR(100)',
	    'created DATETIME',
	    'details TEXT',
	    'email  VARCHAR(50) UNIQUE',
	    'excerpt TEXT',
	    'gender VARCHAR(8)',
	    'link VARCHAR(100)',
	    'location VARCHAR(50)',
	    'title VARCHAR(100)',
	    'password VARCHAR(50)',
	    'phone VARCHAR(20)',
	    'social TEXT',
	    'status VARCHAR(20)',
	    'tags VARCHAR(200)',
	    'type VARCHAR(20)',
	    'updated DATETIME',
	    'username VARCHAR(20) UNIQUE',
	    'PRIMARY KEY(id, username)'
	],
	'posts' => [
		'id INT AUTO_INCREMENT',
	    'author VARCHAR(12)',
	    'avatar VARCHAR(100)',
	    'categories VARCHAR(20)',
	    'created DATETIME',
	    'details TEXT',
	    'excerpt TEXT',
	    'link VARCHAR(100)',
	    'title VARCHAR(100)',
	    'slug VARCHAR(20) UNIQUE',
	    'status VARCHAR(20)',
	    'tags VARCHAR(200)',
	    'type VARCHAR(20)',
	    'updated DATETIME',
	    'PRIMARY KEY(id, slug)'
	],
	'events' => [
		'id INT AUTO_INCREMENT',
	    'author VARCHAR(12)',
	    'avatar VARCHAR(100)',
	    'categories VARCHAR(20)',
	    'created DATETIME',
	    'details TEXT',
	    'email  VARCHAR(50) UNIQUE',
	    'excerpt TEXT',
	    'link VARCHAR(100)',
	    'location VARCHAR(50)',
	    'title VARCHAR(100)',
	    'slug VARCHAR(20) UNIQUE',
	    'status VARCHAR(20)',
	    'tags VARCHAR(200)',
	    'type VARCHAR(20)',
	    'updated DATETIME',
	    'PRIMARY KEY(id, slug)'
	],
	'venues' => [
		'id INT AUTO_INCREMENT',
	    'author VARCHAR(12)',
	    'avatar VARCHAR(100)',
	    'categories VARCHAR(20)',
	    'created DATETIME',
	    'details TEXT',
	    'email  VARCHAR(50) UNIQUE',
	    'link VARCHAR(100)',
	    'location VARCHAR(50)',
	    'title VARCHAR(100)',
	    'slug VARCHAR(20) UNIQUE',
	    'status VARCHAR(20)',
	    'tags VARCHAR(200)',
	    'type VARCHAR(20)',
	    'updated DATETIME',
	    'PRIMARY KEY(id, slug)'
	]
];

$GLOBALS['options'] = new \PatiPati\SANDAL();

function install( $tables )
{
	foreach ( $tables as $table => $collumns ) {
		$collumns = implode( ', ', $collumns );
		if ( !$GLOBALS['options'] -> query( "CREATE TABLE $table ( $collumns )" ) ) {
			return;
		}
	}

	return true;
}


if( install( $tables ) ){
	echo( 'Success!' );
} else {
	echo( 'Falied' );
}
