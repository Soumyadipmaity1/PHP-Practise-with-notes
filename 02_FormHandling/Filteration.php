<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize or Filter</title>
</head>
<body>
    <form action="Filteration.php" method="post">
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
  if (isset($_POST["login"])){
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

echo "Username: {$username} <br>";
echo "Email: {$email} <br>";
echo "Age: {$age} <br>";

  }


 ?>