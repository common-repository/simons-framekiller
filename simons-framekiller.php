<?php
/**
 * Simons FrameKiller
 *
 * @author            Simon Scherieble
 * @copyright         2021 Simon Scherieble
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Simons FrameKiller
 * Plugin URI:        httpS://simonspage.de/simons-framekiller
 * Description:       Simons FrameKiller adds the frame killer code to a Wordpress page.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Simon Scherieble
 * Author URI:        https://simonspage.de
 * Text Domain:       simons-framekiller
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


/**
 * Action adding the framekiller code into the header of the page
 * add_action( 'wp_head', 'simons_framekiller_add_to_head' );
 * 
 * @param n.a.
 * 
 * @return no return. Will output the framekiller code directly to the head of the page.
 */
function simons_framekiller_add_to_head() {
   echo "<style>html{display:none;}</style><script> if (self == top) { document.documentElement.style.display = 'block'; } else { top.location = self.location; } </script>";
}


/**
 *  Adding of all actions 
 */

add_action( 'wp_head', 'simons_framekiller_add_to_head' );


?>