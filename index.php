<?php
error_reporting(0);
// Block for yandex for page
if(!empty($_SERVER['HTTP_REFERER'])){
	if(parse_url($_SERVER['HTTP_REFERER'])['host'] == 'yandex.ru'){
		if(
			$_SERVER['REQUEST_URI'] == '/casino/frank-casino/'
		){

			header("HTTP/1.1 500 Internal Server Error", true, 500);
			exit();

		}
	}
}

function is_actual() {
	$actual_domain = [
		'slot4moneyslots.nw.r.appspot.com'
	]; // Тут пишем актуальный домен(ы)
	$current_domain =  str_replace('www.', '', $_SERVER['HTTP_HOST']);
	return in_array($current_domain, $actual_domain);
}

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

if(!is_actual()) require( 'dof.php' );


require __DIR__ . '/wp-access-check.php';


/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';



