<?php

/**
 * Plugin Name:       Highlight Content
 * Plugin URI:        https://github.com/pixolin/highlight-content
 * Description:       Plugin adds search form to let users highligh content in frontend.
 * Version:           1.0.0
 * Author:            Bego Mario Garde
 * Author URI:        https://pixolin.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       highlightcontent
 * Domain Path:       /languages
 *
 * Copyright (C) 2017  Bego Mario Garde  <pixolin@pixolin.de>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 *
 * This plugin uses mark.js, Copyright (c) 2014–2017, Julian Motz
 * mark.js was released under the MIT license https://git.io/vwTVl
 *
 * Plugin based on WordPress Plugin Boiler Plate, released under GPLv2
 * by Tom McFarlin and Devin Vinson, Generator by Enrique Chávez, https://wppb.me/
 */

// Make sure this file is only run from within WordPress.
defined( 'ABSPATH' ) || die();

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-highlightcontent-activator.php
 */
function activate_highlightcontent() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-highlightcontent-activator.php';
	Highlightcontent_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-highlightcontent-deactivator.php
 */
function deactivate_highlightcontent() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-highlightcontent-deactivator.php';
	Highlightcontent_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_highlightcontent' );
register_deactivation_hook( __FILE__, 'deactivate_highlightcontent' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-highlightcontent.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_highlightcontent() {

	$plugin = new Highlightcontent();
	$plugin->run();

}
run_highlightcontent();
