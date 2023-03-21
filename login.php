<!DOCTYPE html>
<?php
header("Content-Type: text/html; charset=UTF-8"); 
session_start(); //세션 시작
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$id = $_POST['id'];
$id = addslashes($id);
if($id == NULL || $id == "") {
    echo "<script>alert('아이디를 입력하지 않았습니다.');location.href='/login.html';</script>";
    exit();
}
$password = $_POST['password'];
$password = addslashes($password);
if(strlen($password)<8) {
    echo "<script>alert('비밀번호 양식을 확인해주세요.');location.href='/login.html';</script>";
    exit();
}
$sql = "select *from member where id ='$id' and password='$password'";
$res = $conn->query($sql);
$row = mysqli_fetch_array($res);
if($res->num_rows > 0) { //아이디 값이 중복될 경우 php문을 종료시킨다.
    $_SESSION['id']=$id;
    $_SESSION['username']=$row["name"];
    if(isset($_SESSION['id']) && isset($_SESSION['username']))    //세션 변수가 참일 때
    {
        echo "<script>location.href='/main.php'</script>";
    } else {
        echo "<script>alert('로그인에 실패하였습니다.');location.href='/login.html';</script>";
    }
    exit();
} else {
    echo "<script>alert('로그인에 실패하였습니다.');location.href='/login.html';</script>";
}
//json 인코드(outp). echo는 하나 이상의 문자열을 출력한다.
?>