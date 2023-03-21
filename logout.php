<?php
session_start(); //세션 시작
$session=session_destroy(); //모든 세션 변수 지우기
if($session){//모든 세션 변수를 지웠다면
    header('Location: ./main.php'); // 로그아웃 성공 시 메인 페이지로 이동
}
?>