


<!DOCTYPE html>
<html>
<head>
	<title>JSneaker review</title>
	<meta charset="utf-8">
	<meta name="actor" content="Tee Jay">
	<meta name="keyword" content="TestWeb">
	<link rel="stylesheet" type="text/css" href="class.css">

</head>
<body>
	<div id="logo">
		<img src="picture/logoweb.png">
	</div>
	<div id="menu">
		<ul>
			<li><a href="class.php">Trang chủ</a></li>
			<li><a href="">Sneaker</a>
				<ul>
					<li><a href="nike.php">Nike</a></li>
					<li><a href="">Adidas</a></li>
					<li><a href="">Air Jordan</a></li>
					<li><a href="">Timberland</a></li>
					<li><a href="">Converse</a></li>
					<li><a href="">Vans</a></li>
				</ul>
			</li>
			<li><a href="">Local brand</a>
				<ul>
					<li><a href="">ClownZ</a></li>
					<li><a href="">Jikey</a></li>
					<li><a href="">The Collectors</a></li>
					<li><a href="">Grim DC</a></li>
					<li><a href="">SCC Daily Sneaker</a></li>
					<li><a href="">DVRK</a></li>
				</ul>
			</li>
			<li><a href="https://www.facebook.com/teejayyy.lxxi">Liên hệ</a></li>

<?php if(isset($_SESSION["username"]))
{
	                echo "Chào " .$_SESSION["username"];
                    echo	"<li><input type='button' value='Đăng xuất' id='logOut' class='btn' onclick='LogOut()'></li>";}


                    else
	{	
		echo	"<li><input type='button' value='Log in' id='logIn' class='btn' onclick='Login()'></li>";
		echo"<li><input type='button' value='Register' id='Register' class='btn' onclick='Register()'></li>";

}

?>
	
		</ul>
	</div>
	<br>
	<div id="slideshow" style="z-index: -1;">
		<div class="mySlides fade">
			<img src="picture/SoleEx.png" width="auto" height="500px">
			<div class="text" style="color: #FFFF00;">Sole Ex 2018 – Sự kiện về sneaker và streetwear lớn nhất miền Bắc sẽ trở lại vào ngày 23/12 tới.</div>
		</div>
		<div class="mySlides fade">
			<img src="picture/SoleEx1.jpg" width="auto" height="500px">
			<div class="text">Sole Ex 2017 và những hình ảnh đáng nhớ </div>
		</div>
		<div class="mySlides fade">
			<img src="picture/SoleEx2.jpg" width="auto" height="500px">
			<div class="text">Sole Ex 2017 và những hình ảnh đáng nhớ</div>
		</div>
	</div>
	<div style="text-align: center;">
		<span class="dot" onclick="currentSlide(0)"></span>
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
	</div>