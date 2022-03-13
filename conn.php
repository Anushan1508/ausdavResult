<?php
$conn = mysqli_connect(
'localhost', 
'ausdavlk_usr', 
'fI)nP.nd&r6Y', 
'ausdavlk_results'
) or die(mysqli_error());

if (!$conn) {
	die("Error: Failed to connect to database");
}
