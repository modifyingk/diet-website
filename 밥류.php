<?php 
//text 및 html 유형 utf-8로 인코딩
header("Content-Type: text/html; charset=UTF-8"); 
//세션 시작
session_start();
?>
<!DOCTYPE HTML>
<!--
   Phantom by HTML5 UP
   html5up.net | @ajlkn
   Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
   <head>
      <title>밥류</title>
      <meta charset="utf-8" />
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
                     <h1>밥류</h1>
                     <span class="image main"><img src="images/pic17.jpg" alt="" /></span>
                     <section>
                        <div class="row">
                        <div class="col-6 col-12-medium">

                        <HTML>
                           <HEAD>
                           <title>Searching for text: JavaScript</title>
                           </HEAD>
                           <body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#660099" onLoad="if(top.changeAD)top.changeAD()">
                           <a name="top"></a>
                           
                           <h2><font color="salmon">
                           메뉴찾기
                        </font></h2>
                           <form name="f1" action="" onSubmit="if(this.t1.value!=null && this.t1.value!='') findString(this.t1.value);return false">
                              <input type="text" name=t1 placeholder="메뉴를 입력하세요" size=20>
                              <h3></h3>
                              <input type="submit" name=b1 value="Find">
                           </form>
                           
                           <script language="JavaScript">
                           var TRange=null;
                           
                           function findString (str) {
                            if (parseInt(navigator.appVersion)<4) return;
                            var strFound;
                            if (navigator.appName=="Netscape") {
                           
                             // NAVIGATOR-SPECIFIC CODE
                           
                             strFound=self.find(str);
                             if (!strFound) {
                             strFound=self.find(str,0,1);
                             while (self.find(str,0,1)) continue;
                             }
                            }
                            if (navigator.appName.indexOf("Microsoft")!=-1) {
                           
                             // EXPLORER-SPECIFIC CODE
                           
                             if (TRange!=null) {
                             TRange.collapse(false);
                             strFound=TRange.findText(str);
                             if (strFound) TRange.select();
                             }
                             if (TRange==null || strFound==0) {
                             TRange=self.document.body.createTextRange();
                             strFound=TRange.findText(str);
                             if (strFound) TRange.select();
                             }
                            }
                            if (!strFound) alert ("String '"+str+"' not found!");
                           }
                           </script>                     
                           </BODY>
                           </HTML> </div>

                           <div class="col-6 col-12-medium">
                              <h2><font color="white">
                                 메뉴찾기
                              </font></h2>
      
                           <form method=get action="http://www.google.co.kr/search" target="_blank" >   <body bgcolor="white">    
                              <tr>       
                                 <td>           
                              <input type=text name=q size=25 maxlength=255 placeholder="아래에 없는 메뉴는 GOOGLE을 이용하세요" /> <!-- 구글 검색 입력 창 -->  
                              <h3></h3>         
                             <input type=submit name=btnG value="Google 검색" /> <!-- 검색 버튼 -->       
                          </td>     
                       </tr>   
                     </body> 
                 </form>
</div></div>
<!--<script>
   function cssChange(){  
         location.reload();
   }
   </script>-->


<div class="row">
   <div class="col-6 col-12-medium">
      
