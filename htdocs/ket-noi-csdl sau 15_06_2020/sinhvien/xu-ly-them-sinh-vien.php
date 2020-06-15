<?php
include_once('../ketnoi.php');



if(!empty($_POST["slTenLop"]) && !empty($_POST["txtMaSV"])  && !empty($_POST["txtTenSV"]) && !empty($_POST["txtQueQuan"]) && !empty($_POST["txtNgaySinh"]) && !empty($_POST["fileHinhAnh"])) {

	$maLop = $_POST["slTenLop"];
	$maSV = $_POST["txtMaSV"];
	$tenSV = $_POST["txtTenSV"];
	$queQuan = $_POST["txtQueQuan"];
	$ngaySinh = $_POST["txtNgaySinh"];
	$gioiTinh = "nu";
	if($_POST["radioGioiTinh"] == "nam")
	{
		$gioiTinh = "nam";
	}
} 

if(  isset($_POST["submit"]) ) {
	$target_dir = "../img/";
	$target_file = $target_dir . basename($_FILES["fileHinhAnh"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["fileHinhAnh"]["tmp_name"]);
	  if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  echo "Sorry, file already exists.";
	  $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["fileHinhAnh"]["size"] > 500000) {
	  echo "Sorry, your file is too large.";
	  $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	  $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["fileHinhAnh"]["tmp_name"], $target_file)) {
	    echo "The file ". basename( $_FILES["fileHinhAnh"]["name"]). " has been uploaded.";
	  } else {
	    echo "Sorry, there was an error uploading your file.";
	  }
	}

	if($uploadOk == 1)
	{
		$tenFile = $_FILES["fileHinhAnh"]["name"];
		$sql = "INSERT INTO tbl_sinh_vien value('$maSV', N'$tenSV', '$ngaySinh', '$queQuan', '$gioiTinh', '$tenFile', '$maLop')";
		if( $conn->query($sql) == true)
			header("Location: sinh-vien.php");
		else 
			echo "Lỗi ".$conn->error;

		$conn->close();
	}
	else {
		echo "Không thể thêm sinh viên";
	}
	
}
