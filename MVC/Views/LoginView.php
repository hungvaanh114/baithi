

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://192.168.183.128/baithi/MVC/Public/css/styles.css">
	<style type="text/css">
		* {
			margin: 0px
		}

		.header {
			height: 100px;
			background: #251cfb url("http://192.168.183.128/baithi/Public/images/logo.png") no-repeat;
			padding: 10px 35px;
			margin-right: 0px;
			text-align: center;
		}
		
		</style>
</head>
<body style="background: #8fdff7; height: 100% ; width:100%">
<div class="header">
			<h1>QUẢN LÝ CÀ PHÊ</h1>
		</div>
	<div class="login" style="width:600px;margin:auto;position:relative;">
			<center><i class="fa fa-user-circle" aria-hidden="true" style="font-size:100px;"></i></center>
			<form class="form-horizontal" action="http://192.168.183.128/baithi/Login/Loginn" method="post" style="    margin-left: 125px;">
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				    <div class="col-sm-8">
				    	<p class="col-sm-12" style="color:red;">&nbsp</p>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-sm-3 control-label">TÀI KHOẢN </label>
				    <div class="col-sm-8">
				    	<input type="text" name="taikhoan" class="form-control"  placeholder="Tài khoản">
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">MẬT KHẨU</label>
				    <div class="col-sm-8">
				    	<input type="password" class="form-control" name="matkhau"  placeholder="Mật khẩu" >
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputPassword3" class="col-sm-3 control-label">&nbsp</label>
				</div>
				<div class="form-group">
				    <div class="col-sm-offset-3 col-sm-8">
				    	<button type="submit" name="login" style="    margin-left: 70px;" class="btn btn-default" >Đăng nhập</button>
				    </div>
				</div>
			</form>
			
	</div>
</body>
</html>