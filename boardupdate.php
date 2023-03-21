<!DOCTYPE html>
<html>
<head><!-- head 태그 시작 -->
<!--<title>공돌이광식</title>-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1"/> 원래-->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

      <style type="text/css">/* 스타일 태그 시작 */
<?php
// 내용 유형 : text/html , 문자셋팅 : utf-8
header("Content-Type: text/html; charset=UTF-8");
//세션 시작
session_start();
//db.php 내용 포함
include 'db.php';
//게시물 번호
$boardnum = $_GET['x'];
//게시물 번호로 부터 게시판 정보를 불러들임
$sql = "select *from board where boardnum='$boardnum'";
$res = $conn->query($sql);
$row=mysqli_fetch_array($res);
//아이디 값이 일치하지 않을 경우 게시판 페이지로 이동시킴
if(!(isset($_SESSION['id']) && isset($_SESSION['username']))) { 
echo "<script>location.href='board.php';</script>";
}
if($_SESSION['id'] != $row['userid']) { 
echo "<script>location.href='board.php';</script>";
}
?>
/* img태그 요소의 최대 너비는 100% */
img {
max-width:100%;
}
/* mp3클래스를 적용한 iframe태그 요소의 최대 너비는 100% */
iframe.mp3 {
max-width:100%;
}
/* mp4클래스를 적용한 iframe태그 요소의 최대 너비는 100% */
iframe.mp4 {
max-width:100%;
}
/* jl아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 j.png이미지의 위치는 (0,0), 왼쪽 유동 */
#jl {
   width : 30px;
   height : 30px;
   background: url("왼쪽정렬.png") 3px 1.5px;
   float:left;
}
/* jc아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 j.png이미지의 위치는 (-20px,0), 왼쪽 유동 */
#jc {
   width : 20px;
   height : 30px;
   background: url("가운데정렬.png") 4px 1px;
   float:left;
}
/* jr아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 j.png이미지의 위치는 (-40px,0), 왼쪽 유동 */
#jr {
   width : 20px;
   height : 30px;
   background: url("오른쪽정렬.png") 3px 0.5px;
   float:left;
}
/* jf아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 j.png이미지의 위치는 (-60px,0), 왼쪽 유동 */
#jf {
   width : 20px;
   height : 30px;
   background: url("양쪽정렬.png") 3.5px 2px;
   float:left;
}
/* io아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 i.png이미지의 위치는 (0,0), 왼쪽 유동 */
#io {
   width : 20px;
   height : 30px;
   background: url("번호양식.png") 3.5px 2px;
   float:left;
}
/* iu아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 i.png이미지의 위치는 (-20px,0), 왼쪽 유동 */
#iu {
   width : 20px;
   height : 30px;
   background: url("bullet양식.png") 3.5px 2.5px;
   float:left;
}
/* id아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 i.png이미지의 위치는 (-40px,0), 왼쪽 유동 */
#id {
   width : 20px;
   height : 30px;
   background: url("들여쓰기.png") 3.5px 2.5px;
   float:left;
}
/* od아이디가 적용된 요소의 너비는 20px, 높이는 20px, 배치된 i.png이미지의 위치는 (-60px,0), 왼쪽 유동 */
#od {
   width : 20px;
   height : 30px;
       background: url("내어쓰기.png") 3.5px 2.5px;
       float:left;
}


/* button 요소의 테두리를 없앤다. */
button {
border:none;
}
/* input 요소의 테두리를 없앤다. */
input {
border:none;
}
/* style1 클래스를 사용하는 요소의 너비와 높이는 각각 20px, 배경 없음, 왼쪽 유동 */
.style1 {
width:20px; height:35px; background:none;
float:left;
}
/* style2 클래스를 사용하는 요소의 너비는 32px, 높이는 20px, 배경 없음, 왼쪽 유동 */
.style2 {
width:20px; height:35px; background:none;
float:left;
}
/* 모든 태그에 대해서 테두리 상자를 포함해서 상자 크기가 변경되도록 설정 */
* {
    box-sizing:border-box;
}
/* header의 요소에 대해서 윗 여백 0px, 안쪽 여백 15px, 너비 100%, 높이 100px,
배경 검정, 텍스트 가운데 정렬, 글꼴 적용 */


