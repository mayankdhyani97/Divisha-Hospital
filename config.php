<?php
$conn = mysqli_connect("localhost", "root", "", "dhospital");
if(!$conn)
{
    echo mysqli_error($conn);   
}