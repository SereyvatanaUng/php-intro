<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- $_SERVER["PHP_SELF"] to send to the current file name (ex; we can the file name)  -->
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    username:
    <input type="text" name="username">
    <input type="submit" name="submit">
  </form>
</body>

</html><?php
foreach ($_SERVER as $key => $value) {
  echo "{$key} = {$value} <br>";
}
?>