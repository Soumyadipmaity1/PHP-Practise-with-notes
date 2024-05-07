<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box</title>
</head>
<body>
    <h1>What you like the most?</h1>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="fruit[]" value="Apple">Apple <br>
        <input type="checkbox" name="fruit[]" value="Banana">Banana <br>
        <input type="checkbox" name="fruit[]" value="Orange">Orange <br>
        <input type="checkbox" name="fruit[]" value="Mango">Mango <br>
        <input type="checkbox" name="fruit[]" value="Grapes">Grapes <br>
        <input type="checkbox" name="fruit[]" value="Pineapple">Pineapple <br>
        <input type="checkbox" name="fruit[]" value="Strawberry">Strawberry <br>
        <input type="checkbox" name="fruit[]" value="Watermelon">Watermelon <br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    if(isset($_POST["fruit"])){
        $fruit = $_POST["fruit"];
        echo "You have selected: ";
        foreach($fruit as $value){
            echo "<br> {$value} ";
        }
    }
    else{
        echo "Please select a fruit";
    }
} 
?>