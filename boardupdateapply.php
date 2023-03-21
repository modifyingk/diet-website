<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_POST["x"], false);
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$boardnum = addslashes($obj->boardnum);
$boardtitle = addslashes($obj->boardtitle);
$boardcontent = addslashes($obj->boardcontent);
$filelists = addslashes($obj->filelists);
$stmt = $conn->prepare("UPDATE $obj->table SET boardtitle='$boardtitle',boardcontent='$boardcontent',filelists='$filelists' where boardnum='$boardnum'");
$stmt->execute();
$sql = "select *from board where boardnum='$boardnum' and boardtitle ='$boardtitle' and boardcontent ='$boardcontent'
and filelists='$filelists'";
$res = $conn->query($sql);
$row=mysqli_fetch_array($res);
$sql2 = "select *from boarduploadfile where starttime ='".$row['starttime']."' and userid='".$row['userid']."' and type='M'";
$res2 = $conn->query($sql2);
//파일 리스트를 불러온다.
if($res2->num_rows > 0) {
while($row2=mysqli_fetch_array($res2)) {
$filepath = str_replace('D:/','http://jgs901221.dlinkddns.com/uploads/',$row2['realname']);
$content = $row['boardcontent'];
if((substr_count($content,$filepath) == 0)) {
while(file_exists($row2['realname'])) {
unlink($row2['realname']);
$sql3 = "delete from boarduploadfile where realname ='".$row2['realname']."'";
$res3 = $conn->query($sql3);
}
}
}
}
//파일 리스트에 있는 링크와 동일한 링크가 존재하지 않을 경우 해당 DB내용을 삭제한다.
if($res->num_rows > 0) { //아이디 값이 중복될 경우 php문을 종료시킨다.
    echo json_encode('1');
    exit();
} else {
    echo json_encode('0');
}
?>