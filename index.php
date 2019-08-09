<?php
if (isset($_POST['submit'])) {
    $code = $_POST['code'];
    $code = str_replace("<", "&lt;", $code);
    $code = str_replace(">", "&gt;", $code);
    $code = htmlspecialchars($code);
} else {

}
?>
<script>
function responsive() {
    if (document.getElementById("header__menu").classList != "mystyle") {
        document.getElementById("header__menu").classList = "mystyle";
    } else {
        document.getElementById("header__menu").classList.remove("mystyle");
        document.getElementById("header__menu").classList = "no-mobile";
    }
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <link id="pagestyle" rel="stylesheet" type="text/css" href="css/dark.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <script src="js/style.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSshower</title>
</head>


<div class="fixedbutton">
  <select id="themeBox" onclick="themeUpdate()">
    <option value="Dark" id="dark" selected>Dark</option>
    <option value="Light" id="light">Light</option>
    <option value="Mogi" id="mogi">Mogi</option>
  </select>
</div>

<body>
      <div class="header clearfix sticky" style="height: 60px;">
       <div class="header__content boxed">
        <div class="header__logo logo" style="padding-left: 0px;"><a href="#"><h3>HSshower</h3></a></div>
        <div class="header__menu" id="header__menu" >
           <a href="https://moonmatt.dev"><div class="header__menu__item"><ul><i class="fas fa-moon"></i>moonmatt</ul></div></a>
        </div>
    <a href="#"><div class="header__menu__item responsiveicon" onclick="responsive()"><ul><i class="fas fa-bars"></i></ul></div></a>
    </div>
    </div>
    
    
<div class="cover parallax" style="height:30%; background-image: url('background.jpg');">
		<div class="cover__filter"></div>
		<div class="cover__caption">
			<div class="cover__caption__copy white-text">
				<h1>HTML Snippet Shower</h1>
				<h3>Show html code inside of web-pages</h3> <br>
			</div>
		</div>
	</div>
    
  <div class="page boxed rounded shadow">
       <div class="page__content">
          <h1>Insert your code</h1>
          <form action="#" method="POST" id="myform">
            <textarea name="code" id="code" cols="30" rows="10" form="myform"></textarea>
            <input type="submit" name="submit" value="Submit">
          </form>
       </div>
   </div>

   


   <div class="page boxed rounded shadow">
       <div class="page__content">
          <h1>Output code</h1>
          <textarea cols="30" rows="10"><?php if (isset($_POST['submit'])) { echo $code; } ?></textarea>
       </div>
   </div>

              <div class="footer">
        <div class="footer__content boxed clearfix">
        <div class="footer__content__left">
            <p>Designed using <a href="https://mogi.moonmatt.dev">Mogi</a></p>
        </div>
                <div class="footer__content__right">
            <a href="https://github.com/moonmatt/HSshower"><ul><i class="fab fa-github"></i></ul></a>
        </div>
        </div>
    </div>




<script>
updateTheme();
var select = document.querySelector("#themeBox");
var selectOption = select.options[select.selectedIndex];
var lastSelected = localStorage.getItem('select');
if(lastSelected) {
    select.value = lastSelected; 
}
select.onchange = function () {
   lastSelected = select.options[select.selectedIndex].value;
   console.log(lastSelected);
   localStorage.setItem('select', lastSelected);
    updateTheme();
}
function updateTheme() {
    if(document.getElementById("dark").selected) { 
        swapStyleSheet('css/dark.css') 
    }
    if(document.getElementById("light").selected) { 
        swapStyleSheet('css/light.css') 
    }
    if(document.getElementById("mogi").selected) { 
        swapStyleSheet('css/mogi.css') 
    } 
}
updateTheme();  
    </script>
</body>
</html>