<?php 
header("Content-Type: text/html; charset=UTF-8"); 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<title>Insert title here</title>
        <title>Generic - Phantom by HTML5 UP</title> 나중에 넣을 것-->
        <meta charset="UTF-8" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1"/> 원래-->
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
                            <!--<li><a href="main.php">공돌이광식</a></li>-->
                            <!--<li><a href="join.html" style="float:right; margin-left:10px;">MEMBER INFO</a></li>
                            <li><a href="main.php" style="float:right">LOGOUT</a></li>-->
                            <li><a href="board.php" style="color:; "><b>BOARD</b></a></li>
                            <!--<div class="menu_img" id="mic" onclick="menu_img_click()"></div>
<?php if(!isset($_SESSION['id'])){ ?>
<li><a href="join.html" style="float:right; margin-left:10px;">JOIN</a></li>
<li><a href="login.html" style="float:right">LOGIN</a></li>
<?php } ?>
<?php if(isset($_SESSION['id'])){ ?>-->
<li><a href="logout.php" style="float:right;">LOGOUT</a></li>
<!--<li><a href="joinedit.php" style="float:right;">MEMBER-INFO</a></li>-->
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
		<li><a href="건강한생활습관.html">건강한 생활습관</a></li>
		<li><a href="홈트레이닝.html">홈 트레이닝</a></li>
        </ul>
    </nav>

<div id="main">

		<div class="inner">
			<!--<h1>JOIN</h1>-->
			<header class='form-header'><!--🎈-->
				<h1>MEMBER-INFO &nbsp;&nbsp;💌</h1>
				<p>Change&nbsp;&nbsp;a&nbsp;&nbsp;Your&nbsp;&nbsp;Information >></p>
			</header>


<nav>
<!--<a href="main.php">공돌이광식</a>
<a href="logout.php" style="float:right;">LOGOUT</a>-->
<?php 
include 'db.php'; 
if(!(isset($_SESSION['id'])&&isset($_SESSION['username']))) {
echo "<script>location.href='/main.php';</script>";
}
$sql = "select *from member where id='".$_SESSION['id']."' and name='".$_SESSION['username']."'";
$res = $conn->query($sql);
$row = mysqli_fetch_array($res);
?>
</nav>
<div>
<form method="post" action="/joindbupdate.php">
<label>PASSWORD<br><span id="pc1"></span></label>
<input class="text" id="p1" name="password" type="password" onkeyup="passwordcheck(this.value)" placeholder="영문,숫자,특수문자를 포함한  8~20자리" maxlength="20">
<p></p>
<label>PASSWORD&nbsp;&nbsp;CHECK<br><span id="pc2"></span></label>
<input class="text" id="p2" name="password2" type="password" onkeyup="passwordcheck2(this.value)" maxlength="20">
<input type="hidden" id="h" name="hidden" value="">
<p></p>
<label>WEIGHT</label><span id="test3"></span>
<input class="text" type="text" id="w" name="weight" placeholder="숫자만 입력 허용" maxlength="3" value="<?php echo $row['weight'];?>">
<input type="hidden" id="h6" name="hidden6" value="">
<p></p>
<label>ADDRESS</label>
<input class="text" type="text" id="a" name="address" onkeyup="addresscheck()" placeholder="한글,영문,숫자,특수기호  (-),(_),(,),(@)만 입력 허용 입력 허용" maxlength="139" value="<?php echo $row['address'];?>">
<p></p>
<label>PHONE&nbsp;&nbsp;NUMBER&nbsp;&nbsp;(ex:01020190000)</label><span id="test2"></span>
<input class="text" type="text" id="nb" name="number" onkeyup="numbercheck(this.value)" placeholder="숫자만 입력 허용" maxlength="11" value="<?php echo $row['number'];?>">
<input type="hidden" id="h3" name="hidden3" value="1">
<p></p>
<label>E-MAIL<br><span id="ec"></span></label>
<input class="text" type="email" id="e" name="email" onkeyup="emailaddress(this.value)" placeholder="입력이 허용되는 특수문자는 (@),(_),(-),(.)입니다." maxlength="100" value="<?php echo $row['email'];?>">
<input type="hidden" id="h4" name="hidden4" value="1">
<input type="submit" style='margin-top:10px;' value="SUBMIT">
</form>
</div>
</div></div>
<!--<footer>&copy; 2019 by 공돌이광식</footer>-->
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
function addresscheck() {
   document.getElementById("a").value = document.getElementById("a").value.replace(/[^ㄱ-ㅎㅏ-ㅣ가-힣a-zA-Z0-9, .@_-]/g,"");
}

function emailaddress(e) {
document.getElementById("e").value = document.getElementById("e").value.replace(/[^0-9a-zA-Z@_.-]/g,"");
var emailvalue = /^[0-9a-zA-Z-_.]([-_.]?[0-9a-zA-Z-_.])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;//이메일 정규식
if(emailvalue.test(e)==false) {
   document.getElementById("ec").innerHTML = "입력이 허용되는 특수문자는 (@),(_),(-),(.)입니다.";
   document.getElementById("h4").value = "";
            return false;
} else {
   document.getElementById("ec").innerHTML = "";
   document.getElementById("h4").value = "1";
}
}

function passwordcheck(pw) {
   var pwc = document.getElementById("p1").value.replace(/(\s*)/g,"");
   document.getElementById("p1").value = pwc;
   var num = pw.search(/[0-9]/g);
   var eng = pw.search(/[a-z]/ig);
   var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
      if(document.getElementById("p1").value.length < 8) { //8자리 이하일 경우
         document.getElementById("pc1").innerHTML = "영문, 숫자, 특수문자를 포함한  8자리 이상 입력하세요.";
         document.getElementById("pc2").innerHTML = "";
         document.getElementById("h").value = "";
         return false;
      } else { //8자리 이상일 경우
         if((eng >= 0) &&  (num >= 0) && (spe >= 0)){ //영문,숫자,특수문자를 포함하고 있을 경우
            document.getElementById("pc1").innerHTML = "";
            if((document.getElementById("p1").value == document.getElementById("p2").value)) {
               document.getElementById("pc2").innerHTML = "비밀번호가 확인되었습니다.";
               document.getElementById("h").value = "1";
            } else {
               document.getElementById("pc2").innerHTML = "";
               document.getElementById("h").value = "";
            }
         } else { //영문,숫자,특수 문자 중 하나라도 포함하지 않고 있을 경우
            document.getElementById("pc1").innerHTML = "영문, 숫자, 특수문자를 포함한  8자리 이상 입력하세요.";
            document.getElementById("pc2").innerHTML = "";
            document.getElementById("h").value = "";
            return false;
         }
      }
}

function passwordcheck2(pw) {
   var pwc = document.getElementById("p2").value.replace(/(\s*)/g,"");
   document.getElementById("p2").value = pwc;
   var num = pw.search(/[0-9]/g);
   var eng = pw.search(/[a-z]/ig);
   var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);
   if(document.getElementById("p1").value == document.getElementById("p2").value) { //p1과 p2의 값이 같을 경우
      if(((eng >= 0) &&  (num >= 0) && (spe >= 0))&&(document.getElementById("p2").value.length >= 8)) { //특수문자가 포함이 되어 있고, 길이가 8이상이라면
         document.getElementById("pc2").innerHTML = "비밀번호가 확인되었습니다.";
         document.getElementById("h").value = "1";
      } else { //다른 경우라면
         document.getElementById("pc2").innerHTML = "";
         document.getElementById("h").value = "";
         return false;
      }
   } else { //다른 경우라면
      document.getElementById("pc2").innerHTML = "";
      document.getElementById("h").value = "";
   }
}   

function numbercheck(nb) {
   var numbervalue = /^(0[1][0-1][0-9]{7,8})$/;
   if(numbervalue.test(nb)) {
      document.getElementById("test2").innerHTML = "";
      document.getElementById("h3").value = "1";
   } else {
      document.getElementById("test2").innerHTML = "예) 01020190000";
      document.getElementById("h3").value = "";
   }
   document.getElementById("nb").value = document.getElementById("nb").value.replace(/[^0-9]/g,"");
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