<?php
include "header.php";
?>
<link rel="stylesheet" href="css/login.css">

<?php
if (isset($_POST["ilogin"])) {

    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $query = "SELECT * FROM `signup` WHERE email='$email' && password='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        header('location:index.php');
        $_SESSION['user'] = true;
    } else {
        echo "<script> alert('No record found'); </script>";
        echo mysqli_error($conn);
    }
}


?>

<!-- Login Form -->
<div class="container text-center mt-5 text-white">
    <div class="row">
        <h1>Login</h1>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" name="ilogin" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>