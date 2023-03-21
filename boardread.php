<!DOCTYPE html>
<html>

<?php
ob_start() ;
header("Content-Type: text/html; charset=UTF-8"); 
session_start();
?>

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
                     <li><a href="건강한생활습관.php">건강한 생활습관</a></li>
                     <li><a href="홈트레이닝.php">홈 트레이닝</a></li>
      
        </ul>
    </nav>



<div id="main">

      <div class="inner">
         <!--<h1>JOIN</h1>-->
            <header class='form-header'><!--🎈💡-->
            <h1>BOARD📝</h1>
         </header>

<input type="hidden" id="c" value="">
<?php 
include 'db.php';
if(isset($_GET['x'])){
    $boardnum = $_GET['x'];
}else{
    echo "<script>location.href='/board.php'</script>"; //x값이 존재하지 않는 게시물의 값일 경우 board.php로 강제 이동
}
$cookie_name = $boardnum; //쿠키 이름은 게시판 번호로 넣어준다.
$cookie_value = "1"; //쿠기 값으로 넣어준다.
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 1일 동안 쿠키를 유지하도록 해준다.
if(!isset($_COOKIE[$cookie_name])) { //쿠키가 삭제되지 않는 이상 조회수는 첫 조회시만 1 증가시켜준다.
    $sql2 = "UPDATE board set hit=hit+1 WHERE boardnum=$boardnum";
    $res2 = $conn->query($sql2);
}
$sql = "select *from board where boardnum='$boardnum'"; //게시판 내용 불러오기
$res = $conn->query($sql);//게시판 내용 불러오기
$row=mysqli_fetch_array($res);//게시판 내용의 배열을 저장한다.
if($res->num_rows == 0) {
    echo "<script>location.href='/board.php'</script>"; //x값을 조회한 결과 없는 게시물일 경우 board.php로 강제 이동
}
?>
<table id="title" style="width:100%; border:1px solid;"><tr><th colspan="3">제목:<?php $title=str_replace(">","&gt;",str_replace("<","&lt;",$row['boardtitle'])); echo " ".$title;?></th></tr><tr><th style="width:20%;">작성자:<?php echo " ".$row["userid"];?></th><th>작성일:<?php echo " ".$row["date"];?></th><th style="width:20%;">조회수:<?php echo " ".$row["hit"];?></th></tr></table>
<div id="editor" style="width:100%;"><?php echo str_replace("＃","#",str_replace("＝","=",str_replace("＆","&",$row["boardcontent"]))); ?></div>
<hr size = "2" style="width:100%; " >
<fieldset>

<legend><b>업로드 파일 목록📂</b></legend>
<div id="filelist" style="width:100%; height:100px; border:1px solid; overflow:auto;">
<?php 
$sql3 = "select *from boarduploadfile where starttime='".$row['starttime']."' and userid='".$row['userid']."' and type='F'"; //게시판 내용 불러오기
$res3 = $conn->query($sql3);//게시판 내용 불러오기



while($row3=mysqli_fetch_array($res3)) {
    echo "<a href='download.php?filepath=".$row3['realname']."&filename=".$row3['fakename']."'>".$row3['fakename']."</a><br>";
}
?>
</div>
</fieldset>
<div>
    
<?php 
if(isset($_SESSION['id']))
{
if(($_SESSION['id']==$row["userid"]) && ($_SESSION['username']==$row["username"])) 
{
    echo "<button style=' position:absolute; right:270px; margin-top:10px; border:1px solid; background:none;' class='button small' onclick=\"location.href='/boarddelete.php?x=$boardnum'\">삭제하기</button>";   
    echo "<button style=' position:absolute; right:170px; margin-top:10px;border:1px solid; background:none;' class='button small' onclick=\"location.href='/boardupdate.php?x=$boardnum'\">수정하기</button>";
}
} ?>

