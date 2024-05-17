<?php
    include('../../config/database.php');

    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enc_pass = md5($passwd);

    $sql_validate_email = "SELECT * FROM users WHERE email = '$email'";
    $result = pg_query($conn, $sql_validate_email);
    $total = pg_num_rows($result);

    if ($total > 0){
        echo "<script>alert('Email already exists')</script>";
        header("refresh:0;url=../signup.html");
    }else{
        $sql = "
            INSERT INTO users (fullname, email, password) 
                VALUES ('$fullname', '$email','$enc_pass')
        ";

        $ans = pg_query($conn,$sql);
        if ($ans){
            echo "<script>alert('User has been registered')</script>";
            header("refresh:0;url=../signin.php");
        }else{
            echo "Error: " . pg_last_error();
        }
    }

    //Close connection
    pg_close($conn)

    
?>