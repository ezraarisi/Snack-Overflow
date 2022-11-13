<?php 

session_start();

if($_SESSION['admin_email']==true){
	}
	else{
		header('location: login.php');
	}

include ("includes/db.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Pure HTML CSS Admin Template</title>
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5" />
    
  </head>
  <style>
  	/* (A) GLOBAL */
* {
  font-family: arial, sans-serif;
  box-sizing: border-box;
}
body {
  display: flex;
  min-height: 100vh;
  padding: 0; margin: 0;
}

/* (B) SIDEBAR */
/* (B1) SIDEBAR ITSELF */
#pgside {
  width: 200px;
  transition: width 0.2s;
  background: #283039;
}

/* (B2) USER OR BRANDING */
#pgside #pguser {
  display: flex;
  align-items: center;
  padding: 10px 5px;
}
#pgside #pguser img {
  width: 50px;
  margin-right: 5px;
  border-radius: 50%
}

/* (B3) SIDEBAR ITEMS */
#pgside, #pgside a { color: #fff; }
#pgside a {
  display: block;
  padding: 20px;
  width: 100%;
  text-decoration: none;
  cursor: pointer;
}
#pgside a.current { background: #7c1919; }
#pgside a:hover { background: #9b2323; }

/* (B4) SIDEBAR ICONS & TEXT */
#pgside i.ico, #pgside i.txt { font-style: normal; }
#pgside i.ico {
  font-size: 1.1em;
  margin-right: 10px;
}

/* (B5) SMALL SCREEN TRANSFORMATION */
@media screen and (max-width:768px) {
  #pgside { width: 70px; }
  #pgside #pguser { justify-content: center; }
  #pgside a {
    text-align: center;
    padding: 20px 0;
  }
  #pgside i.ico {
    font-size: 1.5em;
    margin-right: 0;
  }
  #pgside i.txt { display: none; }
}

/* (C) MAIN CONTENTS */
#pgmain {
  flex-grow: 1;
  padding: 20px;
  background: #f2f2f2;
}
  	


  </style>
  <body>
    <!-- (A) SIDEBAR -->
    <div id="pgside">
      <!-- (A1) BRANDING OR USER -->
      <!-- LINK TO DASHBOARD OR LOGOUT -->
      <div id="pguser">
        <img src="potato.png"/>
        <i class="txt">MY ADMIN</i>
      </div>

      <!-- (A2) MENU ITEMS -->
      <a href="#" class="current">
        <i class="ico">&#9733;</i>
        <i class="txt">Section A</i>
      </a>
      <a href="#">
        <i class="ico">&#9728;</i>
        <i class="txt">Section B</i>
      </a>
      <a href="#">
        <i class="ico">&#9737;</i>
        <i class="txt">Section C</i>
      </a>
    </div>

    <!-- (B) MAIN -->
    <main id="pgmain">
      	<a href="logout.php">Admin Logout</a>
    </main>
  </body>
</html>