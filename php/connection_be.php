<?php 


    $connection = mysqli_connect("localhost", "root", "", "login_register_jvv");

    if($connection){
        echo 'Successfully connected to the database';
    }else{
        echo 'Could not connect to the database';
    }


?>