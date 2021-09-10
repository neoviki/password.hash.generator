<?php

/* verify Password against its hash
 * 
 * Author  : Viki ( a ) Vignesh Natarajan
 * Contact : vikiworks.io
 * License : MIT
 * 
 */

	if($argc < 3){
		echo "\n";
		echo "    Usage: $argv[0] < password > < hash of the password >\n";
		echo "\n";
		exit(1);
	}

	$password = $argv[1];
	$hash = $argv[2];
	if(password_verify($password, $hash)){
		echo "password_match\n";
	}else{
		echo "password_error\n";
		exit(1);
	}
?>

