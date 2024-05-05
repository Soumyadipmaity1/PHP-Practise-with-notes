

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>
   <form action="get_method.php" method="post">
<label>Username</label>
<input type="text" name="username" placeholder="Enter your Username"> <br>
<label >Password</label>
<input type="password" name="password" placeholder="Enter your Password">
<input type="submit" value="Log in ">
   </form> 
   
   <h1 >
    <h2>Display</h2>
    <?php 
echo "{$_POST["username"]} . <br>" ;
echo "{$_POST["password"]}" ;

?>
</h1>
</body>
</html>
