<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset & Empty Method</title>
</head>
<body>
   <form action="inset&EmptyMethod.php" method="get">
<label>Username</label>
<input type="text" name="username" placeholder="Enter your Username"> <br>
<label >Password</label>
<input type="password" name="password" placeholder="Enter your Password">
<input type="submit" value="Log in" name="login" >
   </form> 
   
   <h1 >
    <h2>Display</h2>
    <?php 
    if(isset($_GET["login"])){
$username = $_GET["username"];
$password = $_GET["password"]; 
 
    
if(empty($username)){
    echo "Username is missing";

}
elseif(empty($password)){
    echo "Password is missing";
}
else{
    echo "Hello {$username}"  ;
}
    }


?>
</h1>
</body>
</html>

<!-- 
Isset() = Returns true if a variable is declared and not null
Empty() = Returns true if a variable is an empty string, false, 0, or null 

-->