<?php

    include 'connection_be.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

//Encryption of passwords

    $password = hash('sha512', $password);

//---

    $query = "INSERT INTO users(username, email, password) 
        VALUES('$username', '$email', '$password')"; 

    //validate that a emali does not repeat in the databse

    $validate_email = mysqli_query($connection, "SELECT * FROM  users WHERE  email ='$email'");

    if(mysqli_num_rows($validate_email) > 0){
        echo '
        <script>
            alert("This email is already registered, try with one diferent");
            window.location = "../index_login.php";
        </script>
        ';
        exit();
    }


    //validate that a password does not repeat in the databse

    $validate_username = mysqli_query($connection, "SELECT * FROM  users WHERE  username ='$username'");

    if(mysqli_num_rows($validate_username) > 0){
        echo '
        <script>
            alert("This username is already registered, try with one diferent");
            window.location = "../index_login.php";
        </script>
        ';
        exit();
    }

    //Alerts


    $execute = mysqli_query($connection, $query);
            

    if($execute){
        echo '
            <script>
                alert("User saved correctly");
                window.location = "../index_login.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Try again, username does not save");
                window.location = "../index_login.php";
            </script>
        ';
    }

    mysqli_close($connection);

?>