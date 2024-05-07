<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <form action="RadioButtons.php" method="post">
<input type="radio" name="credit_card" value="Visa">Visa <br>
<input type="radio" name="credit_card" value="MasterCard">MasterCard <br>
<input type="radio" name="credit_card" value="American Express">American Express <br>
<input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>

<?php 

if(isset($_POST["submit"])){
    if(isset($_POST["credit_card"])){
    $credit_card = $_POST["credit_card"];

        echo "You have selected: {$credit_card} ";
    }
    else{
        echo "Please select a credit card";
    }
   }
?>