<?php
/**
 * Plugin Name: Date Range Shortcode
 * Plugin URI: https://github.com/max-cmoa/date-range
 * Description: Shortcode that accepts a start date and and end date and displays a message
 * Version: 1.0
 * Author: Carnegie Museum of Art
 */

 // [date_between startdate="" enddate="" message""]
 function the_actual_code($passedAttributes) {

   // to give default values if no attributes are set
   $processedAttributes = shortcode_atts( array(
		'startdate' => '2020/01/01',
		'enddate' => '2020/01/01',
    'message' => 'message shortcode attribute was not set',
	), $passedAttributes );

   $currentDate = date("Y-m-d");
   $startDate = $processedAttributes["startdate"];
   $endDate = $processedAttributes["enddate"];

   if( ($currentDate >= $startDate) && ($currentDate <= $endDate)){
      return $processedAttributes["message"];
   } else if ($currentDate < $startDate){
      return 'Before';
   } else if ($currentDate > $endDate){
      return 'Over';
   } else {
     return 'is error';
   }


   // must use return, using echo will echo the result hidden in the Gutenberg Editor
   //return 'startdate is: ' . $processedAttributes["startdate"] . ' enddate is: ' . $processedAttributes["enddate"] . ' message is: ' . $processedAttributes["message"] . ' current date is ' . $currentDate;

 } // end of the_actual_code function

 add_shortcode('date_between', 'the_actual_code');
