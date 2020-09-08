<?php
/**
 * Plugin Name: Date Range Shortcode
 * Plugin URI: https://github.com/max-cmoa/date-range
 * Description: Shortcode that accepts a start date and and end date and displays a message
 * Version: 1.0
 * Author: Carnegie Museum of Art
 */

 // [date_range startDate="" endDate="" message""]
 function the_actual_code($startDate, $endDate, $message) {

  // must return, using echo will echo the result hidden in the Gutenberg Editor
  return 'My name is Jeff';

 }

 add_shortcode('date-range', 'the_actual_code');
