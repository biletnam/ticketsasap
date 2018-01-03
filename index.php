<?php
/**
 * 
 */

require_once 'init.php';

if ( in_array( $_SERVER['REMOTE_ADDR'], [ '127.0.0.1', '::1' ] ) && ( $_SERVER['DOCUMENT_ROOT'] !== __DIR__ ) ) {
  $dir = '/'.basename( __DIR__ ).'/';
  $l = strlen( $dir );
  $url = substr( $_SERVER['REQUEST_URI'], $l );
} else {
  $url = ltrim( '/', $_SERVER['REQUEST_URI'] );
}

$elements = explode('/', $url );
$match = $elements[0];
array_shift( $elements );

if( !isset( $match ) || empty( $match ) || $match == "?logout" ) {
  head();
  home();
  foot();
} elseif ( $match == "manifest" ) {
  manifest();
} elseif ( $match == "api" ) {
  restful( $elements );
} elseif ( $match == "events" ) {
  head();
  events( $elements );
  foot();
} else {
  head();
  posts( $match );
  foot();
}