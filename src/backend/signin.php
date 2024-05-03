<?php
    include('../../config/database.php');

    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enc_pass = md5($passwd);

    $sql = "
        SELECT
            *
        FROM
            users
        WHERE
            email = '$email' AND
            password = '$enc_pass'
        LIMIT 1
    ";

    $result = pg_query($conn, $sql);
    $total = pg_num_rows($result);

    if ($total > 0){
        header("refresh:0;url=../home.php");
    }else{
        echo "Credenciales incorrectas";
    }
?>