</style>
</head>

<!--<body> 원래 body-->
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
		<li><a href="건강한생활습관.html">건강한 생활습관</a></li>
		<li><a href="홈트레이닝.html">홈 트레이닝</a></li>
        </ul>
    </nav>

<!-- Main -->
<div id="main">

      <div class="inner">
         <!--<h1>JOIN</h1>-->
         <header class='form-header'><!--🎈📖📚🖋💡📝-->
            <h1>BOARD💡</h1>
            <div style="position:absolute; top:10px; left:10px; border:none; background:white; color:black;">
                <h3 id="status1"></h3>
                <p id="loaded_n_total1"></p>
               <progress id="progressBar1" value="0" max="100" style="display:none; width:300px;"></progress>
            </div>
         </header>

<!--<header><a href="/main.php">공돌이 광식의 홈페이지</a>-->

<!--<nav>
<div class="menu_img" id="mic" onclick="menu_img_click()"></div>
<?php if(!isset($_SESSION['id'])){ ?>
<a href="join.html" style="float:right; margin-left:10px;">회원가입</a>
<a href="login.html" style="float:right">로그인</a>
<?php } ?>
<?php if(isset($_SESSION['id'])){ ?>
<a href="logout.php" style="float:right">로그아웃</a>
<a href="joinedit.php" style="float:right;">회원정보수정</a>
<?php } ?>
</nav>-->
<!--<div id="contents" style="margin-top:0; border:1px solid; position:absolute; z-index:1; background:black;"><a href="board.php" style="color:white; font-size:20px;"><b>게시판</b></a></div>-->
<input type="hidden" id="c" value="">
<textarea id="title" style="border:3px solid; width:100%; resize:none;" placeholder="제목을 작성하세요. 300자 이내" maxLength = "300"><?php echo $row['boardtitle'];?></textarea><br>
<fieldset style=" margin:0; padding:0;">
<legend><b>도구 모음📌</b></legend>
<span style="position:relative; float:left;">

</span>
<span style="margin-top:5px; position:relative; float:left;">
<select id="choice" style="border:none; width:100px; height:30px;" onchange="fontSize(this.value)" title="선택한 영역의 글꼴 크기를 변경합니다.">
  <option value="1">매우 작음</option>
  <option value="2">작음</option>
  <option value="3">조금 작음</option>
  <option value="4" selected>보통</option>
  <option value="5">조금 큼</option>
  <option value="6">큼</option>
  <option value="7">매우 큼</option>
