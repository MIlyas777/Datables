<?php
$host       ="localhost";
$username   ="root";
$password   ="";
$databese   ="pertemuan13";
$koneksi    =mysqli_connect($host,$username,$password,$databese);

if(mysqli_connect_errno()){
    echo "koneksi databese gagal:" .mysqli_connect_error();
}
?>