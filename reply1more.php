<div id="send">
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$boardnum = $_POST["reply1boardnum"];
$replynum = $_POST["reply1replynum"];
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$sql8="SELECT * FROM reply WHERE boardnum=$boardnum and replynum<$replynum and replynum2=0 and replytrue=0 ORDER BY reply.replynum DESC LIMIT 5";
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
$sql4="SELECT * FROM reply WHERE boardnum=$boardnum and replynum<$replynum and replynum2=0 and replytrue=0 ORDER BY reply.replynum DESC LIMIT 5";
$res4 = $conn->query($sql4);
while($row4=mysqli_fetch_array($res4)) {
echo "<div id=\"reply1show".$row4['replynum']."\">".$row4['userid']." ".date('y년 m월 d일 h시 i분 s초',$row4['starttime'])."<br>
<span id=\"reply1text".$row4['replynum']."\">".str_replace("<","&lt;",$row4['replycontents'])."</span><br>";
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
echo "<div button class='small button' onclick='reply1delete(".$row4['replynum']."); reply1deleteformid".$row4['replynum'].".submit()'>삭제 </button></div>";
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
echo "<div button class='small button' style='float:right; border:1px solid; background:none;' onclick='reply2cancel(".$row4['replynum'].")'>취소</button></div><div button class='small button' style='float:right; margin-right:3px; border:1px solid; background:none;' onclick=\"reply2formid".$row4['replynum'].".submit(); \">댓글 등록</button></div>";
echo "</fieldset>";
}
if(isset($_SESSION['id'])) {
if($_SESSION['id'] == $row4['userid']) {
//댓글1 수정
echo "<fieldset id='reply1updateid".$row4['replynum']."' style='margin-top:20px; display:none;'>";
echo "<legend>댓글 수정란</legend>";
//게시물 번호 전송
echo "<form id='reply1updateformid".$row4['replynum']."' action='reply1update.php' method='post' target='reply1'>";
echo "<input type='hidden' name='reply1updateboardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply1updatereplynum' value='".$row4['replynum']."'>";
//텍스트 전송
echo "<textarea type='text' name='reply1updatetextarea' style='width:100%; height:100px; border:1px solid; resize:none;'>".str_replace("<","&lt;",$row4['replycontents'])."</textarea>";
//등록 취소 혹은 등록
echo "</form>";
echo "<div button class='small button' style='float:right; border:1px solid; background:none;' onclick='reply1updatecancel(".$row4['replynum'].")'>취소</button></div><div button class='small button' style='float:right; margin-right:3px; border:1px solid; background:none;' onclick='reply1updateformid".$row4['replynum'].".submit()'>댓글 수정</button></div>";
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
$sql5="SELECT * FROM reply WHERE boardnum=$boardnum and replynum<$savenum and replynum2=0 and replytrue=0 ORDER BY reply.replynum DESC";
$res5 = $conn->query($sql5);
if($res5->num_rows > 0) {
echo "<p id='rcb' style='text-align:center;' onclick=\"this.style.display='none';+reply1limitfunction($savenum)&reply1moreid.submit()\">더보기</p>";
}
?>
</div>
<script>
parent.document.getElementById("replys").innerHTML += document.getElementById("send").innerHTML;
parent.document.getElementById("reply1replynumid").value = <?php echo $savenum; ?>;
</script>