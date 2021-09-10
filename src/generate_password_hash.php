<?php
/* Generate Password Hash
 * 
 * Author  : Viki ( a ) Vignesh Natarajan
 * Contact : vikiworks.io
 * License : MIT
 * 
 */

	if($argc < 2){
		echo "\n";
		echo "    Usage: $argv[0] <password to hash>\n";
		echo "\n";
		exit(1);
	}

	$password = $argv[1];
	$hash = password_hash($password, PASSWORD_DEFAULT);
	echo "\n";
	echo "    password\t\t: $password";
	echo "\n";
	echo "    password_hash\t: $hash";
	echo "\n";
	echo "\n";
?>

