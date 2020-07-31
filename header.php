<?php
session_start();
include("config.php");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisha Hospital</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Divisha Hospital</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicess
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Suggetions</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Contribution</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Pendemic Help</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Hospitality</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['user'])) {

            ?>
                <a class="btncolor" href="logout.php"><button class="btn btn-danger mx-2 my-2 my-sm-0" type="button">LogOut</button></a>
            <?php
            } else {
            ?>
                <a class="btncolor" href="signup.php"><button class="btn btn-primary mx-2 my-2 my-sm-0" type="button">SignUp</button></a>

                <a class="btncolor" href="login.php"><button class="btn btn-success mx-2 my-2 my-sm-0" type="button">Login</button></a>
            <?php
            }
            ?>
        </div>
    </nav>

    <!-- Navbar End -->