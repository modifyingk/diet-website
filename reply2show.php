<div id="send">
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
//게시물 번호 저장
$boardnum = $_POST["reply2boardnum"];
//게시물 부모 댓글 번호 저장
$replynum = $_POST["reply2replynum"];
//DB접속
$conn = new mysqli("localhost","root","","web");
//DB utf8 설정
mysqli_query ($conn, 'SET NAMES utf8');
//DB에 저장된 댓글 불러오기
$sql = "select *from reply where boardnum='$boardnum' and replynum='$replynum' and replynum2>0 and replytrue='0' ORDER BY reply.replynum2 DESC LIMIT 5";
$res = $conn->query($sql);
//저장된 정보를 출력해줌
while($row=mysqli_fetch_array($res)) {
echo "<div id=\"reply1show".$row['replynum']."id".$row['replynum2']."\">".$row['userid']." ".date('y년 m월 d일 h시 i분 s초',$row['starttime'])."<br>
<span id=\"reply2id".$row['replynum']."text".$row['replynum2']."\">".$row['replycontents']."</span><br>";
//수정 버튼 클릭시 자식 댓글 번호를 가지고, reply2update 함수를 실행
if(isset($_SESSION['id'])) {
if($_SESSION['id'] == $row['userid']) {
echo "<div button class='small button' style='margin-right:3px; margin-left:3px;' onclick='reply2update(".$row['replynum'].",".$row['replynum2'].")'>수정 </button></div>";
echo "<div button class='small button' onclick='reply2delete(".$row['replynum'].",".$row['replynum2']."); reply2deleteform".$row['replynum']."id".$row['replynum2'].".submit();'>삭제 </button></div>";
echo "<form id='reply2deleteform".$row['replynum']."id".$row['replynum2']."' action='reply2delete.php' method='post' target='reply1'>";
//게시물 번호 전송
echo "<input type='hidden' name='reply1deleteboardnum' value='".$boardnum."'>";
//댓글 번호 전송
echo "<input type='hidden' name='reply1deletereplynum' value='".$row['replynum']."'>";
echo "<input type='hidden' name='reply2deletereplynum' value='".$row['replynum2']."'>";
echo "</form>";
//아이디 부여
echo "<fieldset id='reply2update".$row['replynum']."id".$row['replynum2']."' style='margin-top:20px; display:none;'>";
echo "<legend>댓글 수정란</legend>"; 
//자식 댓글에 대한 정보 전송
echo "<form id='reply2updateform".$row['replynum']."id".$row['replynum2']."' action='reply2update.php' method='post' target='reply1'>";
//게시물 번호
echo "<input type='hidden' name='reply2updateboardnum' value='".$boardnum."'>";
//부모 댓글 번호 전송
echo "<input type='hidden' name='reply2updatereplynum' value='".$row['replynum']."'>";
//자식 댓글 번호 전송
echo "<input type='hidden' name='reply2updatereplynum2' value='".$row['replynum2']."'>";
//텍스트 전송
echo "<textarea type='text' name='reply2updatetextarea' style='width:100%; height:100px; border:1px solid; resize:none;'>".str_replace("<","&lt;",$row['replycontents'])."</textarea>";
echo "</form>";
//댓글 수정 및 취소
echo "<div button class='small button' style='float:right; border:1px solid; background:none;' onclick='reply2updatecancel(".$row['replynum'].",".$row['replynum2'].")'>취소</button></div><div button class='small button' style='float:right; margin-right:3px; border:1px solid; background:none;' onclick='reply2updateform".$row['replynum']."id".$row['replynum2'].".submit()'>댓글 수정</button></div>";
echo "</fieldset>";
}
}
echo "<br><br></div>";
}
$sql2="SELECT * FROM reply WHERE boardnum=$boardnum and replynum='$replynum' and replynum2>0 and replytrue='0' ORDER BY reply.replynum2 DESC";
$res2 = $conn->query($sql2);
$count="0";
$savenum2="0";
while($row2=mysqli_fetch_array($res2,MYSQLI_NUM)) {
$count++;
if($count==5){
if($savenum2=="0") {
$savenum2=$row2[2];
}
}
}
if($res2->num_rows > 5) {
//더보기 클릭시 더보기 버튼 숨김. reply2limitfunction에 부모댓글 번호와 savenum2를 넣어 작동시킨 후 reply2moreid 양식 제출.
echo "<p id='rcb' style='text-align:center;' onclick=\"this.style.display='none';+reply2limitfunction($replynum,$savenum2)&reply2moreid.submit()\">댓글2 더보기</p>";
}
?>
</div>
<script>
//여기가 중요함.
parent.document.getElementById("show<?php echo $replynum; ?>").innerHTML = document.getElementById("send").innerHTML + parent.document.getElementById("show<?php echo $replynum; ?>").innerHTML;
</script>