<?php 
$koneksi = mysqli_connect("192.168.1.250","root","rachm12016","dbrachmi");
//$koneksi = mysqli_connect("localhost","root","","dbrachmi");
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>