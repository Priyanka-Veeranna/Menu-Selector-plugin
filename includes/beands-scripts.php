<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function beands_load_scripts()
{
	wp_register_style('beands-style', CSS_DIR.'/menustyles.css');
	
	wp_enqueue_style('beands-style');
}
add_action('init','beands_load_scripts');

