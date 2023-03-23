<?php
    if(isset($_POST['btn'])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form php Example</title>
</head>
<body>
    <h3>User Name: <?php if(isset($username)){
        echo $username;
    } ?></h3>
    <h3>E-mail: <?php if(isset($email)){
        echo $email;
    } ?></h3>
    <h3>Password: <?php if(isset($password)){
        echo $password;
    } ?></h3>
    <form action="" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>