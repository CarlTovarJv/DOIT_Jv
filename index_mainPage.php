<?php

    session_start();

    if(!isset($_SESSION['user'])){
        echo '
            <script>
                alert("Please, you need to log in");
                window.location = "index_login.php";
            </script>
        ';
        //header("location: index_login.php");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e411d6c5a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style_mainPage_options.css">
    <link rel="stylesheet" href="CSS/style_mainPage_pomodoro.css">
    <link rel="stylesheet" href="CSS/style_mainPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"
    />
    <title>DOIT</title>
</head>
<body>
    <header class="header_container">
        <div class="header_element">
            <img src="IMGS and VIDEOS/DOIT 1.svg" alt="">
        </div>
        <div class="hamburger" id="hamburgerMenu""> 
                <i class="fa-solid fa-bars" id="menuBurger"></i>
        </div>
    </header>





    <!-- Options -->
    <div class="popout-menu" id="popoutMenu">
        <div class="popout_header">
            
            <h2>Options</h2>
            <div class="close_window_pm"><i class="fa-solid fa-xmark"></i></div>

        </div>
        
        <button>Task List</button>
        <button id="pomodoro_main">Pomodoro</button>
        <button>Calendar</button>
        <button>Personalize</button>
        
    </div>






    <!-- Pomodoro -->

    <div class="pomodoro-container" id="pomodoro-container_cs">
        <div class="popout-pomodoro">
                <h2>Timer</h2>
            <div class="close_window_pm">
                <i class="fa-solid fa-xmark" id="mark_pomodoro"></i>
            </div>
        </div>
        <div class="timer" id="timer">25:00</div>
        <button id="startBtn">Start</button>
        <button id="pauseBtn">Pause</button>
        <button id="resetBtn">Reset</button>
    </div>



    <!-- Task list -->









    <section>
        <video id="video_rain" src="IMGS and VIDEOS/Video_Lluvia2.mp4" autoplay muted loop playsinline></video>
    </section>


</body>
<script src="JS/main_page.js"></script>
</html>
