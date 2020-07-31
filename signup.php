<?php
include "header.php";
if (isset($_REQUEST["isignup"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $mobile = $_POST["mobile"];

    $query = "SELECT * FROM `signup` WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);
    if ($row > 0) {
        echo "Please Enter Different Email Address";
    } else {

        if ($email == '' || $password == '' || $mobile == '') {
            echo mysqli_error($conn);
        } else {
            $query = "INSERT INTO `signup` VALUES(NULL,'$email','$password','$mobile')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                header("location:index.php");
                $_SESSION['user'] = true;
            } else {

                echo mysqli_error($conn);
            }
        }
    }
} else {
    echo mysqli_error($conn);
}
?>

<!-- Login Form -->
<div class="container text-center mt-5">
    <div class="row">
        <h1>Signup</h1>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="signup.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" name="isignup" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>