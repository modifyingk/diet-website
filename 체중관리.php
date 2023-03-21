<?php 
//text 및 html 유형 utf-8로 인코딩
header("Content-Type: text/html; charset=UTF-8"); 
//세션 시작
session_start();
?>
<!doctype html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--<link rel="stylesheet" href="assets/styles/index.css">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">-->
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  
  <title>체중관리</title>
  
</head>

<style>
  html, body{
background-color: #FFFFFF;
}
.main{
width: 100%;
display: block;
background: #ababab;
}
.content-wrap{
width: 100%;
margin:0 auto;
border: 4px solid rgba(161, 161, 161, 0.5); 
border-radius: 20px;
overflow: hidden;
background: #ddaf35;
}
.content-left{
background: #0b0809;
color:#ddaf35;
float: left;
width: 100%;
padding: 30px;
}
.main-wrap{
text-align: center;
padding: 20px 0 0 0;
}
.main-day{
font-size: 30px;
font-weight: bold;
}
.main-date{
font-size: 120px;
font-weight: bold;
margin: 20px 0;
}
.todo-wrap{
padding: 0 0 0 40px;
}
.todo-title{
font-size: 20px;
font-weight: 100;
margin: 0 0 10px 0;
}
.input-box{
width: 50%;
margin-right: 20px;
height: auto; 
background: #0b0809;
color: #ddaf35;
line-height : normal;
padding: .8em .5em 0 0; 
font-family: inherit;
border: 0; 
border-bottom: 1px dashed #ddaf35;; 
border-radius: 0; 
outline-style: none; 
-webkit-appearance: none; 
-moz-appearance: none; 
appearance: none;
}
.input-data{
cursor: pointer;
font-size: 10px;
padding: 10px;
margin: 10px 0 10px 0;
background: #ddaf35;
border: none;
color: #0b0809;
border-radius: 10px;
}
.input-data:hover{
background: #ffffff;
color: #0b0809;
}
.input-list > div{
font-size: 10px;
width: 60%;
float: left;
color: #ddaf35;
}
.input-list > .checked{
color: #FFFFFF;
text-decoration:line-through
}
.del-data{
display: block;
color: #ddaf35;
float: left;
width: 10%;
cursor: pointer;
font-size: 10px;
padding: 10px;
background: #0b0809;
border: none;
border-radius: 10px;
}
.content-right{
float: left;
width: 90%;
padding: 10px;
}
.sun{
color:#ef3333;
}
.sat{
color:#2107e0;
}
.content-right table tr td{
width: 40px;
height: 40px;
text-align: center;
font-size: 20px;
font-weight: bold;
}
.active{
background: #0b0809;
border-radius: 50%;
color: #ffffff;
}

@media(min-width: 850px){
.main{
display: flex;
align-items: center;
justify-content:  center;
width: 100vw;
height: 100vh;
background: #fdfdfd;
}
.content-wrap{
width: 850px;    /*박스의 양 옆 길이 원래:800 -> 변경 : 850 */
height: 600px;
margin:0 auto;
border: 4px solid rgba(161, 161, 161, 0.5); 
border-radius: 20px;
overflow: hidden;
background: #fd9cb1;
}
.content-left{
background: #0b0809;
color:#9584e4;
float: left;
width: 360px;
height: 600px;
padding: 50px 20px 20px 0;  /*왼쪽 박스의 padding으로 원래는 첫 번째 요소가 90px-> 변경: 50px*/
}
.main-wrap{
text-align: center;
margin: 10px 0 0 0; /* 원래 :20-> 변경:10*/
}
.main-day{
font-size: 30px;
font-weight: bold;
}
.main-date{
font-size: 120px;
font-weight: bold;
margin: -10px 0; /*원래:20->변경:-10 = todo 적는 곳 올라감*/
}
.todo-wrap{
padding: 0 0 0 20px;
}
.todo-title{
font-size: 20px;
font-weight: 100;
margin: 0 0 0px 0; /*원래: 10px*/
}
.input-box{
width: 60%;
height: auto; 
background: #0b0809;
color: #dd9435;
line-height : normal;
padding: .8em .5em 0 0; 
font-family: inherit;
border: 0; 
border-bottom: 0px dashed #ddaf35;; 
border-radius: 0; 
outline-style: none; 
-webkit-appearance: none; 
-moz-appearance: none; 
appearance: none;
}
.input-data{    /*input 버튼*/
cursor: pointer;
font-size: 10px;
padding: 4px;  /* input위치 원래:10->4px*/
margin: 20px 0 30px 0;
background: #9584e4;
border: none;
color: #0b0809;
border-radius: 10px;
}
.input-data:hover{
background: #ffffff;
color: #0b0809;
}
.input-list > div{
font-size: 17px;    /*to do list 글씨 크기 원래:30->변경:17*/
width: 60%;
float: left;
color: #9584e4;  /*list 목록 색*/
}
.del-data{
display: block;
color: #ddaf35;
float: left;
width: 10%;
cursor: pointer;
font-size: 10px;
padding: 0px;   /*x버튼의 x위치 원래:10->0px*/
background: #0b0809;
border: none;
border-radius: 10px; /* to do list 지우는 x버튼 각진정도*/
}
.content-right{
float: left;
width: 360px;
height: 600px;
padding: 70px 20px 20px 20px; /* 오른쪽 달력 paading 처음꺼가 위쪽 원래:100->변경:70*/
}
.sun{
color:#ef3333;
}
.sat{
color:#2107e0;
}
.content-right table tr td{
width: 50px;
height: 50px;
text-align: center;
font-size: 19.5px;
font-weight: bold;
}
.active{
background: #0b0809;
border-radius: 50%;
color: #ffffff;
}
}
</style>

