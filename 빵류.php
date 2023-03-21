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
      <title>빵류</title>
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
                     <h1>빵류</h1>
                     <span class="image main"><img src="images/pic18.jpg" alt="" /></span>
                     <section>
                        <div class="row">
                           <div class="col-6 col-12-medium">
   
                           <HTML>
                              <HEAD>
                              <title>Searching for text: JavaScript</title>
                              </HEAD>
                              <body bgcolor="#FFFFFF" text="#000000" link="#0000FF" vlink="#660099" onLoad="if(top.changeAD)top.changeAD()">
                              <a name="top"></a>
                              
                              <h2><font face="Verdana,Arial,Helvetica,sans-serif" color="salmon">
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
   <div class="row">
      <div class="col-6 col-12-medium">
   <hr size = "5px"></hr>
<h1></h1>
<h2><font color="salmon">해당하는 유형의 질병을 클릭하세요</font></h2>
<button type="button" onclick="cssChange0();cssChange();" >고혈압</button>
<script>
	function cssChange0(){
		var a = document.getElementById("두부면");
		var b = document.getElementById("곤약면");
		var c = document.getElementById("토마토파스타");
		var d = document.getElementById("크림파스타");
		var e = document.getElementById("로제파스타");
		var f = document.getElementById("잔치국수");
		var g = document.getElementById("비빔국수");
		var h = document.getElementById("칼국수");
		var i = document.getElementById("짜장면");
		var j = document.getElementById("짬뽕");
		var k = document.getElementById("쫄면");
		var l = document.getElementById("우유식빵");
		var m = document.getElementById("통밀식빵");
		var n = document.getElementById("밤식빵");
		var o = document.getElementById("맘모스빵");
		var p = document.getElementById("단팥빵");
		var q = document.getElementById("크로와상");
		var r = document.getElementById("바게트");
		var s = document.getElementById("모카빵");
		var t = document.getElementById("슈크림빵");
		var u = document.getElementById("호빵");
		var v = document.getElementById("마카롱");
		var w = document.getElementById("다쿠아즈");
		var x = document.getElementById("생크림케이크");
		var y = document.getElementById("당근케이크");
		var z = document.getElementById("브라우니");
		var a1 = document.getElementById("휘낭시에");
		var a2 = document.getElementById("초코쿠키");
		var a3 = document.getElementById("그릭요거트");
		var a4 = document.getElementById("에그타르트");
		var a5 = document.getElementById("다크초콜릿");
		var a6 = document.getElementById("꿀");
		var a7 = document.getElementById("감");
		var a8 = document.getElementById("호두");
		var a9 = document.getElementById("우유");
		var a0 = document.getElementById("코카콜라");
		var b1 = document.getElementById("스프라이트");
		var b2 = document.getElementById("생강차");
		var b3 = document.getElementById("모과차");
		var b4 = document.getElementById("오미자차");
		var b5 = document.getElementById("헛개차");
		var b6 = document.getElementById("배");
		var b7 = document.getElementById("곶감");
		var b8 = document.getElementById("모과");
		var b9 = document.getElementById("오렌지");
		var b0 = document.getElementById("귤");
		var c1 = document.getElementById("블루베리");
		var c2 = document.getElementById("사과");
      var c3 = document.getElementById("빵류");
		var c4 = document.getElementById("디저트류");


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
  

	}
</script>

<script>
function cssChange() {
    var x = document.getElementById("비빔국수");
   var y = document.getElementById("짬뽕");
    var z = document.getElementById("쫄면");
   var a = document.getElementById("맘모스빵");
      var b = document.getElementById("단팥빵");
      var c = document.getElementById("크로와상");
      var d = document.getElementById("슈크림빵");
      var k = document.getElementById("호빵");
      var e = document.getElementById("디저트류");



    x.style.color = "salmon";     y.style.color = "salmon"; 
    z.style.color = "salmon"; a.style.color = "salmon";     b.style.color = "salmon"; 
      c.style.color = "salmon";     k.style.color = "salmon"; 
      d.style.color = "salmon";      e.style.color = "salmon";


}
</script>
<button type="button" onclick="cssChange0();cssChange1();" >당뇨병</button>
<script>
function cssChange1() {
    var x = document.getElementById("짜장면");
   var y = document.getElementById("빵류");
    var z = document.getElementById("디저트류");

    x.style.color = "salmon";     y.style.color = "salmon"; 
    z.style.color = "salmon"; 

}
</script>

