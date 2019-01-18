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
}

define('LEXI_DIR', __DIR__ . '/inc/lexi/');
define('ELX_DIR', __DIR__);
define('ELX_URL', get_template_directory_uri());

// Load the theme initialization class
require_once(ELX_DIR . '/vendor/autoload.php');
$elx = new \Lexi\Core\ThemeInit;
