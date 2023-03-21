<?php header("Content-Type: text/html; charset=UTF-8"); 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!--<title>Insert title here</title>
        <title>Generic - Phantom by HTML5 UP</title> 나중에 넣을 것-->
        <meta charset="UTF-8" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1"/> 원래-->
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        
        </head>



<body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <div class="inner">
    
                <!-- Logo -->
                    <a href="main.php" class="logo">
                        <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">HEALTH CARE</span>
                        
                    </a>
    
                <!-- Nav -->
                    <nav>
                        <ul>
                            
                            <li><a href="board.php" style="color:; "><b>BOARD</b></a></li>
                            <div class="menu_img" id="mic" onclick="menu_img_click()"></div>
<?php if(!isset($_SESSION['id'])){ ?>
<li><a href="join.html" style="float:right; margin-left:10px;">JOIN</a></li>
<li><a href="login.html" style="float:right">LOGIN</a></li>
<?php } ?>
<?php if(isset($_SESSION['id'])){ ?>
<li><a href="logout.php" style="float:right;">LOGOUT</a></li>
<li><a href="joinedit.php" style="float:right;">MEMBER-INFO</a></li>
<?php } ?>
                            <li><a href="#menu">Menu</a></li>
                                
                        </ul>
                    </nav>
    
            </div>
        </header>


<!-- Menu -->
<nav id="menu">
        <h2>Menu</h2>
        <ul>
        <li><a href="main.php">HOME</a></li>
		<li><a href="joinedit.php">개인정보수정</a></li>
		<li><a href="다이어트.php">다이어트</a></li>
		<li><a href="건강한생활습관.html">건강한 생활습관</a></li>
		<li><a href="홈트레이닝.html">홈 트레이닝</a></li>
        </ul>
    </nav>

<!-- Main -->
<div id="main">

		<div class="inner">
			<!--<h1>JOIN</h1>-->
			<header class='form-header'><!--🎈📖📚🖋💡-->
				<h1>BOARD📝</h1>
			</header>

<?php include 'db.php';
//현재 페이지
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}
//현재 블록번호
if(isset($_GET['pagination'])){
    $pagination = $_GET['pagination'];
}else{
    $pagination = 1;
}
$sql = "select *from board";
$res = $conn->query($sql);
$totalboardnum = mysqli_num_rows($res); //총 게시물 수
$totalpagenum = ceil($totalboardnum/10); //총 페이지 수 = 총 게시물 수 / 한 페이지당 나타낼 게시물 수
$totalblocknum = ceil($totalpagenum/5); //총 블록 수 = 총 페이지 수 / 한 블록에 나타낼 페이지 수
$currentpagenum = (($page-1)*10); //현재 페이지 번호 = (페이지 번호-1)*3
$sql2 = "select *from board order by boardnum asc limit $currentpagenum,10";
$res2 = $conn->query($sql2);
$num2=(($page-1)*10)+1;
?>
<!--<div class="menu_img" id="mic" onclick="menu_img_click()"></div>-->
<!--<?php if(!isset($_SESSION['id'])){ ?>
<li><a href="join.html" style="float:right; margin-left:10px;">JOIN</a></li>
<li><a href="login.html" style="float:right">LOGIN</a></li>
<?php } ?>
<?php if(isset($_SESSION['id'])){ ?>
<li><a href="logout.php" style="float:right;">LOGOUT</a></li>
<li><a href="joinedit.php" style="float:right;">MEMBER &nbsp;&nbsp;INFO</a></li>
<?php } ?>-->


<!--</nav>-->

<section>
<div class="table-wrapper"><table>
<!--<div id="contents" style="margin-top:0; border:1px solid; position:absolute; z-index:1; background:black;"><a href="board.php" style="color:white; font-size:20px;"><b>게시판</b></a></div>-->
<input type="hidden" id="c" value="">


<thead>
<tr style = "border-left: solid 0px"> 
    <th>NUM</th>
    <th>TITLE</th>
    <th>WRITER</th>
    <th>DATE</th>
    <th>HIT</th>
