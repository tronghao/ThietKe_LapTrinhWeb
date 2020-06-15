<?php
	include_once('../ketnoi.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản Lý Sinh Viên</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include_once "menu.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<form action="xu-ly-them-sinh-vien.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
						
							<?php if(isset($_GET["malop"])) {
								$maLop = $_GET["malop"];
								$sql = "select * from tbl_lop where maLop='$maLop'";
								$rs = $conn->query($sql);
								if( $rs->num_rows > 0 )
								{
									while( $row = $rs->fetch_assoc() ) {
								?>
								<div>
											<label for="ten-nganh">Tên Lớp: </label>

											<select name="slTenNganh" class="form-control" id="ten-nganh">
												<?php 
													$sql1 = "select * from tbl_nganh";
													$rs1 = $conn->query($sql1);
													if( $rs1->num_rows > 0 )
													{
														while( $row1 = $rs1->fetch_assoc() ) {
															if($row["maNganh"] == $row1["maNganh"]){

														?>
														<option value="<?php echo $row1["maNganh"] ?>" selected><?php echo $row1["tenNganh"] ?></option>
														<?php

															}else{

												?>
															<option value="<?php echo $row1["maNganh"] ?>" ><?php echo $row1["tenNganh"] ?></option>
												<?php
															}
														}
													}
												?>
											</select>
										</div>
										<div>
											<label for="ten-nganh">Mã số: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtMaLop" required value="<?php echo $row["maLop"] ?>" readonly>
										</div>
										<div>
											<label for="ten-nganh">Họ Tên: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtTenLop" required value="<?php echo $row["tenLop"] ?>">
										</div>
										<div>
											<label for="ten-nganh">Giới tính: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtTenLop" required value="<?php echo $row["tenLop"] ?>">
										</div>
										<div>
											<label for="ten-nganh">Quê quán: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtTenLop" required value="<?php echo $row["tenLop"] ?>">
										</div>
										<div>
											<label for="ten-nganh">Ngày sinh: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtTenLop" required value="<?php echo $row["tenLop"] ?>">
										</div>
										<div>
											<label for="ten-nganh">Hình ảnh: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtTenLop" required value="<?php echo $row["tenLop"] ?>">
										</div>
									</div>
									<button type="button" class="btn btn-primary" name="submit">Thêm</button>
									<button type="submit" class="btn btn-primary" formaction="cap-nhat-lop.php">Cập nhật</button>
							<?php
									}	
								}
							}
							else {
								
							?>
								<div>
									<label for="ten-nganh">Tên Lớp: </label>

									<select name="slTenLop" class="form-control" id="ten-nganh">
										<?php 
											$sql = "select * from tbl_lop";
											$rs = $conn->query($sql);
											if( $rs->num_rows > 0 )
											{
												while( $row = $rs->fetch_assoc() ) {

										?>
													<option value="<?php echo $row["maLop"] ?>" ><?php echo $row["tenLop"] ?></option>
										<?php
												}
											}
										?>
									</select>
								</div>
									<div>
										<label for="ten-nganh">Mã Số: </label>
										<input type="text" class="form-control" id="ten-nganh" name="txtMaSV" required>
									</div>
									<div>
										<label for="ten-nganh">Họ Tên: </label>
										<input type="text" class="form-control" id="ten-nganh" name="txtTenSV" required>
									</div>
									<div>
											<label for="ten-nganh">Giới tính: </label>
											<div class="form-check-inline">
											  
											  <input type="radio" class="form-check-input" name="radioGioiTinh" value="nam">
											  <label class="form-check-label">
											    Nam
											  </label>
											</div>
											<div class="form-check-inline">
											  <label class="form-check-label">
											    Nữ
											  </label>
											  <input type="radio" class="form-check-input" name="radioGioiTinh" value="nu">
											</div>
										</div>
										<div>
											<label for="ten-nganh">Quê quán: </label>
											<input type="text" class="form-control" id="ten-nganh" name="txtQueQuan" required >
										</div>
										<div>
											<label for="ten-nganh">Ngày sinh: </label>
											<input type="date" class="form-control" id="ten-nganh" name="txtNgaySinh" required>
										</div>
										<br>
									  <div class="custom-file">
									    <input type="file" class="custom-file-input" id="customFile" name="fileHinhAnh">
									    <label class="custom-file-label" for="customFile">Chọn file</label>
									  </div>


										<script>
										// Add the following code if you want the name of the file appear on select
										$(".custom-file-input").on("change", function() {
										  var fileName = $(this).val().split("\\").pop();
										  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
										});
										</script>
									</div>
									<button type="submit" class="btn btn-primary" name="submit">Thêm</button>
									<button type="button" class="btn btn-primary">Cập nhật</button>		
						<?php
							
						}
						?>
				</form>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3">
				<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>Mã Lớp</th>
				        <th>Tên Lớp</th>
				        <th>Tên Ngành</th>
				        <th></th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				      <?php
				      	$sql = "select maLop, tenLop, tenNganh  from tbl_nganh, tbl_lop where tbl_lop.maNganh = tbl_nganh.maNganh";
						$rs = $conn->query($sql);

						if( $rs->num_rows > 0 )
						{
							while( $row = $rs->fetch_assoc() ) {
							?>

								<tr>
							        <td><?php echo $row["maLop"] ?></td>
							        <td><?php echo $row["tenLop"] ?></td>
							        <td><?php echo $row["tenNganh"] ?></td>
							        <td> <a href="lop.php?malop=<?php echo $row["maLop"] ?>"> <button class="btn btn-success">Sửa</button>  </a> </td>
							        <td> <a href="xoa-lop.php?malop=<?php echo $row["maLop"] ?>"> <button class="btn btn-danger">Xóa</button>  </a> </td>

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