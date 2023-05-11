<?php

// initializing user's two integers and product as 0
$firstInt = $_POST['f-int'];
$secInt = $_POST['s-int'];
$product = 0;

// converting integers to their absolute value for the FOR loop
$absFirstInt = abs($firstInt);
$absSecInt = abs($secInt);

// response for when user does not enter either/both of the integers
if ((empty($firstInt)) || (empty($secInt))) {
    echo "Please enter valid integers.";
}

// response if the user enters all valid input
else {
    // for loop for the multiplication: by repeated addition of the first integer as many as the second integer
    for ($counter = 0; $counter < $absSecInt; $counter++) {
        // increment the min by one for each execution of the loop
        $product = $product + $absFirstInt;
      }
      if ($firstInt < 0) {
        $product = $product * -1;
      }
      if ($secInt < 0) {
        $product = $product * -1;
      }

    echo $firstInt . " x " . $secInt . " = " . $product;
}