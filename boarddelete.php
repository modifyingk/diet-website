<!DOCTYPE html>
<?php
header("Content-Type: text/html; charset=UTF-8"); 
session_start(); //세션 시작
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$boardnum = $_GET['x'];
$sql = "select *from board where boardnum='$boardnum'"; //게시판 내용 불러오기
$res = $conn->query($sql);//게시판 내용 불러오기
$row=mysqli_fetch_array($res);//게시판 내용의 배열을 저장한다. 
if(($_SESSION['id']==$row["userid"]) && ($_SESSION['username']==$row["username"])) {
$sql2 = "select *from boarduploadfile where userid='".$row['userid']."' and starttime='".$row['starttime']."'";
$res2 = $conn->query($sql2);
while($row2=mysqli_fetch_array($res2)) {
while(file_exists($row2["realname"])) {
    unlink($row2["realname"]);
}
$sql3 = "delete from boarduploadfile where userid='".$row['userid']."' and realname='".$row2['realname']."' and starttime='".$row['starttime']."'";
$res3 = $conn->query($sql3);
}

    $sql4 = "delete from board where boardnum='$boardnum'"; //게시판 내용 불러오기
    $res4 = $conn->query($sql4);//게시판 내용 불러오기
    echo "<script>location.href='/board.php'</script>";
} else {
    exit();
}
?>