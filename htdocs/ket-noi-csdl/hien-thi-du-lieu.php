<?php 

	include_once('ketnoi.php');
	$sql = "SELECT * FROM tbl_nganh";

	$rs = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hiển thị dữ liệu</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>Mã Ngành</th>
				        <th>Tên Ngành</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				      <?php

						if( $rs->num_rows > 0 )
						{
							while( $row = $rs->fetch_assoc() ) {
							?>

								<tr>
							        <td><?php echo $row["maNganh"] ?></td>
							        <td><?php echo $row["tenNganh"] ?></td>
							        <td> <a href="xoa-du-lieu.php?ma=<?php echo $row["maNganh"] ?>"> <button class="btn btn-danger">Xóa</button> </td> </a>
							    </tr>

							 <?php
							}
						}

						$conn->close();
				      ?>
				    </tbody>
				  </table>
			</div>
		</div>
	</div>
</body>
</html>