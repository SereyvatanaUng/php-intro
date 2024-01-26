<?php
// to set cookie
// 86400 = 1 day
setcookie("fav_food", "pizza", time() + (86400), "/");
setcookie("fav_dessert", "curry", time() + (86400 * 2), "/");

// to clear cookie
setcookie("fav_drink", "coffee", time() - 0, "/");

// foreach($_COOKIE as $key => $value){
//   echo"{$key} = {$value} <br>";
// }

if (isset($_COOKIE["fav_food"])) {
  echo "BUY SOME {$_COOKIE["fav_food"]}";
} else {
  echo "I don't know your favorite food";
}

?>