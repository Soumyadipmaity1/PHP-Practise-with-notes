<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
</head>
<body>
    <?php
    $username = "Hello World";
// $username = strlen($username); //length
// $username = strtoupper($username); //uppercase
// $username = strtolower($username);   //lowercase
// $username = str_replace("Hello", "Hi", $username); //replace
// $username = trim($username); //remove white space
// $username = str_pad($username, 20, "*"); //padding
// $username = str_repeat($username, 5); //repeat
// $username = str_shuffle($username); //shuffle
// $$username = strrev($username); //reverse    
// $equal = strcmp("Hello World", $username); //compare
  $username = substr($username, 6, 5); //substring
    echo "$username"; 
    ?>
</body>
</html>