<?php 
//text 및 html 유형 utf-8로 인코딩
header("Content-Type: text/html; charset=UTF-8"); 
//세션 시작
session_start();
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>육류</title>
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
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Health Care</span>
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
							<h1>육류</h1>
							<span class="image main"><img src="images/pic19.jpg" alt="" /></span>
							<section>
								<div class="row">
									<div class="col-6 col-12-medium">
	
									<HTML>
										<HEAD>
										<title>Searching for text: JavaScript</title>
										</HEAD>
										<body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#660099" onLoad="if(top.changeAD)top.changeAD()">
										<a name="top"></a>
										
										<h2><font face="Verdana,Arial,Helvetica,sans-serif" color="salmon">
										메뉴찾기
									</font></h2>
										
										<form name="f1" action="" onSubmit="if(this.t1.value!=null && this.t1.value!='') findString(this.t1.value);return false">
											<input type="text" name=t1 placeholder="메뉴를 입력하세요" size=20>
											<h3></h3>
											<input type="submit" name=b1 value="Find">
										</form>
										
										<script language="JavaScript">
										var TRange=null;
										
										function findString (str) {
										 if (parseInt(navigator.appVersion)<4) return;
										 var strFound;
										 if (navigator.appName=="Netscape") {
										
										  // NAVIGATOR-SPECIFIC CODE
										
										  strFound=self.find(str);
										  if (!strFound) {
										  strFound=self.find(str,0,1);
										  while (self.find(str,0,1)) continue;
										  }
										 }
										 if (navigator.appName.indexOf("Microsoft")!=-1) {
										
										  // EXPLORER-SPECIFIC CODE
										
										  if (TRange!=null) {
										  TRange.collapse(false);
										  strFound=TRange.findText(str);
										  if (strFound) TRange.select();
										  }
										  if (TRange==null || strFound==0) {
										  TRange=self.document.body.createTextRange();
										  strFound=TRange.findText(str);
										  if (strFound) TRange.select();
										  }
										 }
										 if (!strFound) alert ("String '"+str+"' not found!");
										}
										</script>							
										</BODY>
										</HTML> </div>
	
										<div class="col-6 col-12-medium">
											<h2><font color="white">
												메뉴찾기
											</font></h2>
			
										<form method=get action="http://www.google.co.kr/search" target="_blank" >   <body bgcolor="white">    
											<tr>       
												<td>           
											<input type=text name=q size=25 maxlength=255 placeholder="아래에 없는 메뉴는 GOOGLE을 이용하세요" /> <!-- 구글 검색 입력 창 -->  
											<h3></h3>         
										  <input type=submit name=btnG value="Google 검색" /> <!-- 검색 버튼 -->       
									  </td>     
								  </tr>   
								</body> 
						  </form>
	</div></div>
	<hr size = "5px"  ></hr>
	<h1></h1>
	<h2><font color="salmon">해당하는 유형의 질병을 클릭하세요</font></h2>
	<button type="button" onclick="cssChange()" >고혈압</button>
	<script>
	function cssChange() {
		var x = document.getElementById("갈비");
		var y = document.getElementById("목살");
		var z = document.getElementById("삼겹살");		
		var a = document.getElementById("양념돼지갈비");
		var b = document.getElementById("후라이드치킨");
		var c = document.getElementById("양념치킨");
		var d = document.getElementById("간장치킨");
		var e = document.getElementById("닭강정");


	
		x.style.color = "salmon";     y.style.color = "salmon"; 
		z.style.color = "salmon"; 	  a.style.color = "salmon"; 
		b.style.color = "salmon"; 
		c.style.color = "salmon"; 
		d.style.color = "salmon"; 
		e.style.color = "salmon"; 

	
	}
	</script>
	<button type="button" onclick="cssChange1()" >당뇨병</button>
	<script>
	function cssChange1() {
		var x = document.getElementById("양념돼지갈비");
		var y = document.getElementById("양념치킨");
		var z = document.getElementById("간장치킨");
		var a = document.getElementById("닭강정");
	
		x.style.color = "salmon";     y.style.color = "salmon"; 
		z.style.color = "salmon"; 		a.style.color = "salmon"; 

	
	}
	</script>
	
	<button type="button" onclick="cssChange2()" >심장질환</button>
	<script>
	function cssChange2() {
		var x = document.getElementById("안심");
		var y = document.getElementById("등심");
		var z = document.getElementById("채끝살");
		var a = document.getElementById("살치살");
		var b = document.getElementById("갈비");
		var c = document.getElementById("목살");
		var d = document.getElementById("삼겹살");
		var k = document.getElementById("등심1");
		var e = document.getElementById("안심1");
		var f = document.getElementById("양념돼지갈비");
		var g = document.getElementById("후라이드치킨");		
		var h = document.getElementById("양념치킨");
		var i = document.getElementById("간장치킨");
		var j = document.getElementById("닭강정");



		x.style.color = "salmon";     y.style.color = "salmon"; 
	    z.style.color = "salmon"; 	  a.style.color = "salmon";     b.style.color = "salmon"; 
		c.style.color = "salmon";     g.style.color = "salmon"; 
		d.style.color = "salmon";     h.style.color = "salmon"; 
		e.style.color = "salmon";     i.style.color = "salmon"; 
		f.style.color = "salmon";     j.style.color = "salmon"; 
		k.style.color = "salmon";     
	
	}
	</script>
	<button type="button" onclick="cssChange3()" >위암</button>
	<script>
	function cssChange3() {
		var x = document.getElementById("안심");
		var y = document.getElementById("등심");
		var z = document.getElementById("채끝살");
		var a = document.getElementById("살치살");
		var b = document.getElementById("갈비");
		var c = document.getElementById("목살");
		var d = document.getElementById("삼겹살");
		var e = document.getElementById("안심1");
		var f = document.getElementById("양념돼지갈비");
		var g = document.getElementById("후라이드치킨");		
		var h = document.getElementById("양념치킨");
		var i = document.getElementById("간장치킨");
		var j = document.getElementById("닭강정");
		var k = document.getElementById("등심1");




		x.style.color = "salmon";     y.style.color = "salmon"; 
	    z.style.color = "salmon"; 	  a.style.color = "salmon";     b.style.color = "salmon"; 
		c.style.color = "salmon";     g.style.color = "salmon"; 
		d.style.color = "salmon";     h.style.color = "salmon"; 
		e.style.color = "salmon";     i.style.color = "salmon"; 
		f.style.color = "salmon";     j.style.color = "salmon"; 
		k.style.color = "salmon";   

	
	}
	</script>
	
	<hr size = "5px"></hr>
	
	

								<h3>소</h3>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>메뉴</th>
												<th>양(g)</th>
												<th>칼로리(kcal)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id = "안심">안심</td>
												<td>100</td>
												<td>324</td>
											</tr>											<tr>
												<td id = "등심">등심</td>
												<td>100</td>
												<td>242</td>
											</tr>
											<tr>
												<td id = "채끝살">채끝살</td>
												<td>100</td>
												<td>117</td>
											</tr>
											<tr>
												<td id = "살치살">살치살</td>
												<td>100</td>
												<td>222</td>
											</tr>
											<tr>
												<td id = "갈비">갈비</td>
												<td>100</td>
												<td>258</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
											</tr>
										</tfoot>
									</table>
								</div>
								<h3></h3>
								<h3></h3>
								<h3>돼지</h3>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>메뉴</th>
												<th>양(g)</th>
												<th>칼로리(kcal)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id = "목살">목살</td>
												<td>100</td>
												<td>264</td>
											</tr>											<tr>
												<td id = "등심1">등심</td>
												<td>100</td>
												<td>232</td>
											</tr>
											<tr>
												<td id = "안심1">안심</td>
												<td>100</td>
												<td>223</td>
											</tr>
											<tr>
												<td id = "삼겹살">삼겹살</td>
												<td>100</td>
												<td>518</td>
											</tr>
											<tr>
												<td id = "양념돼지갈비">양념돼지갈비</td>
												<td>100</td>
												<td>240</td>
											</tr>

										</tbody>
										<tfoot>
											<tr>
											</tr>
										</tfoot>
									</table>
								</div>
								<h3></h3>
								<h3></h3>
								<h3>닭</h3>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>메뉴</th>
												<th>양(g)</th>
												<th>칼로리(kcal)</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id = "닭가슴살">닭가슴살</td>
												<td>100</td>
												<td>165</td>
											</tr>											<tr>
												<td id = "후라이드치킨">후라이드치킨</td>
												<td>100</td>
												<td>289</td>
											</tr>
											<tr>
												<td id = "양념치킨">양념치킨</td>
												<td>100</td>
												<td>308</td>
											</tr>
											<tr>
												<td id = "간장치킨">간장치킨</td>
												<td>100</td>
												<td>276</td>
											</tr>
											<tr>
												<td id = "닭강정">닭강정</td>
												<td>100</td>
												<td>265</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
											</tr>
										</tfoot>
									</table>
								</div>

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





<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>




</html>