</div>
<?php if(isset($_SESSION['id'])) { ?>
    <br>
    <br>
    <!--<hr style="border: dotted 3px; margin-left:160px; width:75%;" >-->
    <!--</div>테투리css의 div-->
    <br><br>
    
<!-- 댓글을 작성하는 곳 -->
<form id="reply1applyid" action="reply1apply.php" method="post" target="reply1">
<fieldset style= "margin-top:20px; width:100%;">
<legend><b>댓글 작성란📬</b></legend>
<input type="hidden" name="reply1boardnum" value="<?php echo $boardnum; ?>">
<input type="hidden" name="reply1userid" value="<?php echo $_SESSION['id']; ?>">
<input type="hidden" name="reply1time" value="<?php echo time(); ?>">
<textarea id="reply1textarea" type="text" name="reply1textarea" style="width:100%; height:100px; border:1px solid; resize:none;"></textarea>
<input type="submit" class="button small" style='float:right; margin-top:10px; border:1px solid; background:none;' value="댓글 등록">
</fieldset>
</form>
<?php } ?>
<iframe name="reply1" style="display:none;"></iframe>
<fieldset style="margin-top:20px; width:100%;">
<legend><b>댓글 보기📭</b></legend>
<div id="replys" style=" height:800px; overflow:auto;">
<?php

