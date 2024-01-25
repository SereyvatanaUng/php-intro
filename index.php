<?php

  $foods = array("apple", "orange", "banana", "coconut");

  // $foods[0] = "pineapple";
  // array_push($foods,"pineapple","kiwi");
  // array_pop($foods);
  // array_shift($foods);
  
  // return a new array
  $reversed_arr = array_reverse($foods);

  foreach($foods as $food) {
    echo $food . "<br>";
  }
  
  echo "<br>";
  
  foreach($reversed_arr as $food) {
    echo $food . "<br>";
  }

  echo "<br>";
  echo count($foods)
?>