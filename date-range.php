<?php
/**
 * Plugin Name: Date Range Shortcode Plugin
 * Plugin URI: https://github.com/max-cmoa/date-range
 * Description: Shortcode that accepts a start date and and end date and displays a message
 * Version: 1.0
 * Author: Carnegie Museum of Art
 */


 function the_actual_code($atts) {

     return '<h3 style="color:green">My name is Jeff!</h3>';
 }

 add_shortcode('date-range', 'the_actual_code');
