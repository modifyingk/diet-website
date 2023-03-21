<div id="send">
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
$boardnum = $_POST["reply1boardnum"];
$replycontents = $_POST["reply1textarea"];
$starttime = time();
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$sql3 = "SELECT MAX(replynum) AS replynum FROM reply WHERE boardnum = '$boardnum'";
$res3 = $conn->query($sql3);
$row3=mysqli_fetch_array($res3);
$num=($row3['replynum']+1);
$sql = "insert into reply (boardnum, replynum, userid, replycontents, starttime) values('$boardnum',
$num,'".$_SESSION['id']."','$replycontents','$starttime')";
$res = $conn->query($sql);
$sql2 = "select *from reply where boardnum='$boardnum' and replynum='$num' and replytrue='0' and userid='".$_SESSION['id']."'
and replycontents='$replycontents' and starttime='$starttime'";
$res2 = $conn->query($sql2);
$row2=mysqli_fetch_array($res2);
echo "<div id=\"reply1show".$row2['replynum']."\">".$row2['userid']." ".date('y년 m월 d일 h시 i분 s초',$row2['starttime'])."<br>
<span id=\"reply1text".$row2['replynum']."\">".str_replace("<","&lt;",$row2['replycontents'])."</span><br>";
$sql7="select *from reply where boardnum=$boardnum and replynum=".$row2['replynum']." and replynum2>0";
$res7 = $conn->query($sql7);
if(isset($_SESSION['id'])) {
if($res7->num_rows == 0) {
//답글 작성란을 불러온다.
echo "<div button class='small button' id='replyboxshow".$row2['replynum']."second' onclick='replyboxshow(".$row2['replynum'].")'>답글</button></div>";
}
if($res7->num_rows != 0) {
echo "<div button class='small button' id='replyboxshow".$row2['replynum']."second' onclick='replyboxshow(".$row2['replynum'].")' style='display:none;'>답글</button></div>";
//버튼 숨킴. 답글 더보기 버튼 숨킴. 답글 목록 불러옴. 답글 작성란을 불러옴.
echo "<div button class='small button' id='replyboxshow".$row2['replynum']."first' onclick=\"this.style.display='none'; document.getElementById('replyboxshow".$row2['replynum']."second').style.display='inline-block'; document.getElementById('reply2show".$row2['replynum']."resultshow').style.display='inline-block'; document.getElementById('reply2show".$row2['replynum']."resultmore').style.display='none'; replyboxshow(".$row2['replynum']."); reply2show".$row2['replynum'].".submit();\">답글</button></div>";
}
if($_SESSION['id'] == $row2['userid']) {
echo "<div button class='small button' style='margin-right:3px; margin-left:3px;' onclick='reply1update(".$row2['replynum'].")'>수정</button></div>";
echo "<div button class='small button' onclick='reply1delete(".$row2['replynum']."); reply1deleteformid".$row2['replynum'].".submit();'>삭제 </button></div>";
echo "<form id='reply1deleteformid".$row2['replynum']."' action='reply1delete.php' method='post' target='reply1'>";
//게시물 번호 전송
echo "<input type='hidden' name='reply1deleteboardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply1deletereplynum' value='".$row2['replynum']."'>";
echo "</form>";
}
}
echo "<form id='reply2show".$row2['replynum']."' action='reply2show.php' method='post' target='reply1'>";
//게시물 번호 전송
echo "<input type='hidden' name='reply2boardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply2replynum' value='".$row2['replynum']."'>";
//등록 취소 혹은 등록
echo "</form>";

if(isset($_SESSION['id'])) {
//자식 댓글 달기
//자식 댓글을 달면, reply2apply.php 파일에 post방식으로 값을 전달하되,
//reply1이라는 이름의 iframe에 reply2apply.php파일의 결과물이 출력되도록 만든다.
echo "<fieldset id='reply2applyid".$row2['replynum']."' style='margin-top:20px; display:none;'>";
echo "<legend>댓글 작성란</legend>";
//게시물 번호 전송
echo "<form id='reply2formid".$row2['replynum']."' action='reply2apply.php' method='post' target='reply1'>";
echo "<input type='hidden' name='reply2boardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply2replynum' value='".$row2['replynum']."'>";
//유저 이름 전송
echo "<input type='hidden' name='reply2userid' value='".$_SESSION['id']."'>";
//등록 시간 전송
echo "<input type='hidden' name='reply2time' value='".time()."'>";
//텍스트 전송
echo "<textarea type='text' name='reply2textarea' style='width:100%; height:100px; border:1px solid; resize:none;'></textarea>";
//등록 취소 혹은 등록
echo "</form>";
echo "<div button class='small button' style='float:right; border:1px solid; background:none;' onclick='reply2cancel(".$row2['replynum'].")'>취소</button></div><div button class='small button' style='float:right; margin-right:3px; border:1px solid; background:none;' onclick='reply2formid".$row2['replynum'].".submit()'>댓글 등록</button></div>";
echo "</fieldset>";
}


if(isset($_SESSION['id'])) {
if($_SESSION['id'] == $row2['userid']) {
//댓글1 수정
echo "<fieldset id='reply1updateid".$row2['replynum']."' style='margin-top:20px; display:none;'>";
echo "<legend>댓글 수정란</legend>";
//게시물 번호 전송
echo "<form id='reply1updateformid".$row2['replynum']."' action='reply1update.php' method='post' target='reply1'>";
echo "<input type='hidden' name='reply1updateboardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply1updatereplynum' value='".$row2['replynum']."'>";
//텍스트 전송
echo "<textarea type='text' name='reply1updatetextarea' style='width:100%; height:100px; border:1px solid; resize:none;'>".str_replace("<","&lt",$row2['replycontents'])."</textarea>";
//등록 취소 혹은 등록
echo "</form>";
echo "<div button class='small button' style='float:right; border:1px solid; background:none;' onclick='reply1updatecancel(".$row2['replynum'].")'>취소</button></div><div button class='small button' style='float:right; margin-right:3px; border:1px solid; background:none;' onclick='reply1updateformid".$row2['replynum'].".submit()'>댓글 수정</button></div>";
echo "</fieldset>";
}
}
echo "<br><br>";
echo "<div id='show".$row2['replynum']."' style='margin-left:10%; margin-right:10%;'></div></div></div>";
?>
</div>
<script>
parent.document.getElementById("replys").innerHTML = document.getElementById("send").innerHTML + parent.document.getElementById("replys").innerHTML;
parent.document.getElementById("reply1textarea").value = "";
</script>