﻿<div id="send">
<?php
header("Content-Type: text/html; charset=UTF-8");
session_start();
//게시물 번호
$boardnum = $_POST["reply2updateboardnum"];
//부모 댓글 번호
$replynum = $_POST["reply2updatereplynum"];
//자식 댓글 번호
$replynum2 = $_POST["reply2updatereplynum2"];
//자식 댓글 내용
$replycontents = $_POST["reply2updatetextarea"];
//DB접속
$conn = new mysqli("localhost","root","","web");
//DB 한글 사용처리
mysqli_query ($conn, 'SET NAMES utf8');
//댓글 수정
$sql = "update reply set replycontents='$replycontents' where boardnum='$boardnum' and replynum='$replynum' and replynum2='$replynum2'";
$res = $conn->query($sql);
//댓글 수정 확인
$sql2 = "select *from reply where boardnum='$boardnum' and replynum='$replynum' and replytrue='0' and replynum2='$replynum2' and replycontents='$replycontents'";
$res2 = $conn->query($sql2);
$row2=mysqli_fetch_array($res2);
//수정된 내용 출력
echo $row2['replycontents'];
?>
</div>
<script>
parent.document.getElementById("<?php echo "reply2id".$row2['replynum']."text".$row2['replynum2']; ?>").innerHTML = document.getElementById("send").innerHTML;
</script>