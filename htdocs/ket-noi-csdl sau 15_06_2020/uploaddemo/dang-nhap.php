<?php
	session_start();
	include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	$ten = $mk = $hinh = "";
	$quyen =1;
	
	if(isset($_POST["sbThem"]))
	{
		//Lấy dữ liệu từ form
		$ten = $_POST["tendn"];
		$mk =  md5($_POST["matkhau"]);
		
				
		
		$sql = "select * from tbl_user where tendangnhap='$ten' and matkhau='$mk'";
	
		$rs = $conn->query($sql);
		
		if($rs->num_rows>0)
		{
			$row = $rs->fetch_assoc();
			$_SESSION["role"] = $row["quyen"];
			$_SESSION["name"] = $ten;
			header("Location: admin.php");
		}
		else
		{
			header("Location: dang-nhap.php");
		}
	}
?>


<div class="container">
  <h2>Đăng Nhập</h2>
  <form action="" method = "post" enctype="multipart/form-data"	>
    <div class="form-group">
      <label for="tendn">Tên đăng nhập</label>
      <input type="text" class="form-control" id="tendn" placeholder="Nhập tên đăng nhập" name="tendn">
    </div>
    <div class="form-group">
      <label for="matkhau">Password:</label>
      <input type="password" class="form-control" id="matkhau" placeholder="Nhập mật khẩu" name="matkhau">
    </div>

    <button type="submit" name = "sbThem" class="btn btn-primary">Đăng nhập</button>
  </form>
</div>



<?php
	$conn->close();
?>
</body>
</html>
