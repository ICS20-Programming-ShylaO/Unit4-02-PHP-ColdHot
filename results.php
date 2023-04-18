<?php

// initializing variable $userTemp

  $userTemp = $_POST['user-temp'];

// if $userTemp >= 20, display "Wow, it's hot today!"

if ($userTemp >= 20) {
      echo "Wow, it's hot today!";
} 

// else, display "Looks like it's cold today."

else {
      echo "Looks like it's cold today.";
} 