<button type="button" onclick="cssChange0();cssChange2();" >심장질환</button>
<script>
function cssChange2() {
   var x = document.getElementById("토마토파스타");
   var y = document.getElementById("크림파스타");
    var z = document.getElementById("로제파스타");
   var a = document.getElementById("잔치국수");
      var b = document.getElementById("비빔국수");
      var c = document.getElementById("칼국수");
      var d = document.getElementById("짜장면");
      var k = document.getElementById("짬뽕");
      var e = document.getElementById("쫄면");
		var l = document.getElementById("우유식빵");
		var n = document.getElementById("밤식빵");
		var o = document.getElementById("맘모스빵");
		var p = document.getElementById("단팥빵");
		var q = document.getElementById("크로와상");
		var r = document.getElementById("바게트");
		var s = document.getElementById("모카빵");
		var t = document.getElementById("슈크림빵");
		var u = document.getElementById("호빵");
		var v = document.getElementById("마카롱");
		var w = document.getElementById("다쿠아즈");
		var x = document.getElementById("생크림케이크");
		var y = document.getElementById("당근케이크");
		var z = document.getElementById("브라우니");
		var a1 = document.getElementById("휘낭시에");
		var a2 = document.getElementById("초코쿠키");
		var a4 = document.getElementById("에그타르트");




    x.style.color = "salmon";     y.style.color = "salmon"; 
    z.style.color = "salmon"; a.style.color = "salmon";     b.style.color = "salmon"; 
      c.style.color = "salmon";     k.style.color = "salmon"; 
      d.style.color = "salmon";      e.style.color = "salmon";
		l.style.color = "salmon";     
		n.style.color = "salmon";     
		o.style.color = "salmon";     
		p.style.color = "salmon";     
		q.style.color = "salmon";     
		r.style.color = "salmon";     
		s.style.color = "salmon";     
		t.style.color = "salmon";     
		u.style.color = "salmon";     
		v.style.color = "salmon";     
		w.style.color = "salmon";     
		x.style.color = "salmon";     
		y.style.color = "salmon";     
		z.style.color = "salmon";     
		a1.style.color = "salmon";     
		a2.style.color = "salmon";     
		a4.style.color = "salmon";     


}
</script>
<button type="button" onclick="cssChange0();cssChange3();" >위암</button>
<script>
function cssChange3() {
    var x = document.getElementById("토마토파스타");
   var y = document.getElementById("크림파스타");
    var z = document.getElementById("로제파스타");
   var a = document.getElementById("잔치국수");
    var b = document.getElementById("비빔국수");    
   var c = document.getElementById("칼국수");
   var d = document.getElementById("짜장면");
    var e = document.getElementById("짬뽕");
    var f = document.getElementById("쫄면");
    var g = document.getElementById("빵류");
   var h = document.getElementById("디저트류");





    x.style.color = "salmon";     y.style.color = "salmon"; 
    z.style.color = "salmon";     a.style.color = "salmon";     b.style.color = "salmon"; 
    c.style.color = "salmon";     f.style.color = "salmon";     g.style.color = "salmon"; 
    d.style.color = "salmon";     h.style.color = "salmon";     e.style.color = "salmon"; 


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
      var x = document.getElementById("배");
         var y = document.getElementById("생강차");
         var z = document.getElementById("꿀");
         var a = document.getElementById("감");
         var b = document.getElementById("곶감");
         var c = document.getElementById("모과차");
         var d = document.getElementById("모과");
         var k = document.getElementById("오미자차");
   
   
         x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
         z.style.color = "#4DD79D";      a.style.color = "#4DD79D";     b.style.color = "#4DD79D"; 
         c.style.color = "#4DD79D";     
         d.style.color = "#4DD79D";      
         k.style.color = "#4DD79D";     
      
      }
   
   </script>
   <button type="button" onclick="cssChange0();cssChange5();" >간 질환</button>
   <script>
   function cssChange5() {
      var x = document.getElementById("오렌지");
         var y = document.getElementById("귤");
         var z = document.getElementById("블루베리");
         var a = document.getElementById("헛개차");

   
   
         x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
         z.style.color = "#4DD79D";      a.style.color = "#4DD79D";   
             
      
      }
   
   </script>
   
   <button type="button" onclick="cssChange0();cssChange6();" >혈관 질환</button>
   <script>
   function cssChange6() {
         var y = document.getElementById("우유");
         var z = document.getElementById("호두");
         var a = document.getElementById("사과");
         var b = document.getElementById("배");
   
   
   
        y.style.color = "#4DD79D"; 
         z.style.color = "#4DD79D";      a.style.color = "#4DD79D";     b.style.color = "#4DD79D";    
      
      }
   
   </script>
   <button type="button" onclick="cssChange0();cssChange7();" >뇌 질환</button>
   <script>
   function cssChange7() {
      var x = document.getElementById("통밀식빵");
      var y = document.getElementById("우유");   
   
      x.style.color = "#4DD79D";     y.style.color = "#4DD79D"; 
    
   
   }
   </script>
   </div></div>
   <!--------새로운 코드의 끝----------->

