<?php
$host       = "localhost";
$username   = "root";
$password   = "";
$database   = "bayupm_311810199";

$sekarang = date("d-m-Y H:i:s");

$tersambung = mysqli_connect($host,$username,$password,$database);

if(mysqli_connect_error($tersambung)){
     
    echo "Gagal tersambung ke dalam database " . mysqli_connect_error();
    
}
?>