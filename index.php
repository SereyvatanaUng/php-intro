<?php

  $temp = 20;
  $cloudy = true;

  if($temp >= 0 && $temp <= 30) { 
    echo"The weather is good<br>";
  } else{
    echo"The waether is bad<br>";
  }


  if($temp >= 0 || $temp <= 30) { 
    echo"The weather is good<br>"; }
  else{
    echo"The waether is bad<br>";
  }

  if($cloudy) {
    echo "It's sunny.";
  } else {
    echo "It's cloudy";
  }

?>