<body>

 
		<!-- Wrapper -->
    <div id="wrapper">

      <!-- Header -->
        <header id="header">
          <div class="inner">

            <!-- Logo -->
              <a href="main.php" class="logo">
                <span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Health Care</span>
              </a>

            <!-- Nav -->
            <nav>
                        <ul>
                            <!--<li><a href="main.php">공돌이광식</a></li>-->
                            <!--<li><a href="join.html" style="float:right; margin-left:10px;">MEMBER INFO</a></li>
                            <li><a href="main.php" style="float:right">LOGOUT</a></li>-->
                            <li><a href="board.php" style="color:;"><b>BOARD</b></a></li>
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
							<li><a href="건강한생활습관.php">건강한 생활습관</a></li>
							<li><a href="홈트레이닝.php">홈 트레이닝</a></li>
							
						</ul>
          </nav>
          
              <!-- Main -->
              <div id="main">
                <div class="inner">
                   <h1>체중관리🍰</h1>
                   <p> 
                    매일 <b>체중을 기록</b>하여 체중을 관리해보세요. 체중의 변화를 보면서 <b>자극 또는 성취감</b>을 느낄 수 있을거에요.
                    운동을 하시는 분이시라면 자신만의 <b>운동 리스트</b>를 적어도 좋아요. 시간이 지난 후에 자신이 어떻게 체중을 변화시켰는지 되돌아볼 수 있을거에요.
                    아래의 달력을 자신만의 다양한 방법으로 이용해보세요. <br><br>
                    <b>칼로리 관리 버튼</b>을 통해 매일 <b>먹은 음식과 칼로리를 기록</b>하여 자신의 <b>섭취 칼로리를 관리</b>할 수도 있어요. 체중관리에 있어서 칼로리는 매우 중요하죠.
                    매일매일의 칼로리를 기록해 체중을 관리해보세요.<br><br>
                  </p>
                  <ul class="actions fit">
                    <li><a href="kcal.php" class="button primary fit" width="50px" height="20px">칼로리 관리</a></li>
                  </ul>

</div></div>


  <div class="main">
    <div class="content-wrap">
      <div class="content-left">
        <div class="main-wrap">
          <div id="main-day" class="main-day"></div>
          <div id="main-date" class="main-date"></div>
        </div>
        <div class="todo-wrap">
          <div class="todo-title">Todo List</div>
          <div class="input-wrap">
            <input type="text" placeholder="please write here!!" id="input-box" class="input-box">
            <button type="button" id="input-data" class="input-data">INPUT</button>
            <div id="input-list" class="input-list"></div>
          </div>
        </div>
      </div>
      <div class="content-right">
        <table id="calendar" align="center">
          <thead>
            <tr class="btn-wrap clearfix">
              <td>
                <label id="prev">
                    &#60;
                </label>
              </td>
              <td align="center" id="current-year-month" colspan="5"></td>
              <td>
                <label id="next">
                    &#62;
                </label>
              </td>
            </tr>
            <tr>
                <td class = "sun" align="center">Sun</td>
                <td align="center">Mon</td>
                <td align="center">Tue</td>
                <td align="center">Wed</td>
                <td align="center">Thu</td>
                <td align="center">Fri</td>
                <td class= "sat" align="center">Sat</td>
              </tr>
          </thead>
          <tbody id="calendar-body" class="calendar-body"></tbody>
        </table>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    var currentTitle = document.getElementById('current-year-month');