<hr size = "5px"></hr>
      


                        <h3>면류</h3>
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
                                    <td id = "두부면">두부면</td>
                                    <td>100</td>
                                    <td>76</td>
                                 </tr>                                 <tr>
                                    <td id = "곤약면">곤약면</td>
                                    <td>100</td>
                                    <td>51</td>
                                 </tr>
                                 <tr>
                                    <td id = "토마토파스타">토마토파스타</td>
                                    <td>100</td>
                                    <td>116</td>
                                 </tr>
                                 <tr>
                                    <td id = "크림파스타">크림파스타</td>
                                    <td>100</td>
                                    <td>275</td>
                                 </tr>
                                 <tr>
                                    <td id = "로제파스타">로제파스타</td>
                                    <td>100</td>
                                    <td>225</td>
                                 </tr>
                                 <tr>
                                    <td id = "잔치국수">잔치국수</td>
                                    <td>100</td>
                                    <td>89</td>
                                 </tr>
                                 <tr>
                                    <td id = "비빔국수">비빔국수</td>
                                    <td>100</td>
                                    <td>106</td>
                                 </tr>
                                 <tr>
                                    <td id = "칼국수">칼국수</td>
                                    <td>100</td>
                                    <td>120</td>
                                 </tr>
                                 <tr>
                                    <td id = "짜장면">짜장면</td>
                                    <td>100</td>
                                    <td>175</td>
                                 </tr>
                                 <tr>
                                    <td id = "짬뽕">짬뽕</td>
                                    <td>100</td>
                                    <td>153</td>
                                 </tr>
                                 <tr>
                                    <td id = "쫄면">쫄면</td>
                                    <td>100</td>
                                    <td>106</td>
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
                        <h3 id = "빵류">빵류</h3>
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
                                    <td id = "우유식빵">우유식빵</td>
                                    <td>100</td>
                                    <td>275</td>
                                 </tr>
                                 <tr>
                                    <td id = "통밀식빵">통밀식빵</td>
                                    <td>100</td>
                                    <td>247</td>
                                 </tr>
                                 <tr>
                                    <td id = "밤식빵">밤식빵</td>
                                    <td>100</td>
                                    <td>280</td>
                                 </tr>
                                 <tr>
                                    <td id = "맘모스빵">맘모스빵</td>
                                    <td>100</td>
                                    <td>295</td>
                                 </tr>
                                 <tr>
                                    <td id = "단팥빵">단팥빵</td>
                                    <td>100</td>
                                    <td>290</td>
                                 </tr>
                                 <tr>
                                    <td id = "크로와상">크로와상</td>
                                    <td>100</td>
                                    <td>406</td>
                                 </tr>
                                 <tr>
                                    <td id = "바게트">바게트</td>
                                    <td>100</td>
                                    <td>279</td>
                                 </tr>
                                 <tr>
                                    <td id = "모카빵">모카빵</td>
                                    <td>100</td>
                                    <td>326</td>
                                 </tr>
                                 <tr>
                                    <td id = "슈크림빵">슈크림빵</td>
                                    <td>100</td>
                                    <td>289</td>
                                 </tr>
                                 <tr>
                                    <td id = "호빵">호빵</td>
                                    <td>100</td>
                                    <td>280</td>
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
                        <h3 id = "디저트류">디저트류</h3>
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
                                    <td id = "마카롱">마카롱</td>
                                    <td>100</td>
                                    <td>436</td>
                                 </tr>
                                 <tr>
                                    <td id = "다쿠아즈">다쿠아즈</td>
                                    <td>100</td>
                                    <td>132</td>
                                 </tr>
                                 <tr>
                                    <td id = "생크림케이크">생크림케이크</td>
                                    <td>100</td>
                                    <td>280</td>
                                 </tr>
                                 <tr>
                                    <td id = "당근케이크">당근케이크</td>
                                    <td>100</td>
                                    <td>390</td>
                                 </tr>
                                 <tr>
                                    <td id = "브라우니">브라우니</td>
                                    <td>100</td>
                                    <td>379</td>
                                 </tr>
                                 <tr>
                                    <td id = "휘낭시에">휘낭시에</td>
                                    <td>100</td>
                                    <td>416</td>
                                 </tr>
                                 <tr>
                                    <td id = "초코쿠키">초코쿠키</td>
                                    <td>100</td>
                                    <td>546</td>
                                 </tr>
                                 <tr>
                                    <td id = "그릭요거트">그릭요거트</td>
                                    <td>100</td>
                                    <td>59</td>
                                 </tr>
                                 <tr>
                                    <td id = "에그타르트">에그타르트</td>
                                    <td>100</td>
                                    <td>327</td>
                                 </tr>
                                 <tr>
                                    <td id = "다크초콜릿">다크초콜릿</td>
                                    <td>100</td>
                                    <td>500</td>
                                 </tr>
                                 <tr>
                                    <td id = "꿀">꿀</td>
                                    <td>100</td>
                                    <td>304</td>
                                 </tr>
                                 <tr>
                                    <td id = "호두">호두</td>
                                    <td>100</td>
                                    <td>654</td>
                                 </tr>
                                 <tr>
                                    <td id = "우유">우유</td>
                                    <td>100</td>
                                    <td>50</td>
                                 </tr>
                                 <tr>
                                    <td id = "코카콜라">코카콜라</td>
                                    <td>100</td>
                                    <td>44</td>
                                 </tr>
                                 <tr>
                                    <td id = "스프라이트">스프라이트</td>
                                    <td>100</td>
                                    <td>48</td>
                                 </tr>
                                 <tr>
                                    <td id = "생강차">생강차</td>
                                    <td>100</td>
                                    <td>283</td>
                                 </tr>
                                 <tr>
                                    <td id = "모과차">모과차</td>
                                    <td>100</td>
                                    <td>45</td>
                                 </tr>
                                 <tr>
                                    <td id = "오미자차">오미자차</td>
                                    <td>100</td>
                                    <td>22</td>
                                 </tr>
                                 <tr>
                                    <td id = "헛개차">헛개차</td>
                                    <td>100</td>
                                    <td>2</td>
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
                        <h3 id = "과일류">과일류</h3>
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
                                    <td id = "배">배</td>
                                    <td>100</td>
                                    <td>58</td>
                                 </tr>
                                 <tr>
                                    <td id = "감">감</td>
                                    <td>100</td>
                                    <td>70</td>
                                 </tr>
                                 <tr>
                                    <td id = "곶감">곶감</td>
                                    <td>100</td>
                                    <td>274</td>
                                 </tr>
                                 <tr>
                                    <td id = "모과">모과</td>
                                    <td>100</td>
                                    <td>27</td>
                                 </tr>
                                 <tr>
                                    <td id = "오렌지">오렌지</td>
                                    <td>100</td>
                                    <td>47</td>
                                 </tr>
                                 <tr>
                                    <td id = "귤">귤</td>
                                    <td>100</td>
                                    <td>47</td>
                                 </tr>
                                 <tr>
                                    <td id = "블루베리">블루베리</td>
                                    <td>100</td>
                                    <td>57</td>
                                 </tr>
                                 <tr>
                                    <td id = "사과">사과</td>
                                    <td>100</td>
                                    <td>52</td>
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