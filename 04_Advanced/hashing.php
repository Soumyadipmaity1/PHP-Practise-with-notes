<!-- hashing: transforming sensitive data into a fixed-length value, which is typically a string of characters via mathematical algorithms. Basicalyy a encryption method. -->

<?php

$password = "password";

$hash = password_hash($password, PASSWORD_DEFAULT);
echo $hash;
echo "<br>";
if (password_verify($password, $hash)) {
    echo "Password is valid!";
} else {
    echo "Invalid password!";
}
?>