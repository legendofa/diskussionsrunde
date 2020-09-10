<?php
$conn=mysqli_connect("diskussionsrunde-database", "u233310313_user", "Bm3qM2RFpuqUOiDF", "u233310313_data");
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
mysqli_query($conn, "SET NAMES 'UTF8'") or die("ERROR: ". mysqli_error($conn));