<hr size = "5px"></hr>
<h1></h1>
<h2><font color="#F84647">해당하는 유형의 질병을 클릭하세요</font></h2>
<!--<a onClick="window.location.reload()" style="cursor: pointer;">고혈압</a>-->
<button type="button" onclick="cssChange0();cssChange();" >고혈압</button>
<script>
	function cssChange0(){
		var a = document.getElementById("흰쌀밥");
		var b = document.getElementById("현미밥");
		var c = document.getElementById("흑미밥");
		var d = document.getElementById("리조또");
		var e = document.getElementById("호박죽");
		var f = document.getElementById("전복죽");
		var g = document.getElementById("녹두죽");
		var h = document.getElementById("비빔밥");
		var i = document.getElementById("김밥");
		var j = document.getElementById("유부초밥");
		var k = document.getElementById("스시");
		var l = document.getElementById("카레");
		var m = document.getElementById("양송이스프");
		var n = document.getElementById("김치찌개");
		var o = document.getElementById("된장찌개");
		var p = document.getElementById("미역국");
		var q = document.getElementById("시래기국");
		var r = document.getElementById("육개장");
		var s = document.getElementById("부대찌개");
		var t = document.getElementById("콩나물국");
		var u = document.getElementById("소고기무국");
		var v = document.getElementById("청국장");
		var w = document.getElementById("곰탕");
		var x = document.getElementById("시금치무침");
		var y = document.getElementById("양파장아찌");
		var z = document.getElementById("어묵볶음");
		var a1 = document.getElementById("멸치볶음");
		var a2 = document.getElementById("버섯볶음");
		var a3 = document.getElementById("도토리묵");
		var a4 = document.getElementById("계란장조림");
		var a5 = document.getElementById("계란말이");
		var a6 = document.getElementById("콩자반");
		var a7 = document.getElementById("두부조림");
		var a8 = document.getElementById("은행구이");
		var a9 = document.getElementById("무말랭이");
		var a0 = document.getElementById("모시조개");
		var b1 = document.getElementById("콩나물무침");
		var b2 = document.getElementById("김");
		var b3 = document.getElementById("고등어구이");
		var b4 = document.getElementById("계란프라이");
		var b5 = document.getElementById("삶은계란");
		var b6 = document.getElementById("호박");
		var b7 = document.getElementById("생강");
		var b8 = document.getElementById("인삼");
		var b9 = document.getElementById("무");
		var b0 = document.getElementById("아보카도");
		var c1 = document.getElementById("브로콜리");
		var c2 = document.getElementById("쑥");
		var c3 = document.getElementById("부추");
		var c4 = document.getElementById("양송이버섯");
		var c5 = document.getElementById("표고버섯");
		var c6 = document.getElementById("칡");
		var c7 = document.getElementById("배추");
		var c8 = document.getElementById("마늘");
		var c9 = document.getElementById("미역");
		var c0 = document.getElementById("토마토");
		var d1 = document.getElementById("당근");
		var d2 = document.getElementById("피망");
		var d3 = document.getElementById("양파");
		var d4 = document.getElementById("다시마");
		var d5 = document.getElementById("단호박");
		var d6 = document.getElementById("감자");
		var d7 = document.getElementById("고구마");

		a.style.color = "black";    		
		b.style.color = "black";     
		c.style.color = "black";     
		d.style.color = "black";     
		e.style.color = "black";     
		f.style.color = "black";     
		g.style.color = "black";     
		h.style.color = "black";     
		i.style.color = "black";     
		j.style.color = "black";     
		k.style.color = "black";     
		l.style.color = "black";     
		m.style.color = "black";   
		n.style.color = "black";     
		o.style.color = "black";     
		p.style.color = "black";     
		q.style.color = "black";     
		r.style.color = "black";     
		s.style.color = "black";     
		t.style.color = "black";     
		u.style.color = "black";     
		v.style.color = "black";     
		w.style.color = "black";     
		x.style.color = "black";     
		y.style.color = "black";     
		z.style.color = "black";     
		a1.style.color = "black";     
		a2.style.color = "black";     
		a3.style.color = "black";     
		a4.style.color = "black";     
		a5.style.color = "black";     
		a6.style.color = "black";     
		a7.style.color = "black";     
		a8.style.color = "black";     
		a9.style.color = "black";     
		a0.style.color = "black";     
		b1.style.color = "black";     
		b2.style.color = "black";     
		b3.style.color = "black";     
		b4.style.color = "black";     
		b5.style.color = "black";     
		b6.style.color = "black";     
		b7.style.color = "black";     
		b8.style.color = "black";     
		b9.style.color = "black";     
		b0.style.color = "black";     
		c1.style.color = "black";     
		c2.style.color = "black";     
		c3.style.color = "black";     
		c4.style.color = "black";     
		c5.style.color = "black";     
		c6.style.color = "black";     
		c7.style.color = "black";     
		c8.style.color = "black";     
		c9.style.color = "black";     
		c0.style.color = "black";     
		d1.style.color = "black";     
		d2.style.color = "black";     
		d3.style.color = "black";     
		d4.style.color = "black";     
		d5.style.color = "black";     
		d6.style.color = "black";     
		d7.style.color = "black";       
 


	}
</script>
<script>
   function cssChange() {  
   var x = document.getElementById("리조또");
      var y = document.getElementById("비빔밥");
      var z = document.getElementById("김치찌개");
      var a = document.getElementById("된장찌개");
      var b = document.getElementById("육개장");
      var c = document.getElementById("부대찌개");
      var d = document.getElementById("청국장");
      var k = document.getElementById("양파장아찌");
      var e = document.getElementById("두부조림");



      x.style.color = "#F84647";     y.style.color = "#F84647"; 
       z.style.color = "#F84647";      a.style.color = "#F84647";     b.style.color = "#F84647"; 
      c.style.color = "#F84647";    
      d.style.color = "#F84647";     
      e.style.color = "#F84647";    
      k.style.color = "#F84647";     
   
   }

