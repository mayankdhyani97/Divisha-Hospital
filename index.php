<?php
include "header.php";
if (isset($_SESSION['user'])) {
?>
    <body>
        <div class="container mt-4">
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
                <img src="images/mainlg.png" alt="Image Logo" srcset="">
            </div>
            </div>
        </div>
    </body>
    </html>
<?php

}else {
    header('location:login.php');
}
?>

<?php include "footer.php"; ?>