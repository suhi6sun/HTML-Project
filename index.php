<!DOCTYPE html>
<html>
<title>ART</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<body>

<!-- !PAGE CONTENT! -->
<div class="maincontent">

  <!-- Header -->
  <header class="nav">
    <a href="index.php" class="header">HOME</a>
    <img src="Images/searchlogo.png" id="logo"/>
  </header>

  <!-- Photo Grid -->
  <div class="img">
    <div class="firstrow">
      <img id="fi"  src="Images/AWMM.jpg">
      <img id="si" src="Images/VGSF.jpg"">
      <img id="ti" src="Images/VGBA.jpg" >
      <img id="ffi" src="Images/MonaLisa.jpg">
      <img id="ssi" src="Images/MA.jpg">
    </div>
  </div>
  <div class="info">
  	<h2 style="text-align: center;">ABOUT</h2>
      <blockquote>“Art is not what you see, but what you make others see.” 
		― Edgar Degas</blockquote>
		  <p id="content">Just a collection of famous artwork from those who inspired millions 	 		throughout time to take up painting as a profession or as a hobby. A place to share and find out about events and paintings by famous painters and artist. Let the adventure begin.</p> 
    <form id="left" method="post" action="register.php">
      <input type="submit" name="createblogbtn" value="Create Blog"  id="left">
    </form> 
    <form  method="post" action="login.php"> 
       <input type="submit" name="signinbtn" value= "Sign In" id="right">
    </form>   
    
  <br>
  <p id="footer">&copy; Max Green 2017</p>
 </div>
</body>
</html>
