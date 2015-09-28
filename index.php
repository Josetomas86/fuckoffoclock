<?php
// TODO: Account for weekends, yo.

// Set our default timezone to avoid hearing about how we didn't set one.
date_default_timezone_set('America/Los_Angeles');

// Get the current time in San Francisco.
$currtime = date('G:i');

// What time do we fuck on?
$fuckon = "09:30";

// What time do we fuck off?
$fuckoff = "17:30";

// If $now > our fuckon time and < our fuckoff time, it's not fuckoff oclock. :(
if ($currtime > $fuckon && $currtime < $fuckoff) {
    // It is not fuckoff o clock
    $reply = "No.";
} else {
    // It is probably fuck off o'clock
    $reply = "Yes.";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Is it Fuck Off O'Clock?</title>
    <style type="text/css">
      html, body {
        height: 100%;
      }
      body {
        text-align: center;
      }

      #reply {
        display: inline-block;
        margin-top: 200px;
        font-weight: bold;
        font-size: 120pt;
        font-family: Arial, sans-serif;
        text-decoration: none;
        color: black;
      }
    </style>
  </head>
  <body>
    <div id="reply"><?php echo $reply; ?></div>
  </body>
</html>
