<?php header("Content-Type: text/html; charset=UTF-8");
session_start();
/*if(!(isset($_SESSION['id']) && isset($_SESSION['username']))) {
    echo "<script>location.href='login.html';</script>";
    exit();
}
*/
$conn = new mysqli("localhost","root","","web");
mysqli_query ($conn, 'SET NAMES utf8');

$fileTmpLoc = $_FILES["file3"]["tmp_name"]; 
if (!$fileTmpLoc) { //선택한 파일이 없을 경우
    echo "선택한 파일이 없습니다.";
    exit();
}
//fileTmpLoc에 임시 폴더에 저장되는 업로드 파일의 이름을 저장한다.
$fileName = $_FILES["file3"]["name"];
//fileName에 업로드하는 파일 이름을 저장한다.
$ext = pathinfo($fileName,PATHINFO_EXTENSION);
//파일의 확장자 명을 저장한다.
if(strtolower($ext) != "png" && strtolower($ext) != "jpg" && strtolower($ext) 
        	!= "bmp" && strtolower($ext) != "gif" && strtolower($ext) != "dib"
        	&& strtolower($ext) != "jpeg" && strtolower($ext) != "jpe"
        	&& strtolower($ext) != "jfif" && strtolower($ext) != "tif"
        	&& strtolower($ext) != "tiff" && strtolower($ext) != "mp3"
	&& strtolower($ext) != "mp4") {
        	echo "업로드 할 수 없는 형식의 파일입니다.";
	exit();
}
//업로드한 파일의 확장자명이 이미지 파일이 아닐 경우 업로드 할 수 없다는 경고문을 보내준다.
$fileSize = $_FILES["file3"]["size"]; //파일의 크기를 저장한다.
if(strtolower($ext) != "mp4" && strtolower($ext) != "mp3") {
if($fileSize > 10*pow(1024,2)) {
	echo "첨부할 수 있는 최대 용량은 10MB입니다.";
	exit();
}
}
if(strtolower($ext) == "mp4" || strtolower($ext) == "mp3") {
if($fileSize > 300*pow(1024,2)) {
	echo "첨부할 수 있는 최대 용량은 300MB입니다.";
	exit();
}
}
$num = 1;
//중복된 파일이 존재할 경우 1을 붙여줄 것이다.
$fileName = basename($fileName,".$ext");
$fileName = preg_replace("/[^a-zA-Z0-9_]/",'_',$fileName);
$target_file = "$fileName".".$ext";
if (file_exists($target_file)) {
	//같은 이름의 파일이 이미 존재할 경우
	$fileName = basename($target_file,".$ext");
            while(file_exists($target_file)) {
	//같은 확장자 및 같은 이름을 지닌 파일이 없을때까지 반복
		$fileName2 = $fileName."_$num";
		//같은 이름의 파일이 있다면 파일명을 변경해준다. 예) test에서 test_1로 여기서 1은 $num에 저장된 값
                         $target_file = "".$fileName2.".$ext";
		//변경한 파일명을 저장해준다. 예) D:/test.txt 에서 D:/test_1.txt 로
                         $num++; 
		//같은 이름의 파일이 존재하는한 num은 1씩 증가하며, 파일의 이름을 변경해주는데 쓰인다.
            }
}

//$fileType = $_FILES["file1"]["type"]; //파일의 형식을 저장한다.
//$fileErrorMsg = $_FILES["file1"]["error"]; //0은 실패, 1은 성공을 뜻한다.
//$_POST['userid']; //$_POST['starttime'];
if(move_uploaded_file($fileTmpLoc, $target_file)){
	$size = filesize($target_file);
            if ($size >= pow(1024,3)) {
                $size = round($size/(pow(1024,3)),2)."GB";
            } else if ($size >= pow(1024,2)) {
                $size = round($size/(pow(1024,2)),2)."MB";
            } else if ($size >= pow(1024,1)) {
                $size = round($size/(pow(1024,1)),2)."KB";
            } else { 
                $size = $size."Bytes";
            }
	$sql = "INSERT INTO eyebody(realname,fakename,size,type)
VALUES ('$target_file','".$fileName.".$ext"."','".$size."','M')";
	$res = $conn->query($sql);
//임시 폴더에 저장된 파일이 지정해준 경로에 지정해준 이름으로 옮겨졌다면
if(strtolower($ext) != "mp3" && strtolower($ext) != "mp4") {
    echo "<img src='".str_replace('D:/','http://jgs901221.dlinkddns.com/uploads/',$target_file)."'>";
	} else if (strtolower($ext) == "mp4") {
		$fileName3 = basename($target_file,".$ext");
		$fileName3 = "$fileName3"."$ext";
		echo "<div style='z-index:-1'><script>function s".$fileName3."f() { s".$fileName3.".document.getElementById('myVideo').src='".str_replace('D:/','http://jgs901221.dlinkddns.com/uploads/',$target_file)."'; }</script><iframe class='mp4' name='s".$fileName3."' src='iframe.html' onload='s".$fileName3."f()'></iframe></div>";	
	} else if (strtolower($ext) == "mp3") {
		$fileName3 = basename($target_file,".$ext");
		$fileName3 = "$fileName3"."$ext";
		echo "<div style='z-index:-1'><script>function s".$fileName3."f() { s".$fileName3.".document.getElementById('myAudio').src='".str_replace('D:/','http://jgs901221.dlinkddns.com/uploads/',$target_file)."'; }</script><iframe class='mp3' name='s".$fileName3."' src='iframe2.html' onload='s".$fileName3."f()'></iframe></div>";
	}
} else {
    echo "업로드 실패";
}
?>