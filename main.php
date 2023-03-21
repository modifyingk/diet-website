<?php header("Content-Type: text/html; charset=UTF-8"); 
session_start();
?>
<!DOCTYPE html>
<html>
  <!--<script src="http://lab.alexcican.com/set_cookies/cookie.js" type="text/javascript" ></script>-->
  
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
<head>

</head>
<!--<body style="background:tomato;">
<header><a href="/main.php">공돌이 광식의 홈페이지</a></header>-->

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
                            <!--<li><a href="main.php">공돌이광식</a></li>-->
                            <!--<li><a href="join.html" style="float:right; margin-left:10px;">MEMBER INFO</a></li>
                            <li><a href="main.php" style="float:right">LOGOUT</a></li>-->
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
							<header>
								<h1>ENJOY YOUR HEALTHY LIFE 🌱</h1>
								<p>You can check your daily routine and improve your life healthier!</p>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="다이어트.php">
										<h2>다이어트</h2>
										<div class="content">
											<p>체중관리, 식단관리, 눈바디 비교</p>
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="건강한생활습관.php">
										<h2>건강한 생활습관</h2>
										<div class="content">
											<p>눈 건강, 수면 관리, 생활습관 교정 </p>
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="홈트레이닝.php">
										<h2>홈 트레이닝</h2>
										<div class="content">
											<p>체중관리용, 건강관리용, 수면관리용</p>
										</div>
									</a>
								</article>
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


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
num=n;
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br>
<img style="float:left; width:25%;" src="체리.jpg"><br>
<img style="float:left; width:25%; height:250px;" src="샐러드.jpg"><br>
<img style="float:left; width:25%;" src="야채.jpg"><br>
<img style="float:left; width:25%;" src="베리.jpg"><br>

<script type="text/javascript">
function menu_img_click() {
	x=document.getElementById('c');
	x3=document.getElementById('contents');
	x2=document.getElementById('mic');
	if (x.value == "") {
		x2.style.background = 'url(nav.png) 0 30px';
	    x3.style.display = "block";
	    x.value="1";
	  } else {
		x2.style.background = 'url(nav.png) 0 0';
	    x3.style.display = "none";
	    x.value="";
	  }
	}
</script>

	<!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      
</body>
</html>