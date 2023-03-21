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
 $food = $_POST['food'];

$kcal = $_POST['kcal'];
$sql = "INSERT INTO search(id, food, kcal) VALUES ('".$_SESSION['id']."', '$food', '$kcal')";
if ($conn->query($sql) === TRUE) { 
    echo "<script>alert('칼로리 입력 성공');</script>";
    echo "<script>location.href='/kcal.php'</script>";
    
} else { 
    echo "Error: " . $sql . " 
 " . $conn->error; 
 } 
 $conn->close(); 
 ?> 
