<?php
/**
 * Plugin Name:       Contact Detail
 * Description:       Contact detail meta field display.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Melisa Viroz
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       contact-detail
 *
 * @package           vz-open-directory
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function vz_open_directory_contact_detail_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'vz_open_directory_contact_detail_block_init' );
