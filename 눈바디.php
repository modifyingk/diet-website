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
      <title>눈바디</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
   </head>


   <head>
      <meta charset="utf-8">
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
               </nav>

            <!-- Main -->

            <div id="main">
                  <div class="inner">
                     <h1>눈바디👀</h1>
                     <p><b>사진을 선택</b>하여 자신의 <b>눈바디를 비교</b>해보세요. <b>카메라를 이용해 캡쳐</b>하면 현재의 눈바디와 과거의 눈바디를 비교할 수도 있어요.
                         <br>카메라를 이용해 <b>캡쳐할 때에는</b> 되도록 <b>가운데</b>에 서주세요. 사진은 저장되지 않으니 안심하세요 !</p>
                     
                     <ul class="actions fit">
                     <button type="button" style = "margin-left:20px;  margin-top:100px;" id="webcamBtn">캡쳐하기</button> </ul>
                     <video id="video" width="400" height="400" autoplay></video> 
  
                     <ul class="actions fit">
                     <body>
                     <form action="eyebody.php" method="post" enctype="multipart/form-data" target="eyebody">
                        <input type="file" name="file1" multiple='multiple' >
                        <input type="submit">
                        <iframe name="eyebody" width="700px" height="700px"></iframe><br>
                     </form>
                     <canvas id="canvas" width="700px" height="700px"></canvas>
                     </ul>
   
                     <ul class="actions fit">
                     <form action="eyebody2.php" method="post" enctype="multipart/form-data" target="eyebody2">
                        <input type="file" name="file2" multiple='multiple' >
                        <input type="submit">
                        <iframe name="eyebody2" width="700px" height="700px"></iframe><br>
                        
                     </form>
                     <form action="eyebody3.php" method="post" enctype="multipart/form-data" target="eyebody3">
                        <input type="file" name="file3" multiple='multiple' >
                        <input type="submit">
                        <iframe name="eyebody3" width="700px" height="700px"></iframe><br>
                     </form></ul>
                     
<script>
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
   navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
      var video = document.getElementById('video');
      video.srcObject = stream;
      video.play();
   });
}

var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');
document.getElementById("webcamBtn").addEventListener("click",function() {
   context.drawImage(video,185,45,500,600);
});
</script>
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