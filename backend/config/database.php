<?php 
// Koneksi Ke database MySQL
$host = "localhost";
$user = "root";
$passd = "";
$db = "website_sekolah";

$conf = mysqli_connect($host, $user, $passd, $db);
if(!$conf){
  echo "koneksi gagal";
}



?>