$sql8="SELECT * FROM reply WHERE boardnum=$boardnum and replynum2=0 and replytrue=0 ORDER BY reply.replynum DESC LIMIT 5";
$res8 = $conn->query($sql8);
$savenum="0";
$count="0";
while($row8=mysqli_fetch_array($res8,MYSQLI_NUM)) {
$count++;
if($count==5){
if($savenum=="0") {
$savenum=$row8[1];
}
}
}
$sql4="SELECT * FROM reply WHERE boardnum=$boardnum and replynum2=0 and replytrue=0 ORDER BY reply.replynum DESC LIMIT 5";
$res4 = $conn->query($sql4);
while($row4=mysqli_fetch_array($res4)) {
echo "<div id=\"reply1show".$row4['replynum']."\">".$row4['userid']." ".date('y년 m월 d일 h시 i분 s초',$row4['starttime'])."<br>
<span id=\"reply1text".$row4['replynum']."\">".str_replace("<","&lt",$row4['replycontents'])."</span><br>";
$sql7="select *from reply where boardnum=$boardnum and replynum=".$row4['replynum']." and replynum2>0";
$res7 = $conn->query($sql7);
if(isset($_SESSION['id'])) {
if($res7->num_rows == 0) {
//답글 작성란을 불러온다.
echo "<div button class='small button' id='replyboxshow".$row4['replynum']."second' onclick='replyboxshow(".$row4['replynum'].")'>답글</button></div>";
}
if($res7->num_rows != 0) {
echo "<div button class='small button' id='replyboxshow".$row4['replynum']."second' onclick='replyboxshow(".$row4['replynum'].")' style='display:none;'>답글</button></div>";
//버튼 숨킴. 답글 더보기 버튼 숨킴. 답글 목록 불러옴. 답글 작성란을 불러옴.
echo "<div button class='small button' id='replyboxshow".$row4['replynum']."first' onclick=\"this.style.display='none'; document.getElementById('replyboxshow".$row4['replynum']."second').style.display='inline-block'; document.getElementById('reply2show".$row4['replynum']."resultshow').style.display='inline-block'; document.getElementById('reply2show".$row4['replynum']."resultmore').style.display='none'; replyboxshow(".$row4['replynum']."); reply2show".$row4['replynum'].".submit();\">답글</button></div>";
}
if($_SESSION['id'] == $row4['userid']) {
echo "<div button class='small button' style='margin-right:3px; margin-left:3px;' onclick='reply1update(".$row4['replynum'].")'>수정</button></div>";
echo "<div button class='small button' onclick='reply1delete(".$row4['replynum']."); reply1deleteformid".$row4['replynum'].".submit();'>삭제 </button></div>";
echo "<form id='reply1deleteformid".$row4['replynum']."' action='reply1delete.php' method='post' target='reply1'>";
//게시물 번호 전송
echo "<input type='hidden' name='reply1deleteboardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply1deletereplynum' value='".$row4['replynum']."'>";
echo "</form>";
}
}
$sql6="SELECT * FROM reply WHERE boardnum=$boardnum and replynum=".$row4['replynum']." ORDER BY reply.replynum2 DESC";
$res6 = $conn->query($sql6);
$count=0;
while($row6=mysqli_fetch_array($res6)) {
if($row6['replynum2'] != 0) {
$count++;
}
}
$sql6="SELECT * FROM reply WHERE boardnum=$boardnum and replynum=".$row4['replynum']." ORDER BY reply.replynum2 DESC";
$res6 = $conn->query($sql6);
$count=0;
while($row6=mysqli_fetch_array($res6)) {
if($row6['replynum2'] != 0) {
$count++;
}
}
//수정 필요
if($count > 0) {
    //1. 답글 더보기 버튼을 숨겨준다. 2. 답글을 불러온다. 3. 답글 숨기기 버튼이 나타나도록 만든다.
    echo "<div button class='small button' id='reply2show".$row4['replynum']."resultmore' onclick=\"this.style.display='none'; document.getElementById('replyboxshow".$row4['replynum']."first').style.display='none'; document.getElementById('replyboxshow".$row4['replynum']."second').style.display='inline-block'; reply2show".$row4['replynum'].".submit(); document.getElementById('show".$row4['replynum']."').style.display='block'; document.getElementById('reply2show".$row4['replynum']."resulthide').style.display='inline-block';\">답글 "."$count"."개 보기</button></div>";
    //1. 답글 숨기기 버튼을 숨겨준다. 2. 불러온 답글을 숨겨준다. 3. 답글 더보기 버튼을 다시 나타내준다.(기존에 불러온 답글 내용만 나타나게 해줄 것이다.) reply2show".$row4['replynum']."resultshow
    echo "<div button class='small button' id='reply2show".$row4['replynum']."resulthide' onclick=\"this.style.display='none'; document.getElementById('show".$row4['replynum']."').style.display='none'; document.getElementById('reply2show".$row4['replynum']."resultshow').style.display='inline-block';\" style='display:none;'>답글 숨기기</button></div>";
    //1. 답글 더보기 버튼을 숨겨준다. 2. 불러온 답글을 보여준다. 3. 답글 숨기기 버튼을 보여준다.
    echo "<div button class='small button' id='reply2show".$row4['replynum']."resultshow' onclick=\"this.style.display='none'; document.getElementById('show".$row4['replynum']."').style.display='block'; document.getElementById('reply2show".$row4['replynum']."resulthide').style.display='inline-block';\" style='display:none;'>답글 "."$count"."개 보기</button></div>";
    }
    echo "<form id='reply2show".$row4['replynum']."' action='reply2show.php' method='post' target='reply1'>";
    //게시물 번호 전송
    echo "<input type='hidden' name='reply2boardnum' value='".$boardnum."'>";
    //댓글 번호 전송
    echo "<input type='hidden' name='reply2replynum' value='".$row4['replynum']."'>";
    //등록 취소 혹은 등록
    echo "</form>";
    if(isset($_SESSION['id'])) {
    //자식 댓글 달기
    //자식 댓글을 달면, reply2apply.php 파일에 post방식으로 값을 전달하되,
    //reply1이라는 이름의 iframe에 reply2apply.php파일의 결과물이 출력되도록 만든다.
    echo "<fieldset id='reply2applyid".$row4['replynum']."' style='margin-top:20px; display:none;'>";
    echo "<legend>댓글 작성란</legend>";
    //게시물 번호 전송
    echo "<form id='reply2formid".$row4['replynum']."' action='reply2apply.php' method='post' target='reply1'>";
    echo "<input type='hidden' name='reply2boardnum' value='".$boardnum."'>";
    //댓글 번호 전송
    echo "<input type='hidden' name='reply2replynum' value='".$row4['replynum']."'>";
    //유저 이름 전송
    echo "<input type='hidden' name='reply2userid' value='".$_SESSION['id']."'>";
    //등록 시간 전송
    echo "<input type='hidden' name='reply2time' value='".time()."'>";
    //텍스트 전송
    echo "<textarea type='text' name='reply2textarea' style='width:100%; height:100px; border:1px solid; resize:none;'></textarea>";
    //등록 취소 혹은 등록
    echo "</form>";
    echo "<div button class='small button' style='float:right; margin-top:-30px; border:1px solid; background:none;' onclick='reply2cancel(".$row4['replynum'].")'>취소</button></div><div button class='small button' style='float:right; margin-top:-30px; margin-right:3px; border:1px solid; background:none;' onclick=\"reply2formid".$row4['replynum'].".submit();\">댓글 등록</button></div>";
    echo "</fieldset>";
    }
    if(isset($_SESSION['id'])) {
    if($_SESSION['id'] == $row4['userid']) {
    //댓글1 수정
    echo "<fieldset id='reply1updateid".$row4['replynum']."' style='margin-top:20px; display:none;'>";
    echo "<legend>댓글 수정란</legend>";
    echo "<form id='reply1updateformid".$row4['replynum']."' action='reply1update.php' method='post' target='reply1'>";
    //게시물 번호 전송
    echo "<input type='hidden' name='reply1updateboardnum' value='".$boardnum."'>";
    //댓글 번호 전송
    echo "<input type='hidden' name='reply1updatereplynum' value='".$row4['replynum']."'>";
    //텍스트 전송
    echo "<textarea type='text' name='reply1updatetextarea' style='width:100%; height:100px; border:1px solid; resize:none;'>".str_replace("<","&lt",$row4['replycontents'])."</textarea>";
    //등록 취소 혹은 등록
    echo "</form>";
    echo "<div button class='small button' style='float:right; margin-top:-30px; border:1px solid; background:none;' onclick='reply1updatecancel(".$row4['replynum'].")'>취소</button></div><div button class='small button' style='float:right; margin-top:-30px; margin-right:3px; border:1px solid; background:none;' onclick='reply1updateformid".$row4['replynum'].".submit()'>댓글 수정</button></div>";
    echo "</fieldset>";
    }
    }
    echo "<br><br>";
    if($res7->num_rows == 0) {
    echo "<div id='show".$row4['replynum']."' style='margin-left:10%; margin-right:10%;'></div>";
    }
    if($res7->num_rows != 0) {
    echo "<div id='show".$row4['replynum']."' style='display:none; margin-left:10%; margin-right:10%;'></div>";
    }
    echo "</div>";
    }
    //더보기
    $sql5="SELECT * FROM reply WHERE boardnum=$boardnum and replynum2=0 and replytrue=0 ORDER BY reply.replynum DESC";
    $res5 = $conn->query($sql5);
    if($res5->num_rows > 5) {
    echo "<p id='rcb' style='text-align:center;' onclick=\"this.style.display='none';+reply1limitfunction($savenum)&reply1moreid.submit()\">더보기</p>";
    }
    ?>
    </div>
    </fieldset>

