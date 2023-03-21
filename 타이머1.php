<?php 
//text 및 html 유형 utf-8로 인코딩
header("Content-Type: text/html; charset=UTF-8"); 
//세션 시작
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>수면관리</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

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
<style type="text/css">

body


#jsalarmclock{
font-family: Tahoma;
font-weight: bold;
font-size: 15px;
}

#jsalarmclock div{
margin-bottom: 0.8em;
}

#jsalarmclock div.leftcolumn{
float: left;
width: 150px;
font-size: 15px;
clear: left;
}

#jsalarmclock span{
margin-right: 5px;
}

.button_menu {
  width: 150px;
  height: 50px;
  background-color: buttonface;
  border: 1px solid red;
  border-radius: 15px;
  color: blue;
  font-size:20px;
}

.select_menu {
  width: 100px;
  height: 28px;
  background-color: buttonface;
  border: 1px solid red;
  border-radius: 10px;
  color: red;
}

.text_menu {
 width: 400px;
  height: 28px;
  background-color: buttonface;
  border: 1px solid red;
  border-radius: 10px;
  color: blue;
}

</style>
<script type="text/javascript">
var jsalarm={
	padfield:function(f){
		return (f<10)? "0"+f : f
	},
	showcurrenttime:function(){
		var dateobj=new Date()
		var ct=this.padfield(dateobj.getHours())+":"+this.padfield(dateobj.getMinutes())+":"+this.padfield(dateobj.getSeconds())
		this.ctref.innerHTML=ct
		this.ctref.setAttribute("title", ct)
		if (typeof this.hourwake!="undefined"){ //if alarm is set
			if (this.ctref.title==(this.hourwake+":"+this.minutewake+":"+this.secondwake)){
				clearInterval(jsalarm.timer)
				window.location=document.getElementById("musicloc").value
			}
		}
	},
	init:function(){
		var dateobj=new Date()
		this.ctref=document.getElementById("alarm_alarm")
		this.submitref=document.getElementById("submit_submit")
		this.submitref.onclick=function(){
			jsalarm.setalarm()
			this.value="Alarm Set"
			this.disabled=true
			return false
		}
		this.resetref=document.getElementById("reset_reset")
		this.resetref.onclick=function(){
		jsalarm.submitref.disabled=false
		jsalarm.hourwake=undefined
		jsalarm.hourselect.disabled=false
		jsalarm.minuteselect.disabled=false
		jsalarm.secondselect.disabled=false
		return false
		}
		var selections=document.getElementsByTagName("select")
		this.hourselect=selections[0]
		this.minuteselect=selections[1]
		this.secondselect=selections[2]
		for (var i=0; i<60; i++){
			if (i<24) //If still within range of hours field: 0-23
			this.hourselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getHours()==i)
			this.minuteselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getMinutes()==i)
			this.secondselect[i]=new Option(this.padfield(i), this.padfield(i), false, dateobj.getSeconds()==i)
		}
		jsalarm.showcurrenttime()
		jsalarm.timer=setInterval(function(){jsalarm.showcurrenttime()}, 1000)
	},
	setalarm:function(){
		this.hourwake=this.hourselect.options[this.hourselect.selectedIndex].value
		this.minutewake=this.minuteselect.options[this.minuteselect.selectedIndex].value
		this.secondwake=this.secondselect.options[this.secondselect.selectedIndex].value
		this.hourselect.disabled=true
		this.minuteselect.disabled=true
		this.secondselect.disabled=true
	}
}
</script>

</style>

</head>

<body>

<form action="" method="">
<div id="jsalarmclock">

	<div>
	<div class="leftcolumn">현재 시각:</div> 
	<span id="alarm_alarm" style="letter-spacing: 2px"></span>
	</div>
	
	<div>
	<div class="leftcolumn">알람 설정:</div> 
	<span><select class="select_menu"></select> Hour</span> 
	<div class="leftcolumn"></div> 
	<span><select class="select_menu"></select> Minutes</span> 
	<div class="leftcolumn"></div> 
	<span><div class="leftcolumn"></div> 
	<select class="select_menu"></select> Seconds</span>
	<div class="leftcolumn"></div> 
	</div>
	
	<div>
	<div class="leftcolumn">Set Alarm Action:</div> 
	<input type="text" class="text_menu" id="musicloc" size="55" value="https://www.youtube.com/results?search_query=%EC%88%98%EB%A9%B4%EA%B4%80%EB%A6%AC" /> 
	<span style="font: normal 11px Tahoma">
	<p style="  margin-left: 150px; color: blue; font-size: 15px; font-weight: bold;"></p>
	</span>
	</div>
	
	<input type="submit" class="button_menu" value="Set Alarm!" id="submit_submit" /> 
	<input type="reset" class="button_menu" value="reset" id="reset_reset" />

</div>
</form>
</body>
</div>
</div>

<script type="text/javascript">
jsalarm.init()
</script>



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

</body>
</html>
