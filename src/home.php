<?php
    session_start();
    if(!isset($_SESSION["id_user"])){
        //header("Location:home.php");
        header("refresh:0;url=signin.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Home</title>
</head>
<body>
    <a href = "backend/logout.php">Sign out</a>
</body>
</html>