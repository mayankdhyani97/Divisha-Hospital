<?php
session_start();
?>
<?php
require("connect    ion\config.php");
if (isset($_REQUEST["submit"])) {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($name == '' || $mobile == '' || $email == '' || $password == '') {
        // header('location:index.php');
        echo mysqli_error($conn) or die('please enter some data');
        exit;
    } else {
        $query = "insert into signup values(NULL,'$name','$mobile','$email','" . md5($password) . "')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            header("location:index.php");
            $_SESSION['user'] = true;
        } else {

            echo mysqli_error($conn);
        }
    }
} else {
    //     // header('location:index.php');
    echo 'this is my error';
    //     echo mysqli_error($conn) or die('submit button is not running');
}
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

    <form class="box" action="patient_signup.php" method="post">
        <h1>Sign Up</h1>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="mobile" placeholder="Mobile">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="submit" value="Login">
        <p>Alredy user ? <a href="login.php"><b>Log in Here</b></a></p>
    </form>


</body>

</html>