</select>
</span>
<button onclick="bold()"  style="margin-left: 3px;" class= "small button" class="po1 style1" title="선택한 영역의 글꼴을 굵게 만듭니다."><b>B</b></button> 
<button onclick="italic()" class= "small button"class="po1 style1" title="선택한 영역의 글꼴을 이탤릭체로 만듭니다."><i>I</i></button>
<button onclick="underline()" class= "small button"class="style1" style="text-decoration: underline;" title="선택한 영역의 글꼴에 밑줄을 긋습니다.">U</button>
<button onclick="Strikethrough()" class= "small button"class="style1" style="text-decoration: line-through;" title="선택한 영역의 글꼴에 취소선을 긋습니다.">S</button>
<button onclick="sub()" class= "small button"class="style2" title="선택한 영역의 글꼴을 아래 첨자로 만듭니다.">T<sub>sub</sub></button>
<button onclick="sup()" class= "small button"class="style2" title="선택한 영역의 글꼴을 위 첨자로 만듭니다.">T<sup>sup</sup></button>
<input type="color" style="float:left; width:30px; margin-top: 5px; height:30px; background:#FBEFF2;" title="선택한  영역의 글꼴의 색상을 변경합니다." onchange="fontColor(this.value)">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="justifyleft()" id="jl" width="1" height="1" title="선택한  영역의 글꼴을 왼쪽으로 정렬합니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="justifycenter()" id="jc" width="1" height="1" title="선택한  영역의 글꼴을 가운데로 정렬합니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="justifyright()" id="jr" width="1" height="1" title="선택한  영역의 글꼴을 오른쪽으로 정렬합니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="justifyfull()" id="jf" width="1" height="1" title="선택한  영역의 글꼴을 양쪽으로 정렬합니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="insertOrderedList()" id="io" width="1" height="1" title="선택한  영역의 글꼴에 번호를 매깁니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="insertUnorderedList()" id="iu" width="1" height="1" title="선택한  영역의 글꼴에 bullet을 매깁니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="outdent()" id="od" width="1" height="1" title="선택한  영역의 글꼴을 내어쓰기합니다.">
<input type="button"  style="margin-top: 5px; margin-left: 3px;" class= "small button" onclick="indent()" id="id" width="1" height="1" title="선택한  영역의 글꼴을 들여쓰기합니다.">

<form style="float:right; margin-right:340px; margin-top:5px; position:relative; width:30px; height:50px;" enctype="multipart/form-data" method="post">
  <input type="file"  style="width:20px; height:20px; opacity:0;" name="file1" id="file1" multiple="multiple" title="문단 맨 마지막에 미디어 파일(mp3/mp4 300MB 이내/이미지 10MB이내)을 삽입합니다." onchange="upload()"><br> 
  <div style="width:30px; margin-right:100px; height:20px; position:absolute; z-index:-1; top:0;"><h2>📸</h2></div>
</form>
<form style="float:right; margin-left:340px; margin-top:-35px; position:relative; width:30px; height:50px;" enctype="multipart/form-data" method="post">
  <input type="file"  style="width:20px; height:20px; opacity:0;" name="file2" id="file2" multiple="multiple" title="zip 또는 egg 확장자를 지닌 파일을 첨부합니다." onchange="upload2()"><br> 
  <div style="width:30px; height:30px; position:absolute; z-index:-1; top:0;"><h2>📁</h2></div>  
</form>

