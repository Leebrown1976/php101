<!doctype html>
<html lang="en">
  <head>
    <title>Math!</title>
  </head>
  <body>
    <!-- Add your PHP code in the tag below -->
    <p>
<?php
	$fullName = "Lee Brown";
	$result = round($fullName * M_PI, 3) . '<br';
	echo $result;
	echo '<br>';
	echo ceil($result);
	echo '<br>';
	$length = strlen($fullName);
	$letter = rand(0, $length);
	echo substr($fullName, $letter, $length);
	echo '<br>';

?>
    </p>
  </body>
</html>
