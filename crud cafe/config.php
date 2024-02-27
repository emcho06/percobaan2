<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_cafe";

$koneksi = mysqli_connect($hostname,$username,$password,$database);

if(!$koneksi){
     echo "koneksi Gagal";
}