<script>
function upload() {
//upload함수 실행

function _(id){
//document.getElementById를 
   return document.getElementById(id);
}
var num = 0;
var file = _("file1").files[num];
if(file == null) {
return false;
}
var a = "loaded_n_total1"; 
var b = "progressBar1";
var c = "status1";
document.getElementById("file1").disabled = true;
document.getElementById("file2").disabled = true;
uploadFile(file);
function uploadFile(file){
   _(b).style.display = "block";
   var formdata = new FormData();
   formdata.append("file1", file);
   formdata.append("userid", "<?php echo $_SESSION['id']; ?>");
   formdata.append("starttime", "<?php echo $row['starttime']; ?>");
   var ajax = new XMLHttpRequest();
   ajax.upload.addEventListener("progress", progressHandler, false);
   ajax.addEventListener("load", completeHandler, false);
   ajax.addEventListener("error", errorHandler, false);
   ajax.addEventListener("abort", abortHandler, false);
   ajax.open("POST", "upload.php");
   ajax.send(formdata);
}

function progressHandler(event){
   _(a).innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
   var percent = (event.loaded / event.total) * 100;
   _(b).value = Math.round(percent);
   _(c).innerHTML = (num+1)+"번째 파일이"+Math.round(percent)+"% 업로드 중입니다."+"업로드 대기 중인 파일은 "+(_("file1").files.length-(num+1))+"개 입니다.";
}

function completeHandler(event){
   _(b).style.display = "none";
   if(event.target.responseText != "업로드 실패"
   &&event.target.responseText != "선택한 파일이 없습니다."
   &&event.target.responseText != "업로드 할 수 없는 형식의 파일입니다."
   &&event.target.responseText != "첨부할 수 있는 최대 용량은 10MB입니다."
   &&event.target.responseText != "첨부할 수 있는 최대 용량은 300MB입니다.") {
   document.getElementById("editor").focus();
   _("editor").innerHTML += event.target.responseText;
   document.getElementById("editor").focus();
   }
   _(b).value = 0;
   num++;
   file = _("file1").files[num];
   if(num< _("file1").files.length) {
   uploadFile(file);
   }
   if(num == _("file1").files.length) {
   if(event.target.responseText == "업로드 실패"
   ||event.target.responseText == "선택한 파일이 없습니다."
   ||event.target.responseText == "업로드 할 수 없는 형식의 파일입니다."
   ||event.target.responseText == "첨부할 수 있는 최대 용량은 10MB입니다."
   ||event.target.responseText == "첨부할 수 있는 최대 용량은 300MB입니다.") {
   alert(event.target.responseText);
   } else {
   alert("업로드 성공!");
   }
   _(a).innerHTML = "";
   _(c).innerHTML = "";
   _("file1").disabled = false;
   _("file2").disabled = false;
   }
}
function errorHandler(event){
   alert("업로드를 실패하였습니다!");
   _(a).innerHTML = "";
   _(c).innerHTML = "";
   _(b).style.display = "none";
   _("file1").disabled = false;
   _("file2").disabled = false;
}
function abortHandler(event){
   alert("업로드가 중단되었습니다!");
   _(a).innerHTML = "";
   _(c).innerHTML = "";
   _(b).style.display = "none";
   _("file1").disabled = false;
   _("file2").disabled = false;
}
}

function upload2() {
//upload함수 실행

function _(id){
//document.getElementById를 
   return document.getElementById(id);
}
var num = 0;
var file = _("file2").files[num];
if(file == null) {
return false;
}
var a = "loaded_n_total1"; 
var b = "progressBar1";
var c = "status1";
document.getElementById("file1").disabled = true;
document.getElementById("file2").disabled = true;
uploadFile(file);
function uploadFile(file){
   _(b).style.display = "block";
   var formdata = new FormData();
   formdata.append("file2", file);
   formdata.append("userid", "<?php echo $_SESSION['id']; ?>");
   formdata.append("starttime", "<?php echo $row['starttime']; ?>");
   var ajax = new XMLHttpRequest();
   ajax.upload.addEventListener("progress", progressHandler, false);
   ajax.addEventListener("load", completeHandler, false);
   ajax.addEventListener("error", errorHandler, false);
   ajax.addEventListener("abort", abortHandler, false);
   ajax.open("POST", "upload2.php");
   ajax.send(formdata);
}
function progressHandler(event){
   _(a).innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
   var percent = (event.loaded / event.total) * 100;
   _(b).value = Math.round(percent);
   _(c).innerHTML = (num+1)+"번째 파일이"+Math.round(percent)+"% 업로드 중입니다."+"업로드 대기 중인 파일은 "+(_("file1").files.length-(num+1))+"개 입니다.";
}
function completeHandler(event){
   _(b).style.display = "none";
   if(event.target.responseText != "업로드 실패"
   &&event.target.responseText != "선택한 파일이 없습니다."
   &&event.target.responseText != "업로드 할 수 없는 형식의 파일입니다."
   &&event.target.responseText != "첨부할 수 있는 최대 용량은 1GB입니다.") {
   _("filelist").innerHTML += event.target.responseText;
   document.getElementById("editor").focus();
   }
   _(b).value = 0;
   num++;
   file = _("file2").files[num];
   if(num< _("file2").files.length) {
   uploadFile(file);
   }
   if(num == _("file2").files.length) {
   if(event.target.responseText == "업로드 실패"
   ||event.target.responseText == "선택한 파일이 없습니다."
   ||event.target.responseText == "업로드 할 수 없는 형식의 파일입니다."
   ||event.target.responseText == "첨부할 수 있는 최대 용량은 1GB입니다.") {
   alert(event.target.responseText);
   } else {
   alert("업로드 성공!");
   }
   _(a).innerHTML = "";
   _(c).innerHTML = "";
   _("file1").disabled = false;
   _("file2").disabled = false;
   }
}
function errorHandler(event){
   alert("업로드를 실패하였습니다!");
   _(a).innerHTML = "";
   _(c).innerHTML = "";
   _(b).style.display = "none";
   _("file1").disabled = false;
   _("file2").disabled = false;
}
function abortHandler(event){
   alert("업로드가 중단되었습니다!");
   _(a).innerHTML = "";
   _(c).innerHTML = "";
   _(b).style.display = "none";
   _("file1").disabled = false;
   _("file2").disabled = false;
}
}
</script>