<form id="reply1moreid" action="reply1more.php" method="post" target="reply1m">
<input type="hidden" name="reply1boardnum" value="<?php echo $boardnum; ?>">
<input type="hidden" id="reply1replynumid" name="reply1replynum">
<input type="hidden" id="reply1limit" name="reply1limit">
</form>
<iframe name="reply1m" style="display:none;"></iframe>

<form id="reply2moreid" action="reply2more.php" method="post" target="reply2m">
<input type="hidden" name="reply2boardnum" value="<?php echo $boardnum; ?>">
<input type="hidden" id="reply2replynumid" name="reply2replynum">
<input type="hidden" id="reply2replynumid2" name="reply2replynum2">
<input type="hidden" id="reply2limit" name="reply2limit">
</form>
<iframe name="reply2m" style="display:none;"></iframe>
<!--<footer>&copy; 2019 by 공돌이광식</footer>--> 
</div></div>

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
<!--main의 div--></div>


<script>
r1l=0;
//부모 댓글창 수
function reply1limitfunction(r1rni) {
r1l=r1l+5;
document.getElementById("reply1limit").value = r1l;
document.getElementById("reply1replynumid").value = r1rni;
}

r2l=0;
//자식 댓글창 수
function reply2limitfunction(r2rni,r2rni2) {
r2l=r2l+5;
document.getElementById("reply2limit").value = r2l;
document.getElementById("reply2replynumid").value = r2rni;
document.getElementById("reply2replynumid2").value = r2rni2;
}

