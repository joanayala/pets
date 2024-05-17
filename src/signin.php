<?php
    session_start();
    if(isset($_SESSION["id_user"])){
        //header("Location:home.php");
        header("refresh:0;url=home.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Login</title>
    <link rel="icon" type="image/png" href="../src/icons/logo.png">
</head>
<body>
    <form action="backend/signin.php" method="post">
        <input type="email" name="email" required placeholder="@">
        <input type="password" name="passwd" required placeholder="*****">
        <button>Login</button>
        &nbsp;<a href = "signup.html">Create an account</a>
    </form>
</body>
</html>