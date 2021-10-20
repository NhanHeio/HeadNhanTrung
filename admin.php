<?php
	$conn = new mysqli('localhost','root','','quanlybanxe') or die('Ket noi that bai');
?>
<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Honda Nhân Trung</title>
		<script src="js/jquery.js"></script>
		<script src="js/main.js"></script>
        
		<link rel="stylesheet" href="css\base.css">
        <link rel="stylesheet" href="css/main1.css">
		<link rel="stylesheet" href="fontawesome-free-5.15.1-web\css\all.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class = "app">
			<header class="header">
				<div class="gird">
					<nav class="header__navbar">
						<ul class="header__navbar-list">
							<li class="header__navbar-item"><a href="https://goo.gl/maps/FjZdB9QQtKZmV4dk9" target="blank">Nguyễn Văn Linh, phường An Khánh, NK, CT</a></li>
						</ul>
						<ul class="header__navbar-list">
							<li class="header__navbar-item header__navbar-item-noti">
								<a href=# class="header__navbar-item-link">
									<i class="fas fa-bell"></i>
									Thông báo</a>
									<div class="header__noti">
										<header class="header__noti-header">
											<h3>Thông báo mới nhận</h3>
										</header>
										<ul class="header__noti-list">
										
													
												<li class="header__noti-item">
														<a href="" class="header__noti-link">
														
														<div class="header__noti-info">
															<span class="header__noti-name">Khách hàng: Hồ Trung Nhân </span>
															<p class="header__noti-description">Số diện thoại: 0774000828 </p>
                                                            <p class="header__noti-description">Xe Winner X</p>
														</div>
														</a>
													</li>
												
											
											
											
											
										</ul>
										<footer class="header__noti-footer">
											<a href="" class="header__noti-footer-btn">Xem tất cả</a>
										</footer>
									</div>
							</li>
							
							<li class="header__navbar-item header__user-info">
                                <img src="img/avt.jpg	" alt="" class="header__user-img">
                                <span class="header__user-name">Nhân</span>
                                <ul class="header__user-list">
                                    <li class="header__user-item">
                                        <a href="">Tài khoản của tôi</a>
                                    </li>
                                    <li class="header__user-item">
                                        <a href="">Đơn mua</a>
                                    </li>
                                    <li class="header__user-item header__user-separate">
                                        <a href="logout.php">Đăng xuất</a>
                                    </li>
                                </ul>
                            </li>
						</ul>
					</nav>
				</div>
		</header>
		<div class="app__container">
				<div class="grid__row app__content">
				<div class="grid__col-2">
						<nav class="category">
							<h3 class="category__heading">
								<i class="category__heading-icon fas fa-list"></i>
								DANH MỤC
							</h3>
							<ul class="category-list">
								<li class="category-item">
									<span id="all-order" class="admin-category-link">Tất cả đơn hàng</span>
								</li>
								<li class="category-item">
									<span id="unconfirmed-order" class="admin-category-link">Đơn hàng chưa duyệt</span>
								</li>
								<li class="category-item">
									<span id="confirmed-order" class="admin-category-link">Đơn hàng đã duyệt</span>
								</li>
								
							</ul>
						</nav>
					</div>
				
				<div class="grid__col-10">
						<div class="home-filter">							
							<button id="home-admin-edit" class="btn btn--primary" style="margin-right: 12px;" onclick="document.getElementById('edit-product').style.display='block'">Chỉnh sửa shop</button>
							<button id="home-admin-add" class="btn btn--primary" style="margin-right: 12px;" onclick="document.getElementById('add-product').style.display='block'">Thêm hàng mới</button>																					
						</div>
						<div id="edit-product" class="edit-product">
						
								
								<div class="editor" id="editor">
									
										<span class="upload-label">Mã số hàng hóa: </span>
										<input type = "text" name="MSHH" class="form-add-product">
										<span class="upload-label">Tên sản phẩm: </span>
										<input type = "text" name="TenHH" class="form-add-product">
										<span class="upload-label">Giá: </span>
										<input type = "text" name="Gia" class="form-add-product">
										<span class="upload-label">Số lượng: </span>
										<input type = "text" name="SoLuongHang" class="form-add-product">
										<span class="upload-label">Loại: </span>
										<input type = "text" name="MaNhom" class="form-add-product">
										<span class="upload-label">Mô tả sản phẩm: </span>
										<input type = "text" name="MoTaHH" class="form-add-product">														
										<button class="btn btn--primary" type="submit">Save</button>
								
								</div>
								<table width="100%" border="1" cellspacing="0" >
									<tr>
										<th class="product-text">Mã số xe</th>
										<th class="product-text">Tên xe</th>
										<th class="product-text">Mô tả</th>
										<th class="product-text">Giá</th>
										<th class="product-text">Số lượng</th>
										<th class="product-text">Loại</th>
										<th class="product-text">Hình</th>
										<!-- <th>Kích thước</th>
										<th>Trọng lượng</th>
										<th>Hệ thống phuộc</th>
										<th>Bánh xe</th>
										<th>Động cơ</th>
										<th>Hệ thống nhiên liệu</th>
										<th>Hệ thống chuyền động</th> -->
									</tr>
									<?php
										$sql = "SELECT * FROM `xe`";
										$result = mysqli_query($conn,$sql);
										if(mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result)){

												echo '
												<tr>
													<td class="product-text">'. $row["MSHH"] .'</td>
													<td class="product-text">'. $row["TenHH"] .'</td>
													<td class="product-text">'. $row["Mota"] .'</td>
													<td class="product-text">'. $row["Gia"] .'</td>
													<td class="product-text">'. $row["SoLuong"] .'</td>
													<td class="product-text">'. $row["Loai"] .'</td>
													<td class="product-text">'. $row["Hinh"] .'</td>
												</tr>
												';
											}
										}
									?>
								</table>
								<button id="edit-product" class="btn btn--primary" style="margin-right: 12px;" onclick="document.getElementById('editor').style.display='block'">Chỉnh sửa</button>
								<button type="button" onclick="document.getElementById('edit-product').style.display='none'" class="btn" style="margin-top: 10px;">Cancel</button>
						</div>
						<div id="add-product" class="add-product">
							<form action="xulyupload.php" method="POST" enctype="multipart/form-data">
								<span class="upload-label">Tên sản phẩm: </span>
								<input type = "text" name="TenHH" class="form-add-product">
								<span class="upload-label">Giá: </span>
								<input type = "text" name="Gia" class="form-add-product">
								<span class="upload-label">Số lượng: </span>
								<input type = "text" name="SoLuongHang" class="form-add-product">
								<span class="upload-label">Loại: </span>
								<input type = "text" name="MaNhom" class="form-add-product">
								<span class="upload-label">Mô tả sản phẩm: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Kích thước: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Trọng lượng: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Hệ thống phuộc: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Bánh xe: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Động cơ: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Hệ thống nhiên liệu: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Hệ thống chuyền động: </span>
								<input type = "text" name="MoTaHH" class="form-add-product">
								<span class="upload-label">Upload hình ảnh sản phẩm: </span>
								<input type = "file" name="image-upload" id="image-upload" class="form-add-product">
								<button class="btn btn--primary" type="submit">Submit</button>
								<button type="button" onclick="document.getElementById('add-product').style.display='none'" class="btn" style="margin-top: 10px;">Cancel</button>
							</form>
						</div>
						<div id="admin-list-item-cart">

						</div>
				</div>
			</div>
		</div>
	</div>
	


	</body>
</html>