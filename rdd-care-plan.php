<?php

/**
 * @author            Raney Day Design
 * @copyright         2020 Raney Day Design  Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * Plugin Name:       RDD Care Plan
 * Plugin URI:        https://raneydaydesign.com/
 * Description:       RDD Care Plan Report
 * Version:           1.0.2
 * Requires at least: 5.2
 * Requires PHP:      5.1
 * Author:            Raney Day Design
 * Author URI:        https://raneydaydesign.com
 * Text Domain:       rdd-care-plan
 * License:           GPL v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'SETTINGS_PAGE_VERSION', '1.0.0' );


require plugin_dir_path( __FILE__ ) . 'includes/class-settings-page.php';


function run_settings_page() {

	$plugin = new Settings_Page();
	$plugin->run();

}
run_settings_page();
