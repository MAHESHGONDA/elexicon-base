<?php
/**
 * elexicon functions and definitions.
 *
 * @package elexicon
 */

 $whitelist = array(
     '127.0.0.1',
     '::1'
 );

if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    define('LEXI_DEV', true);
} else {
	define('LEXI_DEV', false);
}

define('LEXI_DIR', __DIR__ . '/inc/lexi/');
define('ELEXICON_DIR', __DIR__);
define('ELEXICON_URL', get_template_directory_uri());

// Load the theme initialization class
require_once(ELEXICON_DIR . '/vendor/autoload.php');
$elexicon = new \Lexi\Core\ThemeInit;
