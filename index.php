<?php

  // also use the array method

  $capitals = array("USA"=>"Washington D.C", 
                    "Japan"=>"Kyoto", 
                    "South Korea"=>"Seoul", 
                    "India"=>"New Delhi");
  
  // echo $capitals["USA"];
  $capitals["USA"] = "Las Vegas";
  $capitals["China"] = "Beijing";

  foreach ($capitals as $key => $value) {
    echo "{$key} = {$value}<br>";
  }

  echo "<br>";

  $keys = array_keys($capitals);
  foreach ($keys as $key){
    echo "{$key} <br>";
  }

  echo "<br>";

  $values = array_values($capitals);
  foreach ($values as $value){
    echo "{$value} <br>";
  }

  echo "<br>";

  $capitals = array_flip($capitals);
  foreach ($capitals as $key => $value) {
    echo "{$key} = {$value}<br>";
  }
  
?>