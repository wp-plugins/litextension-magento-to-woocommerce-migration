<?php

/*
Plugin Name: Wordpress Migration
Plugin URI: http://litextension.com/
Description: 
Version: 1.0.0
Author: LitExtension
Author URI: http://litextension.com/
License: GPLv2
*/

/* 
Copyright (C) 2015 LitExtension

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

function wordpress_migration_menu(){    
    add_plugins_page('WordPress Migration', 'Wordpress Migration', 'activate_plugins', 'wordpress_migration_page', 'wordpress_migration_page');
}
add_action('admin_menu', 'wordpress_migration_menu');

function wordpress_migration_page(){
    include 'views/index.php';
}

function wordpress_migration_css_js(){
    wp_enqueue_script('wm_easing', plugins_url('assets/js/jquery.easing.min.js', __FILE__), array('jquery'));
    wp_enqueue_script('wm_touchSwipe', plugins_url('assets/js/jquery.touchSwipe.min.js', __FILE__));
    wp_enqueue_script('wm_liquidslider', plugins_url('assets/js/jquery.liquid-slider.min.js', __FILE__));
    wp_enqueue_style('wm_animate', plugins_url('assets/css/animate.min.css', __FILE__));
    wp_enqueue_style('wm_liquidslider', plugins_url('assets/css/liquid-slider.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'wordpress_migration_css_js');

function wm_get_assets_url($path){
    $path = 'assets/' . $path;
    return plugins_url($path, __FILE__);    
}