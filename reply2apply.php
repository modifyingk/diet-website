<div id="send">
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
//게시물 번호 저장
$boardnum = $_POST["reply2boardnum"];
//게시물 부모 댓글 번호 저장
$replynum = $_POST["reply2replynum"];
//사용자 이름 저장
$username = $_POST["reply2userid"];
//게시물 내용
$replycontents = $_POST["reply2textarea"];
//게시물 등록 시간
$starttime = time();
//DB접속
$conn = new mysqli("localhost","root","","web");
//DB utf8 설정
mysqli_query ($conn, 'SET NAMES utf8');
//부모 댓글에 마지막으로 달린 자식 댓글의 번호를 조회
$sql3 = "SELECT MAX(replynum2) AS replynum2 FROM reply WHERE boardnum = '$boardnum' and replynum='$replynum'";
$res3 = $conn->query($sql3);
$row3=mysqli_fetch_array($res3);
//마지막 번호에 +1을 더한 값을 자식 댓글의 번호로 활용하고자 num에 저장
$num=($row3['replynum2']+1);
//DB에 등록
$sql = "insert into reply (boardnum, replynum, replynum2, userid, replycontents, starttime) values('$boardnum',
'$replynum','$num','".$_SESSION['id']."','$replycontents','$starttime')";
$res = $conn->query($sql);
//DB에 저장이 되었는지 확인
$sql2 = "select *from reply where boardnum='$boardnum' and replynum='$replynum' and replynum2='$num' and replytrue='0' and userid='".$_SESSION['id']."'
and replycontents='$replycontents' and starttime='$starttime'";
$res2 = $conn->query($sql2);
$row2=mysqli_fetch_array($res2);
//저장된 정보를 출력해줌
echo "<div id=\"reply1show".$row2['replynum']."id".$row2['replynum2']."\">".$row2['userid']." ".date('y년 m월 d일 h시 i분 s초',$row2['starttime'])."<br>
<span id=\"reply2id".$row2['replynum']."text".$row2['replynum2']."\">".$row2['replycontents']."</span><br>";
//아이디 값이 일치하는지 확인
if(isset($_SESSION['id'])) {
if($_SESSION['id'] == $row2['userid']) {
echo "<div button class='small button' style='margin-right:3px; margin-left:3px;' onclick='reply2update(".$row2['replynum'].",".$row2['replynum2'].")'>수정 </button></div>";
echo "<div button class='small button' onclick='reply2delete(".$row2['replynum'].",".$row2['replynum2']."); reply2deleteform".$row2['replynum']."id".$row2['replynum2'].".submit();'>삭제 </button></div>";
echo "<form id='reply2deleteform".$row2['replynum']."id".$row2['replynum2']."' action='reply2delete.php' method='post' target='reply1'>";
//게시물 번호 전송
echo "<input type='hidden' name='reply1deleteboardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply1deletereplynum' value='".$row2['replynum']."'>";
echo "<input type='hidden' name='reply2deletereplynum' value='".$row2['replynum2']."'>";
echo "</form>";
//아이디 부여
echo "<fieldset id='reply2update".$row2['replynum']."id".$row2['replynum2']."' style='margin-top:20px; display:none;'>";
echo "<legend>댓글 수정란</legend>"; 
//자식 댓글에 대한 정보 전송
echo "<form id='reply2updateform".$row2['replynum']."id".$row2['replynum2']."' action='reply2update.php' method='post' target='reply1'>";
//게시물 번호
echo "<input type='hidden' name='reply2updateboardnum' value='".$boardnum."'>";
//부모 댓글 번호 전송
echo "<input type='hidden' name='reply2updatereplynum' value='".$row2['replynum']."'>";
//자식 댓글 번호 전송
echo "<input type='hidden' name='reply2updatereplynum2' value='".$row2['replynum2']."'>";
//텍스트 전송
echo "<textarea type='text' name='reply2updatetextarea' style='width:100%; height:100px; border:1px solid;'>".str_replace("<","&lt;",$row2['replycontents'])."</textarea>";
echo "</form>";
//댓글 수정 및 취소
echo "<div button class='small button' style='float:right; border:1px solid; background:none;' onclick='reply2updatecancel(".$row2['replynum'].",".$row2['replynum2'].")'>취소</button></div><div button class='small button' style='float:right; margin-right:3px; border:1px solid; background:none;' onclick='reply2updateform".$row2['replynum']."id".$row2['replynum2'].".submit()'>댓글 수정</button></div>";
echo "</fieldset>";
}
}
echo "<br><br></div>";
?>
</div>
<script>
//여기가 중요함.
parent.document.getElementById("show<?php echo $replynum; ?>").innerHTML = document.getElementById("send").innerHTML + parent.document.getElementById("show<?php echo $replynum; ?>").innerHTML;
</script>