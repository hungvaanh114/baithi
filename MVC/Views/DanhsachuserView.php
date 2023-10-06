<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>QL Sách</title>
	<style type="text/css">
		* {
			margin: 0px
		}

		.header {
			height: 100px;
			background: #251cfb url("http://192.168.183.128/baithi/Public/images/logo.png") no-repeat;
			padding: 10px 35px;
			margin-right: 0px;
		}

		.menu {
			height: 45px;
			background: #2f5841;
			margin-top: 0px;
		}

		.menu>ul>li {
			float: left;
			list-style: none;
			padding: 10px 25px;
			position: relative;
		}

		.menu>ul>li>a {
			text-decoration: none;
			color: white;
			font-size: 16px;
		}

		.menu>ul>li:hover {
			display: block;
			background: #00bb55;
		}

		.menu>ul>li>ul {
			display: none;
			background: #3e454c;
			width: 200px;
			position: absolute;
			padding: 0px;
			top: 44px;
			left: 0px;
		}

		.menu>ul>li:hover ul {
			display: block;
			background: #1a1b1a;
		}

		.menu>ul>li>ul>li {
			list-style: none;
			padding: 10px 10px;
			border: 1px dotted gray;
		}

		.menu>ul>li>ul>li>a {
			text-decoration: none;
			color: white;
		}

		.menu>ul>li>ul>li:hover {
			display: block;
			background: #00bb55
		}

		h1 {
			text-shadow: 0 0 3px red;
			text-align: center;
			padding-top: 20px;
			padding-left: 380px;
			color: #f7ef06;
		}

		.footer {
			height: 70px;
			background: #b5d0e3;
		}

		cation {
			text-align: center;
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>

<body>

	<div class="container form-group" style="background-color: #e5e4e4 ;    padding-bottom: 25%;">
		<div class="header row">
			<h1>QUẢN LÝ CÀ PHÊ</h1>
		</div>
		<div class="menu row">
			<ul>
				
				<li><a href="http://192.168.183.128/QLS_MVC_API/Home">Quản lý user</a>
					<ul>
						<li><a href="http://192.168.183.128/baithi/User">Thêm user</a></li>
						<li><a href="http://192.168.183.128/baithi/Danhsachuser">Danh sách user</a></li>
					</ul>
				</li>
				<li><a href="http://192.168.183.128/baithi/Login"><img src="http://192.168.183.128/baithi/MVC/Public/images/top_menu_logout.gif">&nbsp;&nbsp;Thoát</a></li>
			</ul>
			
		</div>
		<div>Tài khoản : <?php echo $_SESSION ["taikhoan1"] ?>
		<!-- Gọi các trang khác -->
		<div class="container-fluid mt-3">
    <h2 style="text-align: center;color: blue;">THÔNG TIN TÌM KIẾM</h2>

    <form method="post" action="http://192.168.183.128/baithi/MVC/Controllers/Danhsachuser/timkiemuser">
        <!-- Vertical -->
        <div class="form-group">
            <label>Tài khoản</label>
            <input type="text" name="taikhoan" class="form-control" placeholder="Nhập tài khoản" value="<?php if (isset($data['taikhoan'])) echo $data['taikhoan']; ?>">
            <label>Tên user</label>
            <input type="text" name="ten" class="form-control" placeholder="Nhập tên user" value="<?php if (isset($data['ten'])) echo $data['ten']; ?>">
        
            <br>
            <div style="text-align: center;">
                <div class="input-group-append" style="display: block;">
                    <button class="btn btn-secondary" type="submit" name="btnSearch" style="    background-color: #ffae68;">
                        <i><img src="http://192.168.183.128/baithi/MVC/Public/images/search.png"></i> Tìm kiếm
                    </button> &nbsp;
               
                </div>

            </div>
        </div>
        <?php

        ?>
        <h2 style="text-align: center;color: blue;">KẾT QUẢ TÌM KIẾM</h2>
        <table class="table table-bordered table-striped">
            <thead style="background-color: darkkhaki">
                <th>STT</th>
                <th>Tài khoản</th>
                <th>Tên</th>
                <th>Tuổi</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>SDT</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                $count = 1;
                if (isset($data['result'])) {

                    foreach ($data['result'] as $row) {
                        echo '<tr>
                    <td>' . $count++ . '</td>
                    <td>' . $row["taikhoan"] . '</td>
                    <td>' . $row["ten"] . '</td>
                    <td>' . $row["tuoi"] . '</td>
                    <td>' . $row["gioitinh"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["diachi"] . '</td>
                    <td>' . $row["sdt"] . '</td>
                     <td style="text-align: center"><a href="http://192.168.183.128/baithi/MVC/Controllers/Danhsachuser/xoauser/' . $row["taikhoan"] . '">
                    <img src="http://192.168.183.128/baithi/MVC/Public/images/deleteStand.png">
                    </a></td>
                    <td><a href="http://192.168.183.128/baithi/MVC/Controllers/Danhsachuser/edituser/' . $row["taikhoan"] . '" class="btn btn-outline-priidry">Edit</a></td>
                </tr>'
                        
                ;
                    }
                }
                ?>
            </tbody>


        </table>
        </div>
    </form>

	</div>




</div>
</body>

</html>