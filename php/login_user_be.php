<?php

    session_start();

    include 'connection_be.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validate_login = mysqli_query($connection, "SELECT * FROM users WHERE email = '$email' 
    and password = '$password'");

    if(mysqli_num_rows($validate_login) > 0){
        $_SESSION['user'] = $email;
        header("location: ../index_mainPage.php");
        exit;
    }else{
        echo '
            <script>
                alert("user does not exist, please go over your data entroduced");
                window.location = "../index_login.php"
            </script>
        ';

        exit;
    }

?>