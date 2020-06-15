<?php
include_once('ketnoi.php');

if ( isset($_GET["malop"]) ) {
	$maLop = $_GET["malop"];
}


$sql = "Delete from tbl_lop where maLop='$maLop'";
if( $conn->query($sql) == true)
	header("Location: lop.php");
else 
	echo "Lỗi ".$conn->error;