</script>


<button type="button" onclick="cssChange0();cssChange1();" >당뇨병</button>
<script>
function cssChange1() {
   var x = document.getElementById("리조또");
      var y = document.getElementById("호박죽");
      var z = document.getElementById("유부초밥");
      var a = document.getElementById("부대찌개");
      var b = document.getElementById("어묵볶음");
      var c = document.getElementById("콩자반");


      x.style.color = "#F84647";     y.style.color = "#F84647"; 
       z.style.color = "#F84647";      a.style.color = "#F84647";     b.style.color = "#F84647"; 
      c.style.color = "#F84647";    
   
   }

</script>

<button type="button" onclick="cssChange0();cssChange2();" >심장질환</button>
<script>
function cssChange2() {
   var x = document.getElementById("리조또");
      var y = document.getElementById("비빔밥");
      var z = document.getElementById("김밥");
      var a = document.getElementById("유부초밥");
      var b = document.getElementById("김치찌개");
      var c = document.getElementById("된장찌개");
      var d = document.getElementById("육개장");
      var k = document.getElementById("부대찌개");
      var e = document.getElementById("소고기무국");
      var f = document.getElementById("청국장");
      var g = document.getElementById("곰탕");      



      x.style.color = "#F84647";     y.style.color = "#F84647"; 
       z.style.color = "#F84647";      a.style.color = "#F84647";     b.style.color = "#F84647"; 
      c.style.color = "#F84647";     g.style.color = "#F84647"; 
      d.style.color = "#F84647";    
      e.style.color = "#F84647";     
      f.style.color = "#F84647";     
      k.style.color = "#F84647";     
   
   }

</script>
<button type="button" onclick="cssChange0();cssChange3();" >위암</button>
<script>
function cssChange3() {
    var x = document.getElementById("유부초밥");
   var y = document.getElementById("부대찌개");
    var z = document.getElementById("된장찌개");
   var a = document.getElementById("김치찌개");
    var b = document.getElementById("양파장아찌");
   var c = document.getElementById("두부조림");



    x.style.color = "#F84647";     y.style.color = "#F84647"; 
    z.style.color = "#F84647";     a.style.color = "#F84647";     b.style.color = "#F84647"; 

    c.style.color = "#F84647";     

}
</script>
</div>


<!------새로운 코드-->
<div class="col-6 col-12-medium">

<hr size = "5px"></hr>
<h1></h1>
<h2><font color="#4DD79D">예방하고싶은 유형의 질병을 클릭하세요</font></h2>
<button type="button" onclick="cssChange0();cssChange4();" >호흡기 질환</button>
<script>
function cssChange4() {
   var x = document.getElementById("녹두죽");
      var y = document.getElementById("호박죽");
      var z = document.getElementById("은행구이");
      var a = document.getElementById("생강");
      var b = document.getElementById("인삼");
      var c = document.getElementById("소고기무국");
      var d = document.getElementById("무말랭이");
      var k = document.getElementById("무");
      var e = document.getElementById("아보카도");
      var f = document.getElementById("브로콜리");


      x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
       z.style.color = "#4DD79D";      a.style.color = "#4DD79D";     b.style.color = "#4DD79D"; 
      c.style.color = "#4DD79D";     f.style.color = "#4DD79D";
      d.style.color = "#4DD79D";     
      e.style.color = "#4DD79D";    
      k.style.color = "#4DD79D";     
   
   }

</script>
<button type="button" onclick="cssChange0();cssChange5();" >간 질환</button>
<script>
function cssChange5() {
   var x = document.getElementById("쑥");
      var y = document.getElementById("부추");
      var z = document.getElementById("양송이버섯");
      var a = document.getElementById("칡");
      var b = document.getElementById("배추");
      var c = document.getElementById("마늘");
       var d = document.getElementById("모시조개");
      var e = document.getElementById("시금치무침");
      var f = document.getElementById("콩나물무침");
      var g = document.getElementById("콩나물국");
      var j = document.getElementById("표고버섯");
      var k = document.getElementById("브로콜리");
      var l = document.getElementById("미역");
      var m = document.getElementById("김");

      x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
       z.style.color = "#4DD79D";      a.style.color = "#4DD79D";     b.style.color = "#4DD79D"; 
      c.style.color = "#4DD79D";    d.style.color = "#4DD79D";
      e.style.color = "#4DD79D";    f.style.color = "#4DD79D";
      g.style.color = "#4DD79D";    h.style.color = "#4DD79D";
      i.style.color = "#4DD79D";
      j.style.color = "#4DD79D";    k.style.color = "#4DD79D";
      l.style.color = "#4DD79D";    m.style.color = "#4DD79D";
   }

