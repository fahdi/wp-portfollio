<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly
/*
Plugin Name: Portfollio - by Gravixar
Plugin URI: https://www.fahdmurtaza.com/plugins/the-portfollio
Description: Allows you to create a portfolio with multiple categories
Version: 1.0
Author: Fahad Murtaza
Author URI: https://www.fahdmurtaza.com/?utm_source=gravixar-portfollio&utm_medium=plugins_page&utm_campaign=plugins_page
Text Domain: portfollio
Domain Path: /languages
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

if ( version_compare( PHP_VERSION, '5.3.7', '<' ) ) {
	function portfollio_php_outdated() {
		echo '<div class="updated"><h3>Portfollio</h3><p>To install the plugin - <strong>PHP 5.3.7</strong> or higher is required.</p></div>';
	}

	add_action( is_network_admin() ? 'network_admin_notices' : 'admin_notices', 'portfollio_php_outdated' );
} else {
	include_once __DIR__ . '/autoload.php';

	call_user_func( [ 'Bookly\Lib\Boot', 'up' ] );
}
