<?php

    session_start();

    if(isset($_SESSION['user'])){
        header("location: index_mainPage.php");
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style_login.css">
    <title>DOIT</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="php/register.user_be.php" method="POST">
                <h1>Create Account</h1> <br><br>
                <div class="social-icons">
                </div>
                <span>use your email for registeration</span>
                <input type="text" name="username" placeholder="Enter your username" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="password" name="password" placeholder="Enter your password" required>

                    <button  type="submit" class="link_main">Sign Up</button>

            </form>
        </div>
        <div class="form-container sign-in">
            <form action="php/login_user_be.php" method="POST">
                <h1>Sign In</h1> <br><br>
                <span>use your email password</span>
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">

                    <button  class="link_main">Sign In</button>

            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="JS/main_login.js"></script>
</body>

</html>