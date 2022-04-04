<?php
if(isset($_POST["login"])){
    $name = $_POST["name"];
    $pass = $_POST["password"];
    echo $name;
    echo "<br>";
    echo $pass;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Enter Your Name:">
        <input type="password" name="password" placeholder="Enter Your password:">
        <input type="submit" name="login" value="Log in">
    </form>
</body>
</html>