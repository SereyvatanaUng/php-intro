<?php
	$name = "S V";
	$food = "pizza";

	$age = 2;

	$price = 2.5;

	$employed = true;
	$online = false;
	$offline = true;

	echo "Online status: {$online}<br>";
	echo "Offline status: {$offline}<br>";

	$total = null;
	$quantity = 5;
	echo"You have ordered {$quantity} x {$food}s <br>";

	$total = $quantity * $price;
	echo"Your total is: \${$total}";
?>