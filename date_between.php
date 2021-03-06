<?php
/**
 * Plugin Name: Date Between Shortcode
 * Plugin URI: https://github.com/max-cmoa/date-between
 * Description: Shortcode that accepts a start date and and end date and displays a message if between these dates
 * Version: 1.0
 * Author: Carnegie Museum of Art
 */

 // [date_between startdate="" enddate="" ]Some content[/date_between]

 // @param $passedAttributes - attributes passed between [date_between]
 // @param $content - plain or html betweeen [date_between]content[/date_between]
 function the_actual_code($passedAttributes, $content) {

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
      return $content;//$processedAttributes["message"];
   } else if ($currentDate < $startDate){
      return; // 'Before the between date';
   } else if ($currentDate > $endDate){
      return; // 'Over' the between date;
   } else {
     return 'is error';
   }


   // must use return, using echo will echo the result hidden in the Gutenberg Editor
   //return 'startdate is: ' . $processedAttributes["startdate"] . ' enddate is: ' . $processedAttributes["enddate"] . ' message is: ' . $processedAttributes["message"] . ' current date is ' . $currentDate;

 } // end of the_actual_code function

 add_shortcode('date_between', 'the_actual_code');
