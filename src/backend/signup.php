<?php
    $fullname = $_POST['fname'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $enc_pass = md5($passwd);

    echo "Your fullname: ". $fullname."<br>";
    echo "Your email: ". $email."<br>";
    echo "Your password: ". $passwd;
    echo "Your password enc:". $enc_pass;
?>