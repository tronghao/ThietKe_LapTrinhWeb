<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Ngành Học</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	.title {
		text-align: center;
		font-size: 25px;
	}
</style>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<ul class="nav">
				  <li class="nav-item">
				    <a class="nav-link" href="frm_them_nganh_hoc.php">Ngành</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="lop.php">Lớp</a>
				  </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<form action="xu-ly-them-nganh-hoc.php" method="post">
					<div class="form-group">
						<div class="title">FORM NGÀNH HỌC</div>
						<div>
							<label for="ma-nganh">Mã ngành: </label>
							<input type="text" class="form-control" id="ma-nganh" name="txtMaNganh" required>
						</div>
						<div>
							<label for="ten-nganh">Tên ngành: </label>
							<input type="text" class="form-control" id="ten-nganh" name="txtTenNganh" required>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<button type="reset" class="btn btn-primary">Reset</button>
				</form>
				<div>
				<br>
				<a href="hien-thi-du-lieu.php">Hien du lieu</a></div>
			</div>
		</div>


	</div>
</body>
</html>