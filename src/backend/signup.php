<?php
    include('../../config/database.php');

    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enc_pass = md5($passwd);

    $sql = "
        INSERT INTO users (fullname, email, password) 
            VALUES ('$fullname', '$email','$enc_pass')
    ";

    $ans = pg_query($conn,$sql);
    if ($ans){
        echo "User has been created successfully";
    }else{
        echo "Error: " . pg_last_error();
    }

    //Close connection
    pg_close($conn)

    
?>