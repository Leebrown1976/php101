<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php $guess = 28; $number = 39;
    if ($guess < $number) {
    	echo "Your guess is too low"; }
    	elseif ($guess > $number) {
    		echo "Your guess is too high"; }
    			else { echo "You guessed right!"; }
    			// Write your else if statement to check if the guess is correct
    ?>
  </body>
</html>
