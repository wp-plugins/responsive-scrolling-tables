<?php
/*
Plugin Name: Responsive Scrolling Tables
Description: Responsive Scrolling Tables detects when tables are bigger then their containers and makes them scroll instead of flowing over the boundary of the container.
Version: 1.2.0
Author: T J Dixon Limited
Author URI: http://www.tjdixon.com/
Plugin URI: http://www.tjdixon.com/
License: GPLv3
*/

defined('WPINC') or die();

function addRSTJS() {
	wp_register_script('responsive-scrolling-tables', plugins_url('/js/responsivescrollingtables.js', __FILE__));
	wp_enqueue_script('responsive-scrolling-tables');
}

add_action('wp_enqueue_scripts', 'addRSTJS');

?>
