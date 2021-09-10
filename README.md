## Utility to generate password hash from a given password

## Syntax:

    $php generate_password_hash.php <password>

## Example:


    $php generate_password_hash.php 'test123'


    This command generates an hash value for the given password 'test123'


## Utility to verify password against given password hash

## Syntax:

    $php verify_password.php <password> <password hash>

## Example:


    $php generate_password_hash.php 'test123' '$2y$10$g1KF8Fhz3ocp9WDF6BfgUeuMF.uoSAs8rL5eykS54m5D/d'


    This command returns true if the password match agains the hash and false otherwise.


## Use Case:

    1. To store hash based password in bash script, php script and javascript programs.



