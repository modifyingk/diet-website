<?php
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$id = $_POST['id'];
$id = addslashes($id);
$hidden5 = $_POST['hidden5'];
if($id == NULL || $id == "" || $hidden5 != 1) {
    echo "<script>alert('아이디 양식을 확인해주세요.');location.href='/join.html';</script>";
    exit();
}
$password = $_POST['password'];
$password = addslashes($password);
$password2 = $_POST['password2'];
$password2 = addslashes($password2);
$hidden = $_POST['hidden'];
if(($hidden != 1) || ($password != $password2)) {
    echo "<script>alert('비밀번호 양식을 확인해주세요.');location.href='/join.html';</script>";
    exit();
}
$name = $_POST['name'];
$name = addslashes($name);
if($name == NULL || $name == "") {
    echo "<script>alert('이름 양식을 확인해주세요.');location.href='/join.html';</script>";
    exit();
}
$gender = $_POST['gender'];
$gender = addslashes($gender);

$weight = $_POST['weight'];
$weight = addslashes($weight);
$hidden6 = $_POST['hidden6'];
if($weight == NULL || $weight == "") {
    echo "<script>alert('체중 양식을 확인해주세요.');location.href='/join.html';</script>";
    exit();
}

$birth = $_POST['birth'];
$birth = addslashes($birth);
$hidden2 = $_POST['hidden2'];
//if($birth == NULL || $birth == "" || $hidden2 != 1) {
//    echo "<script>alert('생년월일 양식을 확인해주세요.');location.href='/join.html';</script>";
//    exit();
//}
$address = $_POST['address'];
$address = addslashes($address);
//if($address == NULL || $address == "") {
//    echo "<script>alert('주소 양식을 확인해주세요.');location.href='/join.html';</script>";
//    exit();
//}
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
//    exit();
//}
date_default_timezone_set("Asia/Seoul");
$date = date("Y년 m월 d일 h시 i분 s초 a");
$sql = "select *from member where id ='$id'";
$res = $conn->query($sql);
if($res->num_rows > 0) { //아이디 값이 중복될 경우 php문을 종료시킨다.
    echo "<script>alert('이미 존재하는 아이디입니다.');location.href='/join.html';</script>";
    exit();
} else {
    $stmt = $conn->prepare("INSERT INTO member VALUES ('$id','$name','$password','$gender', '$weight', '$birth','$address','$number','$email','$date')");
    //DB쿼리문 입력(tableforchat 테이블에 담긴 정보를 불러옴)
    $stmt->execute();
    //stmt 실행
    //stmt로부터 결과값 얻고, result에 저장
    //출력 = 결과값을 한 행식 패치해서 담음
    echo "<script>alert('회원가입에 성공하였습니다.');location.href='/main.php';</script>";
}
//json 인코드(outp). echo는 하나 이상의 문자열을 출력한다.
?>