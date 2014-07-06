<?php
  // alert_date_check() function reads text from a
  // file called notice_data.csv into an array,
  // assigns the array elements to vairables, and converts
  // then to unix date/time timestamps.
  // Creates a div if the date condition is met.
  function alert_date_check() {
    // Set default timezone.
    date_default_timezone_set('America/Phoenix');

    // Enter dates as mm/dd/yy
    // Enter dates as HH:MM:SS - HH format is 0-24 (military time)
    $start_date = '11/12/13';
    $start_time = '12:00:00';
    $end_date = '11/17/13';
    $end_time = '09:00:00';

    // Concatinate date and time array elements as text string.
    $start_date_time  = $start_date . " "   . $start_time;
    $end_date_time    = $end_date . " "   . $end_time;

    // format dates as unix timestamps.
    $start_timestamp  = strtotime($start_date_time);
    $end_timestamp    = strtotime($end_date_time);


    // Create current date and format as unix timestamp.
    $date_current = date('U');

    // Builds a div with class "notice" if the condition is met.
    if ($date_current > $start_timestamp && $date_current < $end_timestamp) {
      // Read notice text into $notice_div variable

      // The variable $div_notice creates a div element with a class attribute
      // named "notice" and a paragraph element with a class attribute named
      // "notice-text"
      $div_notice  = '<div id="alert">';

      // Enter the content of the notification between the single quotes
      // on the line below:
      $div_notice .= '<p>Alert text goes here.</p>';

      // closing tag elements concatinated to $div_notice variable.
      $div_notice .= '</div>';

    } else {
      return $div_notice = '';
    }
    return $div_notice;
  }
?>
