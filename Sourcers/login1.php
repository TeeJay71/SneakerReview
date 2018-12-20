<?php 
session_start();
include("connection.php");

	if(isset($_POST["btn_submit"])){
    $user=$_POST["username"];
    $pass=$_POST["password"];

   
if ($user == "" || $pass =="") {
		echo "Tài khoản hoặc mật khẩu không được để trống.";
	}else{
		$sql = "SELECT * FROM users where username='$user' and password='$pass'";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo " Tên đăng nhập hoặc mật khẩu không đúng.";
		}else{  


			$data= mysqli_fetch_array($query);
			$_SESSION['captruycap']=$data["level"];
			if($_SESSION['captruycap']==2){
				
                header('Location:Admin/admin.php');
                
				
				
			}
			else{
			$_SESSION["username"] = $data["username"];

				header("location:class.php");}

    }
}}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="login-form/assets/css/styles.min.css">
</head>

<body>
    <div class="container full-height">
        <div class="row flex center v-center full-height">
            <div class="col-8 col-sm-4">
                <div class="form-box">
                    <form action="login1.php" method="POST">
                        <fieldset>
                            <legend>Sign in</legend><img src="login-form/assets/img/avatar.png" id="avatar" class="avatar round">
                            <input class="form-control" type="text" id="username" name="username" placeholder="username">
                            <input class="form-control" type="password" id="password" name="password" placeholder="password">
                               <input class="btn btn-primary btn-block"  type="submit" name="btn_submit" value="Đăng nhập.">
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
