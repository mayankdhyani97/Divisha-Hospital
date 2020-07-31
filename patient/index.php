<?php
session_start();
?>

<?php
if (isset($_SESSION['user'])) {
    ?>

    <html>

    <head>
        <link rel="stylesheet" href="patient_index.css" type="text/css">
    </head>

    <body>
        <header>
            <div class="row">
                <div class="logo">
                    <img src="images/dhospital.png">
                </div>

                <ul class="main-nav">
                    <li class="active"><a href="main.php">Home</a></li>
                    <li><a href="service.php">Services</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="contact.php">Contect</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>

            <div class="hero">
                <h1>Who are YOU?</h1>
            </div>

            <div class="button">
                <a href="patient" class="btn btn-one">Patient</a>
                <a href="doctor" class="btn btn-two">Doctor</a>
            </div>


        </header>
    </body>

    </html>



<?php

} else {
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="text.css">
        <link rel="stylesheet" href="signup.css">
    </head>

    <body>
        <div class="container">
            <span class="text1">Divisha Hospital</span>
            <span class="text2">Dr. Divisha Vasani</span>
        </div>

        <form class="box" action="signup.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="mobile" placeholder="Mobile">
            <input type="email" name="email" placeholder="E-mail">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Login">
            <p>Already user ? <a href="login.php"><b>Log in Here</b></a></p>
        </form>


    </body>

    </html>
<?php


}

?>