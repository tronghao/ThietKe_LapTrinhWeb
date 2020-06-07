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
							        <td> <a data-toggle="modal" data-target="#myModal"> <button class="btn btn-success">Sửa</button> </a> </td> 
							        <td> <a href="xoa-du-lieu.php?ma=<?php echo $row["maNganh"] ?>"> <button class="btn btn-danger">Xóa</button>  </a> </td>


							        <!-- Modal -->
								  <div class="modal fade" id="myModal" role="dialog">
								    <div class="modal-dialog">
								    
								      <!-- Modal content-->
								      <div class="modal-content">
								        <div class="modal-header">
								        	<h4 class="modal-title">Sửa ngành</h4>
								         	<button type="button" class="close" data-dismiss="modal">&times;</button>
								          
								        </div>
								        <div class="modal-body">
								         	<form action="sua-du-lieu.php?ma=<?php echo $row["maNganh"] ?>" method="post">
												<div class="form-group">
													<div>
														<label for="ma-nganh">Mã ngành: </label>
														<input type="text" class="form-control" id="ma-nganh" name="txtMaNganh" required value="<?php echo $row["maNganh"] ?>" disabled>
													</div>
													<div>
														<label for="ten-nganh">Tên ngành: </label>
														<input type="text" class="form-control" id="ten-nganh" name="txtTenNganh" required value="<?php echo $row["tenNganh"] ?>">
													</div>
												</div>
												<div style="text-align: right;">
													<button type="submit" class="btn btn-primary" name="submit">Sửa</button>
												</div>
												
											</form>
								        </div>
								      </div>
								      
								    </div>
								  </div>
							    </tr>

							 <?php
							}
						}

						$conn->close();
				      ?>
				    </tbody>
				  </table>
			</div>

		<a href="frm_them_nganh_hoc.php">Thêm ngành học</a>
			
		</div>
	</div>
</body>
</html>