//자식 댓글창이 열리거나 닫히도록 만듦.
var rn=0;
function replyboxshow(rbs) {
if(rn != 0) {
document.getElementById('reply2applyid'+rn).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
if(rn2 != 0) {
document.getElementById('reply2update'+rn1+'id'+rn2).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
if(rn1 != 0) {
document.getElementById('reply1updateid'+rn1).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
document.getElementById('reply2applyid'+rbs).style.display = 'block';
rn=rbs;
}

var rn1=0;
function reply1update(rbs1) {
//답글 작성란 항목을 감추어준다.
if(rn != 0) {
document.getElementById('reply2applyid'+rn).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
if(rn2 != 0) {
document.getElementById('reply2update'+rn1+'id'+rn2).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란 항목을 감추어준다.
if(rn1 != 0) {
document.getElementById('reply1updateid'+rn1).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란 항목을 나타나도록 만들어준다.
document.getElementById('reply1updateid'+rbs1).style.display = 'block';
rn1=rbs1;
}

var rn2=0;
function reply2update(rbs1,rbs2) {
//답글 작성란 항목을 감추어준다.
if(rn != 0) {
document.getElementById('reply2applyid'+rn).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란2 항목을 감추어준다.
if(rn2 != 0) {
document.getElementById('reply2update'+rn1+'id'+rn2).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란 항목을 감추어준다.
if(rn1 != 0) {
document.getElementById('reply1updateid'+rn1).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란2 항목을 나타내어 준다.
document.getElementById('reply2update'+rbs1+'id'+rbs2).style.display = 'block';
rn1=rbs1;
rn2=rbs2;
}

//자식 댓글 수정창 닫기
function reply2updatecancel(rbs1,rbs2) {
document.getElementById('reply2update'+rbs1+'id'+rbs2).style.display = 'none';
}

//자식 댓글창 닫기
function reply2cancel(rbs) {
document.getElementById('reply2applyid'+rbs).style.display = 'none';
}

//부모 댓글 수정창 닫기
function reply1updatecancel(rbs1) {
document.getElementById('reply1updateid'+rbs1).style.display = 'none';
}

function reply1delete(rbs1) {
//답글 작성란 항목을 감추어준다.
if(rn != 0) {
document.getElementById('reply2applyid'+rn).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
if(rn2 != 0) {
document.getElementById('reply2update'+rn1+'id'+rn2).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란 항목을 감추어준다.
if(rn1 != 0) {
document.getElementById('reply1updateid'+rn1).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
}

function reply2delete(rbs1,rbs2) {
//답글 작성란 항목을 감추어준다.
if(rn != 0) {
document.getElementById('reply2applyid'+rn).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
if(rn2 != 0) {
document.getElementById('reply2update'+rn1+'id'+rn2).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
//답글 수정란 항목을 감추어준다.
if(rn1 != 0) {
document.getElementById('reply1updateid'+rn1).style.display = 'none';
rn=0;
rn1=0;
rn2=0;
}
}

//에디터 안에 쓰여진 값들 중 특수문자들에 대해 고쳐준다.
document.getElementById("editor").innerHTML = document.getElementById("editor").innerHTML.replace("＋","+").replace(/＃/g,"#").replace(/＝/g,"=").replace(/＼/g,"\\");

//세줄 이미지 클릭시 게시판으로 들어갈 수 있는 링크가 보이고, X 버튼 클릭시 링크가 감추어진다.
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