</fieldset>
<div id="editor" contentEditable="true"><?php echo str_replace("＃","#",str_replace("＝","=",str_replace("＆","&",$row["boardcontent"]))); ?></div>
<fieldset>
<legend><b>업로드 파일 목록📋</b></legend>
<div id="filelist" style="width:100%; height:100px; border:2px solid; overflow:auto;">
<?php 
$sql2 = "select *from boarduploadfile where starttime='".$row['starttime']."' and userid='".$row['userid']."' and type='F'"; //게시판 내용 불러오기
$res2 = $conn->query($sql2);//게시판 내용 불러오기
while($row2=mysqli_fetch_array($res2)) {
echo "<a href='download.php?filepath=".$row2['realname']."&filename=".$row2['fakename']."'>".$row2['fakename']."</a>
   <a style='float:right;' href='delete.php?filename=".$row2['realname']."&starttime=".$row['starttime']."' target='delete'>삭제</a><br>"; 
}
?>
</div>
</fieldset>
<iframe style="display:none;" name="delete"></iframe>
<?php if((isset($_SESSION['id']) && isset($_SESSION['username']))) { ?>
    <button class="button primary icon solid fa-upload" onclick="apply()" style="float:right; margin-top: 10px;">게시글 수정</button>
<?php } ?> 

</div></div>

<!--<footer>&copy; 2019 by 공돌이광식</footer>-->
<br><br>
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
<!-- footer의 div--></div>