var calendarBody = document.getElementById('calendar-body');
var today = new Date();
var first = new Date(today.getFullYear(), today.getMonth(),1);
var dayList = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var monthList = ['January','February','March','April','May','June','July','August','September','October','November','December'];
var leapYear=[31,29,31,30,31,30,31,31,30,31,30,31];
var notLeapYear=[31,28,31,30,31,30,31,31,30,31,30,31];
var pageFirst = first;
var pageYear;
if(first.getFullYear() % 4 === 0){
    pageYear = leapYear;
}else{
    pageYear = notLeapYear;
}

function showCalendar(){
    let monthCnt = 100;
    let cnt = 1;
    for(var i = 0; i < 6; i++){
        var $tr = document.createElement('tr');
        $tr.setAttribute('id', monthCnt);   
        for(var j = 0; j < 7; j++){
            if((i === 0 && j < first.getDay()) || cnt > pageYear[first.getMonth()]){
                var $td = document.createElement('td');
                $tr.appendChild($td);     
            }else{
                var $td = document.createElement('td');
                $td.textContent = cnt;
                $td.setAttribute('id', cnt);                
                $tr.appendChild($td);
                cnt++;
            }
        }
        monthCnt++;
        calendarBody.appendChild($tr);
    }
}
showCalendar();

function removeCalendar(){
    let catchTr = 100;
    for(var i = 100; i< 106; i++){
        var $tr = document.getElementById(catchTr);
        $tr.remove();
        catchTr++;
    }
}

function prev(){
    inputBox.value = "";
    const $divs = document.querySelectorAll('#input-list > div');
    $divs.forEach(function(e){
      //e.remove();
    });
    const $btns = document.querySelectorAll('#input-list > button');
    $btns.forEach(function(e1){
      //e1.remove();
    });
    if(pageFirst.getMonth() === 1){
        pageFirst = new Date(first.getFullYear()-1, 12, 1);
        first = pageFirst;
        if(first.getFullYear() % 4 === 0){
            pageYear = leapYear;
        }else{
            pageYear = notLeapYear;
        }
    }else{
        pageFirst = new Date(first.getFullYear(), first.getMonth()-1, 1);
        first = pageFirst;
    }
    today = new Date(today.getFullYear(), today.getMonth()-1, today.getDate());
    currentTitle.innerHTML = monthList[first.getMonth()] + '&nbsp;&nbsp;&nbsp;&nbsp;'+ first.getFullYear();
    removeCalendar();
    showCalendar();
    showMain();
    clickedDate1 = document.getElementById(today.getDate());
    clickedDate1.classList.add('active');
    clickStart();
    reshowingList();
}

function next(){
    inputBox.value = "";
    const $divs = document.querySelectorAll('#input-list > div');
    $divs.forEach(function(e){
      e.remove();
    });
    const $btns = document.querySelectorAll('#input-list > button');
    $btns.forEach(function(e1){
      e1.remove();
    });
    if(pageFirst.getMonth() === 12){
        pageFirst = new Date(first.getFullYear()+1, 1, 1);
        first = pageFirst;
        if(first.getFullYear() % 4 === 0){
            pageYear = leapYear;
        }else{
            pageYear = notLeapYear;
        }
    }else{
        pageFirst = new Date(first.getFullYear(), first.getMonth()+1, 1);
        first = pageFirst;
    }
    today = new Date(today.getFullYear(), today.getMonth() + 1, today.getDate());
    currentTitle.innerHTML = monthList[first.getMonth()] + '&nbsp;&nbsp;&nbsp;&nbsp;'+ first.getFullYear();
    removeCalendar();
    showCalendar(); 
    showMain();
    clickedDate1 = document.getElementById(today.getDate());
    clickedDate1.classList.add('active');  
    clickStart();
    reshowingList();
}

