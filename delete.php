<!DOCTYPE html>
<html>
<body>
<?php
header("Content-Type: text/html; charset=UTF-8"); 
session_start();

$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');
$filename = $_GET['filename'];
$filename = addslashes($filename);

$sql = "select *from boarduploadfile where realname='$filename'";
$res = $conn->query($sql);
$row=mysqli_fetch_array($res);
if($res->num_rows > 0) {
if($row['userid'] == $_SESSION['id']) {
while(file_exists($filename)) {
    unlink($filename);
}
}
$sql2 = "delete from boarduploadfile where realname='$filename'";
$res2 = $conn->query($sql2);
}

$sql3 = "select *from boarduploadfile where starttime='".$_GET['starttime']."' and userid='".$_SESSION['id']."' and type='F'";
$res3 = $conn->query($sql3);
?>
<script>
parent.document.getElementById("filelist").innerHTML = "<?php while($row2=mysqli_fetch_array($res3)) { echo "<a href='download.php?filepath=".$row2['realname']."&filename=".$row2['fakename']."'>".$row2['fakename']."</a><a style='float:right;' href='delete.php?filename=".$row2['realname']."&starttime=".$_GET['starttime']."' target='delete'>삭제</a><br>"; } ?>";
</script>
</body>
</html>