<script>
function apply() { //apply() 함수
   var x1 = document.getElementById("title").value.replace(/\+/,"＋").replace(/#/g,"＃").replace(/&/g,"＆").replace(/=/g,"＝")
   .replace(/\\/g,"＼");
   var x2 = document.getElementById("editor").innerHTML.replace(/\+/,"＋").replace(/#/g,"＃").replace(/&/g,"＆").replace(/=/g,"＝")
   .replace(/\\/g,"＼");
   var x3 = "<?php echo $_SESSION['id'] ?>";
   var x4 = "<?php echo $_SESSION['username'] ?>";
   var files = document.getElementById("filelist").innerHTML.replace(/\+/,"＋").replace(/#/g,"＃").replace(/&/g,"＆").replace(/=/g,"＝")
   .replace(/\\/g,"＼");
     
     var obj, dbParam, xmlhttp; //obj, dbParam, xmlhttp 라는 이름을 지닌 변수
     obj = {"table":"board","boardnum":<?php echo $row['boardnum']; ?>,"boardtitle":x1,"boardcontent":x2,"filelists":files,"userid":x3,"username":x4,"starttime":<?php echo $row['starttime']; ?>};
   //obj에 자바스크립트 객체 값을 저장함
     dbParam = JSON.stringify(obj);
   //dbParam에 obj에 담긴 자바스크립트 객체의 값을 JSON형식의 문자열로 저장함.
     xmlhttp = new XMLHttpRequest(); //서버에 데이터를 요청한 값을 xmlhttp변수에 저장함
     xmlhttp.onreadystatechange = function() {
         //onreadystatechange는 xmlhttpRequest 객체의 상태가 변할 때마다 자동으로 호출할 함수를 저장함
        if (this.readyState == 4 && this.status == 200) {//readyState 값이 4이고, status값이 200이라면 if문 안에 있는 내용을 실행함
          myObj = JSON.parse(this.responseText);//응답받은 JSON형식의 문자열을  자바스크립트 객체 값으로 myObj에 저장
          for (x in myObj) { //myObj에 저장한 자바스크립트 객체의 배열의 길이 값만큼 반복한다.
               if(myObj[x] == '1') {
                  location.href='board.php';
                  return false;
               } else {
                  alert("업로드 실패!");
               }
            } //for (x in myObj)에 관한 for문 종료
        }
      };
     if ((x1.trim() == "")||(x2.trim() == "<br>")||(x2.trim() == "")) { //x1 또는 x2의 값이 빈 값이라면
       alert("입력된 텍스트가 없습니다."); //입력된 텍스트가 없다는 알림창을 띄운다.
       return false; //return false를 한다.
     } else { //x1 과 x2의 값이 모두 빈 값이 아니라면
        document.getElementById("editor").innerHTML = "";
        //editor 아이디를 가진 요소의 값은 없다.
        xmlhttp.open("POST", "boardupdateapply.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("x=" + dbParam); 
     }
   }
   
function fontSize(size) {
   document.getElementById("editor").focus();
   document.execCommand("fontSize", false, size);
   document.getElementById("editor").focus();
}
//

//
function fontColor(fontcolors) {
   document.getElementById("editor").focus();
   document.execCommand( "foreColor", false, fontcolors);
   document.getElementById("editor").focus();
}
//
function underline() {
   document.getElementById("editor").focus();
   document.execCommand("underline");
   document.getElementById("editor").focus();
}
//
function Strikethrough() {
   document.getElementById("editor").focus();
   document.execCommand("Strikethrough");
   document.getElementById("editor").focus();
}
//
function bold() {
   document.getElementById("editor").focus();
   document.execCommand("bold");
   document.getElementById("editor").focus();
}
//
function italic() {
   document.getElementById("editor").focus();
   document.execCommand("italic");
   document.getElementById("editor").focus();
}
//
function sub() {
   document.getElementById("editor").focus();
   document.execCommand("subscript");
   document.getElementById("editor").focus();
}
//
function sup() {
   document.getElementById("editor").focus();
   document.execCommand("superscript");
   document.getElementById("editor").focus();
}
//
function justifyleft() {
   document.getElementById("editor").focus();
   document.execCommand("justifyleft");
   document.getElementById("editor").focus();
}
//
function justifycenter() {
   document.getElementById("editor").focus();
   document.execCommand("justifycenter");
   document.getElementById("editor").focus();
}
//
function justifyright() {
   document.getElementById("editor").focus();
   document.execCommand("justifyright");
   document.getElementById("editor").focus();
}
//
function justifyfull() {
   document.getElementById("editor").focus();
   document.execCommand("justifyfull");
   document.getElementById("editor").focus();
}
//
function insertOrderedList() {
   document.getElementById("editor").focus();
   document.execCommand("insertOrderedList");
   document.getElementById("editor").focus();
}
//
function insertUnorderedList() {
   document.getElementById("editor").focus();
   document.execCommand("insertUnorderedList"); 
   document.getElementById("editor").focus();
}
//
function indent() {
   document.getElementById("editor").focus();
   document.execCommand("indent");
   document.getElementById("editor").focus();
}
//
function outdent() {
   document.getElementById("editor").focus();
   document.execCommand("outdent");
   document.getElementById("editor").focus();
}
//
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