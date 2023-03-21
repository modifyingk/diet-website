<?php 
header("Content-Type: text/html; charset=UTF-8"); 
//세션 시작
session_start();
 $servername = "localhost"; // 데이터베이스 호스트 
 $username = "root"; // 데이터베이스 ID (수정요망) 
 $password = ""; // 데이터베이스 PW (수정요망) 
 $dbname = "web"; //데이터베이스명 (수정요망) 

 // Create connection 
 $conn = new mysqli("localhost","root","","web"); 
 // Check connection 

$sql = "DELETE FROM search where id='".$_SESSION['id']."'";
$res = $conn->query($sql);
//댓글  삭제 확인
$sql2 = "select *from search where id='".$_SESSION['id']."'";
$res2 = $conn->query($sql2);
if($res2->num_rows == 0) {
echo "<script>alert('칼로리 초기화 성공');</script>";
echo "<script>location.href='/kcal.php'</script>";
}
 $conn->close(); 
 ?> 
