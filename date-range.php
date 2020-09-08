<?php
/**
 * Plugin Name: Date Range Shortcode
 * Plugin URI: https://github.com/max-cmoa/date-range
 * Description: Shortcode that accepts a start date and and end date and displays a message
 * Version: 1.0
 * Author: Carnegie Museum of Art
 */

 // [date_range startdate="" enddate="" message""]
 function the_actual_code($passedAttributes) {

   // to give in default values if none are passed
   $processedAttributes = shortcode_atts( array(
		'startdate' => 'default 1',
		'enddate' => 'default 2',
    'message' => 'default 3',
	), $passedAttributes );

   // must return, using echo will echo the result hidden in the Gutenberg Editor
   //return 'startdate is: ' . $passedAttributes["startdate"] . ' enddate is: ' . $passedAttributes["enddate"] . ' message is: ' . $passedAttributes["message"];
   return 'startdate is: ' . $processedAttributes["startdate"] . ' enddate is: ' . $processedAttributes["enddate"] . ' message is: ' . $processedAttributes["message"];

 }

 add_shortcode('date-range', 'the_actual_code');
