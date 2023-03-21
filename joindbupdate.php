<?php
header("Content-Type: text/html; charset=UTF-8"); 
session_start();
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$id=$_SESSION['id'];
$name=$_SESSION['username'];
$password = $_POST['password'];
$password = addslashes($password);
$password2 = $_POST['password2'];
$password2 = addslashes($password2);
$hidden = $_POST['hidden'];
if(($hidden != 1) || ($password != $password2)) {
    echo "<script>alert('비밀번호 양식을 확인해주세요.');location.href='/join.html';</script>";
    exit();
}
$address = $_POST['address'];
$address = addslashes($address);
//if($address == NULL || $address == "") {
//    echo "<script>alert('주소 양식을 확인해주세요.');location.href='/join.html';</script>";
//    exit();
//}

$weight = $_POST['weight'];
$weight = addslashes($weight);
$hidden6 = $_POST['hidden6'];
if($weight == NULL || $weight == "") {
    echo "<script>alert('체중 양식을 확인해주세요.');location.href='/join.html';</script>";
    exit();
}

$number = $_POST['number'];
$number = addslashes($number);
$hidden3 = $_POST['hidden3'];
//if($number == NULL || $number == "" || $hidden3 != 1) {
//    echo "<script>alert('휴대폰 번호 양식을 확인해주세요.');location.href='/join.html';</script>";
//    exit();
//}
$email = $_POST['email'];
$email = addslashes($email);
$hidden4 = $_POST['hidden4'];
//if($email == NULL || $email == "" || $hidden4 != 1) {
//    echo "<script>alert('이메일 양식을 확인해주세요.');location.href='/join.html';</script>";
//   exit();
//}
$sql = "UPDATE member SET password='$password', weight='$weight', address='$address',number='$number',email='$email' where name='$name' and id='$id'";
$res = $conn->query($sql);
$sql2 = "SELECT *FROM member WHERE password='$password' and address='$address' and number='$number' and email='$email' and name='$name' and id='$id'";
$res2 = $conn->query($sql2);
if($res2->num_rows>0) {
    echo "<script>alert('회원정보수정에 성공하였습니다.');location.href='/main.php';</script>";
}
?>