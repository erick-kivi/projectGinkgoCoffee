<?php
/**
 * Auberge WordPress Theme
 *
 * Auberge WordPress Theme, Copyright 2015 WebMan [http://www.webmandesign.eu/]
 * Auberge is distributed under the terms of the GNU GPL
 *
 * Requires at least:  4.3
 *
 * @package    Auberge
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @since    1.0
 * @version  2.1
 *
 * @link  http://www.webmandesign.eu
 *
 * Contents:
 *
 * 1) Required files
 */





/**
 * 1) Required files
 */

	// Global functions

		require_once( get_template_directory() . '/library/core.php' );

	// Theme setup

		require_once( get_template_directory() . '/includes/setup/setup.php' );

/*Add jQuery to the theme 
  Chris Coyier https://css-tricks.com/snippets/wordpress/include-jquery-in-wordpress-theme/
*/
if(!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_enqueue_script('jquery');
}