</script>

<button type="button" onclick="cssChange0();cssChange6();" >혈관 질환</button>
<script>
function cssChange6() {
   var x = document.getElementById("토마토");
      var y = document.getElementById("당근");
      var z = document.getElementById("시금치무침");
      var a = document.getElementById("피망");
      var b = document.getElementById("브로콜리");
      var c = document.getElementById("된장찌개");
      var d = document.getElementById("두부조림");
      var e = document.getElementById("마늘");
      var f = document.getElementById("양파");
      var g = document.getElementById("김");   
      var h = document.getElementById("미역");
      var i = document.getElementById("다시마");   
      var j = document.getElementById("청국장");
      var k = document.getElementById("단호박");


      x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
       z.style.color = "#4DD79D";      a.style.color = "#4DD79D";     b.style.color = "#4DD79D"; 
      c.style.color = "#4DD79D";     g.style.color = "#4DD79D"; 
      d.style.color = "#4DD79D";    
      e.style.color = "#4DD79D";     i.style.color = "#4DD79D";
      f.style.color = "#4DD79D";     j.style.color = "#4DD79D";
      h.style.color = "#4DD79D";     k.style.color = "#4DD79D";
   
   }

</script>
<button type="button" onclick="cssChange0();cssChange7();" >뇌 질환</button>
<script>
function cssChange7() {
   var x = document.getElementById("계란프라이");
   var y = document.getElementById("삶은계란");
   var z = document.getElementById("콩자반");
   var a = document.getElementById("카레");
   var b = document.getElementById("호박");
   var c = document.getElementById("당근");
   var d = document.getElementById("감자");
   var e = document.getElementById("미역");
   var f = document.getElementById("표고버섯");
   var g = document.getElementById("토마토");   
   var h = document.getElementById("마늘");
   var i = document.getElementById("모시조개");
   var j = document.getElementById("고등어구이");

    x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
    z.style.color = "#4DD79D";      a.style.color = "#4DD79D";     b.style.color = "#4DD79D"; 
    c.style.color = "#4DD79D";     g.style.color = "#4DD79D"; 
    d.style.color = "#4DD79D";    
    e.style.color = "#4DD79D";     i.style.color = "#4DD79D";
    f.style.color = "#4DD79D";     j.style.color = "#4DD79D";
    h.style.color = "#4DD79D";
}
</script>
</div></div>
<!--------새로운 코드의 끝----------->




<hr size = "5px"></hr>

