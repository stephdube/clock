<?php
	error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
	ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sun Clock</title>
</head>
  <?php
  		date_default_timezone_set('America/New_York');
  		$hr = date('g');
  		$meridies = date('A');

  		if ($hr>=5 && $hr<11 && $meridies=='AM')
		{
			// morning
			echo "<body style='background-color:#865f86'>";
			echo "<img src='http://making-the-internet.s3.amazonaws.com/php-morning.png'>";
		}

		elseif (($hr==11 && $meridies=='AM') ||
			($hr>=12 && $meridies=='PM') || ($hr<4 && $meridies=='PM'))
		{
			// afternoon
			echo "<body style='background-color:#2c87c8'>";
			echo "<img src='http://making-the-internet.s3.amazonaws.com/php-afternoon.png'>";
			
		}

		elseif ($hr>=4 && $hr<8 && $meridies=='PM')
		{
			// evening
			echo "<body style='background-color:#c7b02f'>";
			echo "<img src='http://making-the-internet.s3.amazonaws.com/php-evening.png'>";
		}

		else
		{
			// night
			echo "<body style='background-color:#180629'>";
			echo "<img src='http://making-the-internet.s3.amazonaws.com/php-night.png'>";
		}
		echo "<p style=color:white>It is " . date('g:i:A') . " Eastern Standard Time</p>";
	?>
</body>
</html>