</tr>
</thead>
<tbody>
<?php while ($row=mysqli_fetch_array($res2)) { $num=$row['boardnum'];
$title=str_replace(">","&gt;",str_replace("<","&lt;",str_replace($row['boardtitle'], mb_substr($row['boardtitle'],0,40,"utf-8")."...",$row['boardtitle'])));
$title2=str_replace(">","&gt;",str_replace("<","&lt;",$row['boardtitle']));
?>
<tr style = "cursor:pointer; border-left: solid 0px;" onClick = "location.href='/boardread.php?x=<?php echo $num;?>'"><th><?php echo $num2;?></th><th><?php if(mb_strlen($row['boardtitle'],"utf-8") > 30) {echo $title;} else {echo $title2;}?></th><th><?php echo $row['userid'];?></th><th><?php echo mb_substr($row['date'],0,30,"utf-8");?></th><th><?php echo $row['hit'];?></th></tr>
<?php $num2++;}?>
</tbody>
<tfoot>
    <tr>
	</tr>
</tfoot>
</table>
</div>
</section>

<div class="center">
<div class="pagination">

<ol><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol>
<ol><ol><ol><ol><ol><ol><ol><ol><ol><ol><ol>

<?php 
$before=$pagination-1; //현재 블록 위치 -1
$after=$pagination+1; //현재 블
$before2=$before*5; //변동 요망
$after2=$after*5-4;

if($pagination>1)
{
    echo "<a href='/board.php?pagination=$before&page=$before2'>&laquo;</a>";
}
for($i=$pagination*5-4; $i<=$pagination*5; $i++)
{
    if($i<=$totalpagenum) {
    echo "<a href='/board.php?pagination=$pagination&page=$i'>[$i]</a>";
    } else {
        break;
    }
}
if($pagination<$totalblocknum) {
    echo "<a href='/board.php?pagination=$after&page=$after2'>&raquo;</a>";
}
?>

</ol></ol></ol></ol></ol></ol></ol></ol></ol></ol></ol></ol></ol></ol>
</ol></ol></ol></ol></ol></ol></ol></ol></ol></ol></ol>
</div>

<?php if((isset($_SESSION['id']) && isset($_SESSION['username']))) { ?>
    <ul class="actions">
    <li><a class="button" button style="position:absolute; right:100px; border:1px solid; background:none;" onclick="location.href='/boardwrite.php?clicktime=<?php echo time(); ?>'">POST</a></li>
    </ul>
    <?php } ?>
</div>
</div></div>
<!--<footer>&copy; 2019 by 공돌이광식</footer>-->
<br><br>
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <section>
            <h2>Get in touch</h2>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field half">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="field half">
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="field">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send" class="primary" /></li>
                </ul>
            </form>
        </section>
        <section>
            <h2>Follow</h2>
            <ul class="icons">
                <li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
                <li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
                <li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
            </ul>
        </section>
        <ul class="copyright">
							<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							 <li>&copy; 2019 by 공돌이광식</li><li>&copy; Untitled. All rights reserved</li></li><li>&copy; bqlqn</li>
							 <li>&copy; https://blog.yonseibon.co.kr/life/%EB%88%88-%EA%B1%B4%EA%B0%95-%EC%A7%80%ED%82%A4%EB%8A%94-%EC%83%9D%ED%99%9C%EC%8A%B5%EA%B4%80/</li>
							 <li>&copy; https://bonlivre.tistory.com/143</li><li>&copy;https://medium.com/@wooder2050</li><li>&copy;http://jin2nul2.com/</li>
               <li>&copy; https://1freewallpapers.com/</li><li>&copy; https://rel0608.tistory.com/</li><li>&copy;https://www.emojiall.com/ko</li>
               <li>&copy; https://ddochi-dev.tistory.com/</li>
							</ul>
    </div>
</footer>
<!-- footer의 div--></div>

<script type="text/javascript">
function menu_img_click() {
	x=document.getElementById('c');
	x3=document.getElementById('contents');
	x2=document.getElementById('mic');
	if (x.value == "") {
		x2.style.background = 'url(nav.png) 0 30px';
	    x3.style.display = "block";
	    x.value="1";
	  } else {
		x2.style.background = 'url(nav.png) 0 0';
	    x3.style.display = "none";
	    x.value="";
	  }
	}
</script>



<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>