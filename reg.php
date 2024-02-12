<?php
    include('db_conn.php');
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registration</h1>
<form action="reg.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="Register">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $name=$_POST['name'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $ins = $conn->query("INSERT INTO school (name, username, password) VALUES ('$name', '$username', '$password')");

            
        }
        ?>
</body>
</html>