<?php
include("database.php");

$username = "Patrick";
$password = "rock3";
$hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (users, password) 
        VALUES ('$username', '$hash')";

try {
  mysqli_query($conn, $sql);
  echo "Record inserted successfully<br>";
} catch (mysqli_sql_exception) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>