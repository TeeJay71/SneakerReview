<?php include("connection.php") ;
?>

<?php
if(isset($_POST["btn_submit"])){
	$user=$_POST["username"];
	$pass=$_POST["password"];
	$email=$_POST["email"];

			if ($user== "" || $pass == "" || $email == "") {
			echo "Bạn vui lòng điền đầy đủ thông tin. ";
		}else{
			$check = "SELECT username FROM users WHERE username='$user'";
			$query1 = mysqli_query($conn,$check);
			$num_rows1 = mysqli_num_rows($query1);
			if ($num_rows1 > 0){
				echo "Tài khoản đã tồn tại. ";
			}
			else{
				$check1 = "SELECT email FROM users WHERE email='$email'";
				$query2 = mysqli_query($conn,$check1);
				$num_rows2 = mysqli_num_rows($query2);
				if ($num_rows2 > 0){
					echo "Email đã tồn tại. ";
				}
	
				else{
				if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email))
				{
					echo "Email này không hợp lệ. Vui lòng nhập Email khác. ";
					exit();
				}
				else{
				
					$sql = "INSERT INTO users(username, password, email) VALUES ( '$user', '$pass', '$email')";
					// thực thi câu $sql với biến conn lấy từ file connection.php
					mysqli_query($conn,$sql);
					echo " Chúc mừng bạn đã đăng ký thành công ";
					header('location: login1.php');
				}}
			}
		}
 
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="login-form/assets/css/styles.min.css">
</head>

<body>
    <div class="container full-height">
        <div class="row flex center v-center full-height">
            <div class="col-8 col-sm-4">
                <div class="form-box">
                    <form action="dangky.php" method="POST">
                        <fieldset>
                            <legend>Đăng Ký</legend><img src="login-form/assets/img/avatar.png" id="avatar" class="avatar round">
                            <input class="form-control" type="text" id="username" name="username" placeholder="username">
                            <input class="form-control" type="password" id="password" name="password" placeholder="password">
                             <input class="form-control" type="email" id="email" name="email" placeholder="email">
                               <input class="btn btn-primary btn-block"  type="submit" name="btn_submit" value="Đăng ký">
                           </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>



<div>
	<form action="dangky.php" method="POST">
		Tài khoản: <input type="text" name="username">
		Mật Khẩu: <input type="text" name="password">
		email <input type="text" name="email">
		<input type="submit" name="ok">
	</form>

</div>