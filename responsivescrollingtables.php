<?php
/*
Plugin Name: Responsive Scrolling Tables
Description: RST detects when tables are bigger then their containers and makes them scroll instead of flowing over the boundary of the container.
Version: 1.1.0
Author: T J Dixon Limited
Author URI: http://www.tjdixon.com/
Plugin URI: http://www.tjdixon.com/
License: GPLv3
*/

defined('WPINC') or die();

function addRSTJS()
{
	wp_enqueue_script(
		'custom_script',
		plugins_url('/js/responsivescrollingtables.js', __FILE__)
	);
}

add_action('wp_head', 'addRSTJS');
?>