function showMain(){
    
    mainTodayDay.innerHTML = dayList[today.getDay()];
    mainTodayDate.innerHTML = today.getDate();
}
var mainTodayDay = document.querySelector('#main-day');
var mainTodayDate = document.querySelector('#main-date');

var clickedDate1 = document.getElementById(today.getDate());
clickedDate1.classList.add('active');
var prevBtn = document.getElementById('prev');
var nextBtn = document.getElementById('next');
prevBtn.addEventListener('click',prev);
nextBtn.addEventListener('click',next);
var tdGroup = [];
function clickStart(){
    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        tdGroup[i] = document.getElementById(i);
        tdGroup[i].addEventListener('click',changeToday);
    }
}
function changeToday(e){
    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        if(tdGroup[i].classList.contains('active')){
            tdGroup[i].classList.remove('active');
        }
    }
    clickedDate1 = e.currentTarget;
    clickedDate1.classList.add('active');
    today = new Date(today.getFullYear(), today.getMonth(), clickedDate1.id);
    showMain();
    keyValue = today.getFullYear() + '' + today.getMonth()+ '' + today.getDate();
    reshowingList();
}

function reshowingList(){
    keyValue = today.getFullYear() + '' + today.getMonth()+ '' + today.getDate();
    if(todoList[keyValue] === undefined){
        inputList.textContent = '';
        todoList[keyValue] = [];
        const $divs = document.querySelectorAll('#input-list > div');
        $divs.forEach(function(e){
          e.remove();
        });
        const $btns = document.querySelectorAll('#input-list > button');
        $btns.forEach(function(e1){
          e1.remove();
        });
    }else if(todoList[keyValue].length ===0){
        inputList.textContent = "";
        const $divs = document.querySelectorAll('#input-list > div');
        $divs.forEach(function(e){
          e.remove();
        });
        const $btns = document.querySelectorAll('#input-list > button');
        $btns.forEach(function(e1){
         e1.remove();
        });
    }else{
        const $divs = document.querySelectorAll('#input-list > div');
        $divs.forEach(function(e){
          e.remove();
        });
        const $btns = document.querySelectorAll('#input-list > button');
        $btns.forEach(function(e1){
          e1.remove();
        });
        var $div = document.createElement('div');
        for(var i = 0; i < todoList[keyValue].length; i++){
            var $div = document.createElement('div');
            $div.textContent = '-' + todoList[keyValue][i];
            var $btn = document.createElement('button');
            $btn.setAttribute('type', 'button'); 
            $btn.setAttribute('id', 'del-ata');
            $btn.setAttribute('id', dataCnt+keyValue);
            $btn.setAttribute('class', 'del-data');
            $btn.textContent = delText;
            inputList.appendChild($div);
            inputList.appendChild($btn);
            $div.addEventListener('click',checkList);
            $btn.addEventListener('click',deleteTodo);
            inputBox.value = '';
            function deleteTodo(){
                $div.remove();
                $btn.remove();
            }
        }
    }

}
var inputBox = document.getElementById('input-box');
var inputDate = document.getElementById('input-data');
var inputList = document.getElementById('input-list');
var delText = 'X';
inputDate.addEventListener('click',addTodoList);
var dataCnt = 1;
var keyValue = today.getFullYear() + '' + today.getMonth()+ '' + today.getDate();
let todoList = [];
todoList[keyValue] = [];
function addTodoList(){
    var $div = document.createElement('div');
    $div.textContent = '-' + inputBox.value;
    var $btn = document.createElement('button');
    $btn.setAttribute('type', 'button'); 
    $btn.setAttribute('id', 'del-ata');
    $btn.setAttribute('id', dataCnt+keyValue);
    $btn.setAttribute('class', "del-data");
    $btn.textContent = delText;
    inputList.appendChild($div);
    inputList.appendChild($btn);
    todoList[keyValue].push(inputBox.value);
    dataCnt++;
    inputBox.value = '';
    $div.addEventListener('click',checkList);
    $btn.addEventListener('click',deleteTodo);
    function deleteTodo(){
        $div.remove();
        $btn.remove();
    }
}
console.log(keyValue);
function checkList(e){
    e.currentTarget.classList.add('checked');
}
</script>
</body>
</html>

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





<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>




</html>