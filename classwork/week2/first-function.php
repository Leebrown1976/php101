<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function

    function whoAreYou()
    {
    	return "Your name";
    }

    $length = strlen("Bobby");
    echo whoAreYou();
    echo "<br>";
    print $length; 
    echo "<br>";
    $myName = "Lee";
    echo strtoupper($myName);
    echo "<br";
    echo strtolower($myName);
    echo "<br>";
    $partial = substr($myName, 0, 1);
    echo "<br>";
    print $partial;

    ?>
  </body>
</html>
