<?php


$conn=mysqli_connect("localhost", "root", "", "apna_hath","3306");

// $conn=mysqli_connect('localhost', 'u427760526_root', 'k|W$$b0N' , 'u427760526_codearjun');

if(mysqli_connect_errno())
{
    echo "connection Fail".mysqli_connect_error();
}


?>