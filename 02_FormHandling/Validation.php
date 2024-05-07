<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <form action="Validation.php" method="post">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your Username"> <br>
        <label >Age</label>

        <input type="text" name="age" placeholder="Enter your Age"> <br>
        <label >Email</label>
        <input type="text" name="email" placeholder="Enter your email"> <br>
        <input type="submit" value="Log in" name="login" >
    </form>
</body>
</html>

<?php
// $username = filter_input(INPUT_POST, 'username', );
// $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if (isset($_POST["login"])){
$username = filter_input(INPUT_POST, "username" , FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
 $age = filter_input(INPUT_POST,"age", FILTER_VALIDATE_INT);

if(empty($age)){
    echo "Age is missing  <br>";
}
else{
    echo "Age: {$age} <br>";
}
if(empty($username)){
    echo "Username is missing  <br>";
}
else{
    echo "Username: {$username} <br>";
  }
if(empty($email)){
    echo "Email is missing   <br>";
}
else{
    echo "Email: {$email} <br>";
}
}

 ?>