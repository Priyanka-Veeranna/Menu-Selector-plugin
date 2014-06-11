<?php

/*
Plugin Name: BE&S-menu-planner
Plugin URI: 
Description: BE&S menu planner is a custom plugin to display a custom menu planer.
Version: 1.0.0
Author: Priyanka Veeranna
Author URI: http://priyankaveeranna.in
License: GPLv2
*/

/* 
Copyright (C) 2014 Priyanka

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

/*certain directory paths definitions */
define('CSS_DIR', plugins_url('css',__FILE__));
define('IMAGE_DIR', plugins_url('images',__FILE__));


/*----include the other files and scripts here*/
include( plugin_dir_path( __FILE__ ) . 'includes/beands-scripts.php');


/* this function initializes the options for storing menu values for each day*/
function beands_menu_intialize()
{
	$menu_mon = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$menu_tue = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$menu_wed = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$menu_thu = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$menu_fri = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$menu_sat = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$menu_sun = array(
		
			"breakfast" => " ",
			"lunch" => " ",
			"dinner" => " ",
			"snack" => " "
	);
	
	$thumb_mon = " "; $thumb_tue = " "; $thumb_wed = " "; $thumb_thu = " "; $thumb_fri = " "; $thumb_sat = " "; $thumb_sun = " ";
	
	$start_date =" "; $end_date=" ";
	
	add_option('menu_mon', $menu_mon, '', 'yes');
	add_option('menu_tue', $menu_tue, '', 'yes');
	add_option('menu_wed', $menu_wed,'', 'yes');
	add_option('menu_thu', $menu_thu, '', 'yes');
	add_option('menu_fri', $menu_fri,'','yes');
	add_option('menu_sat', $menu_sat,'','yes');
	add_option('menu_sun', $menu_sun,'','yes');
	
	/*add thumb options */
	add_option('thumb_mon', $thumb_mon,'','yes');
	add_option('thumb_tue', $thumb_tue,'','yes');
	add_option('thumb_wed', $thumb_wed,'','yes');
	add_option('thumb_thu', $thumb_thu,'','yes');
	add_option('thumb_fri', $thumb_fri,'','yes');
	add_option('thumb_sat', $thumb_sat,'','yes');
	add_option('thumb_sun', $thumb_sun,'','yes');
	
	add_option('start_date', $start_date);
	add_option('end_date',$end_date);
	
}
add_action(init,'beands_menu_intialize');

include( plugin_dir_path( __FILE__ ) . 'includes/beands-process.php');
include( plugin_dir_path( __FILE__ ) . 'includes/beands-display.php');


/*function beands_testing()
{
	$mon_menu = get_option('menu_mon');
	$breakfast_id = $mon_menu['breakfast'];
	
	$mon_breakfast = get_post($breakfast_id);
	
	ob_start();
	?>
<p id="menu_output">
	the monday b.f menu is : <a href="<?php echo get_permalink($breakfast_id); ?>"><?php echo $mon_breakfast->post_title; ?></a> 
</p>
	<?php
	return ob_get_clean();
}
add_shortcode('testmenu','beands_testing');
 */
 