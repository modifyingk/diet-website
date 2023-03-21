﻿<?php 
//text 및 html 유형 utf-8로 인코딩
header("Content-Type: text/html; charset=UTF-8"); 
//세션 시작
session_start();
//세션에 저장된 아이디 및 이름 값이 없다면, 게시판 페이지로 이동
if(!(isset($_SESSION['id']) && isset($_SESSION['username']))) { 
echo "<script>location.href='board.php';</script>";
}
?>

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>다이어트</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="main.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">HEALTH CARE</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
									<li><a href="board.php" style="color:;"><b>BOARD</b></a></li>
                            <div class="menu_img" id="mic" onclick="menu_img_click()"></div>
<?php if(!isset($_SESSION['id'])){ ?>
<li><a href="join.html" style="float:right; margin-left:10px;">JOIN</a></li>
<li><a href="login.html" style="float:right">LOGIN</a></li>
<?php } ?>



<?php if(isset($_SESSION['id'])){ ?>
<li><a href="logout.php" style="float:right;">LOGOUT</a></li>
<li><a href="joinedit.php" style="float:right;">MEMBER-INFO</a></li>
<?php } ?>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="main.php">HOME</a></li>
							<li><a href="joinedit.php">개인정보수정</a></li>
							<li><a href="다이어트.php">다이어트</a></li>
							<li><a href="건강한생활습관.php">건강한 생활습관</a></li>
							<li><a href="홈트레이닝.php">홈 트레이닝</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>다이어트</h1>
							<h3>현재체중</h3>

							<section class="tiles">
								<article class="style1">
										<img src="images/circle_PNG26.png" width="353px" height="326px" alt="" />
									</span>
									<a href="#">
										<h1 style="color:black;"><?php
											$conn = mysqli_connect("localhost","root","","web");
											// $sql = "SELECT * FROM member";
											$sql = "select *from member where id='".$_SESSION['id']."'";
											$result = mysqli_query($conn, $sql);
											if (mysqli_num_rows($result) > 0) {
											while($row = mysqli_fetch_assoc($result)) {
											echo  $row["weight"]. " kg" . "<br>";
											}
											}else{
											echo "테이블에 데이터가 없습니다.";
											}
											mysqli_close($conn); // 디비 접속 닫기
											?></h1></a>
									  </article>
				 </section>


							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="체중관리.php">
										<h2>체중관리</h2>
										<div class="content">
											<p>체중관리를 위한 페이지 입니다.</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
								    <img src="images/pic02.jpg" alt="" >
									</span>
									<a href="식단관리.php">
										<h2>식단관리</h2>
										<div class="content" >
											<p>식단관리를 위한 페이지 입니다.</p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="눈바디.php">
										<h2>눈바디</h2>
										<div class="content">
											<p>사용자의 눈바디를 확인할 수 있는 페이지입니다.</p>
										</div>
									</a>


							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
							<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							 <li>&copy; 2019 by 공돌이광식</li><li>&copy; Untitled. All rights reserved</li></li><li>&copy; bqlqn</li>
							 <li>&copy; https://blog.yonseibon.co.kr/life/%EB%88%88-%EA%B1%B4%EA%B0%95-%EC%A7%80%ED%82%A4%EB%8A%94-%EC%83%9D%ED%99%9C%EC%8A%B5%EA%B4%80/</li>
							 <li>&copy; https://bonlivre.tistory.com/143</li><li>&copy;https://medium.com/@wooder2050</li><li>&copy;http://jin2nul2.com/</li>
               <li>&copy; https://1freewallpapers.com/</li><li>&copy; https://rel0608.tistory.com/</li><li>&copy;https://www.emojiall.com/ko</li>
               <li>&copy; https://ddochi-dev.tistory.com/</li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>