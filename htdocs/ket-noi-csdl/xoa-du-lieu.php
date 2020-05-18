<?php
include_once('ketnoi.php');

$maNganh = $_GET("ma");

$sql = "Delete from tbl_nganh where maNganh='$maNganh'";
if( $conn->query($sql) == true)
	header("Location: hien-thi-du-lieu.php");
else 
	echo "Lỗi ".$conn->error;