<h1></h1>
                        <h3>밥</h3>
                        <div class="table-wrapper">                  
                           <table class="alt">
                              <thead>
                                 <tr>
                                    <th>메뉴</th>
                                    <th>양(g)</th>
                                    <th>칼로리(kcal)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td id = "흰쌀밥">흰쌀밥</td>
                                    <td>100</td>
                                    <td>125</td>
                                 </tr>
                                 <tr>
                                    <td id = "현미밥">현미밥</td>
                                    <td>100</td>
                                    <td>111</td>
                                 </tr>
                                 <tr>
                                    <td id = "흑미밥">흑미밥</td>
                                    <td>100</td>
                                    <td>157</td>
                                 </tr>
                                 <tr>
                                    <td id = "리조또">리조또</td>
                                    <td>100</td>
                                    <td>195</td>
                                 </tr>
                                 <tr>
                                    <td id = "호박죽">호박죽</td>
                                    <td>100</td>
                                    <td>165</td>
                                 </tr>
                                 <tr>
                                    <td id = "전복죽">전복죽</td>
                                    <td>100</td>
                                    <td>74</td>
                                 </tr>
                                 <tr>
                                    <td id = "녹두죽">녹두죽</td>
                                    <td>100</td>
                                    <td>67</td>
                                 </tr>
                                 <tr>
                                    <td id = "비빔밥">비빔밥</td>
                                    <td>100</td>
                                    <td>147</td>
                                 </tr>
                                 <tr>
                                    <td id = "김밥">김밥</td>
                                    <td>100</td>
                                    <td>167</td>
                                 </tr>
                                 <tr>
                                    <td id = "유부초밥">유부초밥</td>
                                    <td>100</td>
                                    <td>180</td>
                                 </tr>
                                 <tr>
                                    <td id = "스시">스시</td>
                                    <td>100</td>
                                    <td>170</td>
                                 </tr>
                                 <tr>
                                    <td id = "카레">카레</td>
                                    <td>100</td>
                                    <td>136</td>
                                 </tr>
                                 <tr>
                                    <td id = "양송이스프">양송이스프</td>
                                    <td>100</td>
                                    <td>88</td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <h3></h3>
                        <h3></h3>
                        <h3>찌개류</h3>
                        <div class="table-wrapper">
                           <table class="alt">
                              <thead>
                                 <tr>
                                    <th>메뉴</th>
                                    <th>양(g)</th>
                                    <th>칼로리(kcal)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td id = "김치찌개">김치찌개</td>
                                    <td>200</td>
                                    <td>121</td>
                                 </tr>
                                 <tr>
                                    <td id = "된장찌개">된장찌개</td>
                                    <td>200</td>
                                    <td>176</td>
                                 </tr>                                 
                                 <tr>
                                    <td id = "미역국">미역국</td>
                                    <td>200</td>
                                    <td>170</td>
                                 </tr>
                                 <tr>
                                    <td id = "시래기국">시래기국</td>
                                    <td>200</td>
                                    <td>53</td>
                                 </tr>
                                 <tr>
                                    <td id = "육개장">육개장</td>
                                    <td>200</td>
                                    <td>165</td>
                                 </tr>
                                 <tr>
                                    <td id = "부대찌개">부대찌개</td>
                                    <td>200</td>
                                    <td>313</td>
                                 </tr>
                                 <tr>
                                    <td id = "콩나물국">콩나물국</td>
                                    <td>200</td>
                                    <td>290</td>
                                 </tr>
                                 <tr>
                                    <td id = "소고기무국">소고기무국</td>
                                    <td>200</td>
                                    <td>192</td>
                                 </tr>
                                 <tr>
                                    <td id = "청국장">청국장</td>
                                    <td>200</td>
                                    <td>216</td>
                                 </tr>
                                 <tr>
                                    <td id = "곰탕">곰탕</td>
                                    <td>200</td>
                                    <td>27</td>
                                 </tr>


                              </tbody>
                              <tfoot>
                                 <tr>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <h3></h3>
                        <h3></h3>
                        <h3>반찬류</h3>
                        <div class="table-wrapper">
                           <table class="alt">
                              <thead>
                                 <tr>
                                    <th>메뉴</th>
                                    <th>양(g)</th>
                                    <th>칼로리(kcal)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td id = "시금치무침">시금치무침</td>
                                    <td>100</td>
                                    <td>64</td>
                                 </tr>
                                 <tr>
                                    <td id = "양파장아찌">양파장아찌</td>
                                    <td>100</td>
                                    <td>40</td>
                                 </tr>
                                 <tr>
                                    <td id = "어묵볶음">어묵볶음</td>
                                    <td>100</td>
                                    <td>137</td>
                                 </tr>
                                 <tr>
                                    <td id = "멸치볶음">멸치볶음</td>
                                    <td>100</td>
                                    <td>173</td>
                                 </tr>
                                 <tr>
                                    <td id = "버섯볶음">버섯볶음</td>
                                    <td>100</td>
                                    <td>52</td>
                                 </tr>
                                 <tr>
                                    <td id = "도토리묵">도토리묵</td>
                                    <td>100</td>
                                    <td>45</td>
                                 </tr>
                                 <tr>
                                    <td id = "계란장조림">계란장조림</td>
                                    <td>100</td>
                                    <td>155</td>
                                 </tr>
                                 <tr>
                                    <td id = "계란말이">계란말이</td>
                                    <td>100</td>
                                    <td>134</td>
                                 </tr>
                                 <tr>
                                    <td id = "콩자반">콩자반</td>
                                    <td>100</td>
                                    <td>317</td>
                                 </tr>
                                 <tr>
                                    <td id = "두부조림">두부조림</td>
                                    <td>100</td>
                                    <td>76</td>
                                 </tr>
                                 <tr>
                                    <td id = "은행구이">은행구이</td>
                                    <td>100</td>
                                    <td>182</td>
                                 </tr>
                                 <tr>
                                    <td id = "무말랭이">무말랭이</td>
                                    <td>100</td>
                                    <td>197</td>
                                 </tr>
                                 <tr>
                                    <td id = "모시조개">모시조개</td>
                                    <td>100</td>
                                    <td>49</td>
                                 </tr>
                                 <tr>
                                    <td id = "콩나물무침">콩나물무침</td>
                                    <td>100</td>
                                    <td>48</td>
                                 </tr>
                                 <tr>
                                    <td id = "김">김</td>
                                    <td>100</td>
                                    <td>35</td>
                                 </tr>
                                 <tr>
                                    <td id = "고등어구이">고등어구이</td>
                                    <td>100</td>
                                    <td>190</td>
                                 </tr>
                                 <tr>
                                    <td id = "계란프라이">계란프라이</td>
                                    <td>100</td>
                                    <td>194</td>
                                 </tr>
                                 <tr>
                                    <td id = "삶은계란">삶은계란</td>
                                    <td>100</td>
                                    <td>154</td>
                                 </tr>

                              </tbody>
                              <tfoot>
                                 <tr>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <h3></h3>
                        <h3></h3>
                        <h3>채소류</h3>
                        <div class="table-wrapper">
                           <table class="alt">
                              <thead>
                                 <tr>
                                    <th>메뉴</th>
                                    <th>양(g)</th>
                                    <th>칼로리(kcal)</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td id = "호박">호박</td>
                                    <td>100</td>
                                    <td>26</td>
                                 </tr>
                                 <tr>
                                    <td id = "생강">생강</td>
                                    <td>100</td>
                                    <td>80</td>
                                 </tr>
                                 <tr>
                                    <td id = "인삼">인삼</td>
                                    <td>100</td>
                                    <td>37</td>
                                 </tr>
                                 <tr>
                                    <td id = "무">무</td>
                                    <td>100</td>
                                    <td>16</td>
                                 </tr>
                                 <tr>
                                    <td id = "아보카도">아보카도</td>
                                    <td>100</td>
                                    <td>160</td>
                                 </tr>
                                 <tr>
                                    <td id = "브로콜리">브로콜리</td>
                                    <td>100</td>
                                    <td>34</td>
                                 </tr>
                                 <tr>
                                    <td id = "쑥">쑥</td>
                                    <td>100</td>
                                    <td>20</td>
                                 </tr>
                                 <tr>
                                    <td id = "부추">부추</td>
                                    <td>100</td>
                                    <td>30</td>
                                 </tr>
                                 <tr>
                                    <td id = "양송이버섯">양송이버섯</td>
                                    <td>100</td>
                                    <td>24</td>
                                 </tr>
                                 <tr>
                                    <td id = "표고버섯">표고버섯</td>
                                    <td>100</td>
                                    <td>38</td>
                                 </tr>
                                 <tr>
                                    <td id = "칡">칡</td>
                                    <td>100</td>
                                    <td>35</td>
                                 </tr>
                                 <tr>
                                    <td id = "배추">배추</td>
                                    <td>100</td>
                                    <td>13</td>
                                 </tr>
                                 <tr>
                                    <td id = "마늘">마늘</td>
                                    <td>100</td>
                                    <td>149</td>
                                 </tr>
                                 <tr>
                                    <td id = "미역">미역</td>
                                    <td>100</td>
                                    <td>45</td>
                                 </tr>
                                 <tr>
                                    <td id = "토마토">토마토</td>
                                    <td>100</td>
                                    <td>18</td>
                                 </tr>
                                 <tr>
                                    <td id = "당근">당근</td>
                                    <td>100</td>
                                    <td>41</td>
                                 </tr>
                                 <tr>
                                    <td id = "피망">피망</td>
                                    <td>100</td>
                                    <td>20</td>
                                 </tr>
                                 <tr>
                                    <td id = "양파">양파</td>
                                    <td>100</td>
                                    <td>42</td>
                                 </tr>
                                 <tr>
                                    <td id = "다시마">다시마</td>
                                    <td>100</td>
                                    <td>19</td>
                                 </tr>
                                 <tr>
                                    <td id = "단호박">단호박</td>
                                    <td>100</td>
                                    <td>29</td>
                                 </tr>
                                 <tr>
                                    <td id = "감자">감자</td>
                                    <td>100</td>
                                    <td>66</td>
                                 </tr>
                                 <tr>
                                    <td id = "고구마">고구마</td>
                                    <td>100</td>
                                    <td>86</td>
                                 </tr>
                                 
                              </tbody>
                              <tfoot>
                                 <tr>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>

            </section>
            </div>
         </div>




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