<?php
$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br>";

if (password_verify("pizza123", $hash)) {
  echo "You are log in";
} else {
  echo "Incorrect password";
}
?>