 <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Central Library</title>
 	<link rel="stylesheet" type="text/css" href="Home page2.css">
 </head>
 <body style="background-color: #e0e0d1"> 
 <div class="heading">
 <h1 style="text-align: center;">Library</h1>
 <div class ="message" style="display: none; float:right;margin-top: -50px;background-color: rgb(54, 216, 62); border:1px solid green;">
<?php echo  'Welcome, ' .$_SESSION['id']  .'!';
?>
 </div>
 </div>
 <div class="bhanu">
 <ul>
 	<li><a href="samplepage.php"> Home</a></li>
 	<li  class="dropdown">
 		<a href="#" class="dropbtn">Services</a>
		<div class="dropdown-content" style="width:100px">
				
				<a href="catalog.php" >Catalog</a>
				<a href="renewal.php">Book Renewal</a>
				<a href="return.php">Book Return</a>
				<a href="eb.php">E-books</a>
        <a href="viewmybooks.php">View My Books</a>
		</div>
	</li>
 	<li class="dropdown">
 		<a href="#" class="dropbtn">Journals</a>
 		<div class="dropdown-content">
 			<a href="j17.php">2017</a>
 			<a href="j16.php">2016</a>
 			<a href="j15.php">2015</a>
 		</div>
 	</li>
 	<li><a href="gallery.php">Gallery</a></li>
 	<li><a href="contact.php">Contact</a></li>
 	<li><a href="about.php">About</a></li>
  <?php
  if($_SESSION){
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    
       
        $(".message").show();
        
    
  });
  </script>';
  echo '<li style="float:right;"><a href="studentlogout.php">Logout</a></li>';
} else{
 	echo '<li style="float: right" class="dropdown">
 		<a href="#" class="dropbtn">Login/Sign-up</a>
 		<div class="dropdown-content">
 			<a href="login.php" target="_self">Login</a>
      		<a href="signup.php" target="_self">Signup</a> 
      	</div>
 	</li>';
 }
 ?>
 </ul>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="lib2.jpg" class="slide1" style="width:100%; height: 520px;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="lib3.jpg" class="slide2"  style="width:100%; height: 520px;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="lib1.jpg" class="slide3" style="width:100%; height: 520px;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div style="margin:1em;">
<div class="notices">
<h2 style="color:white;text-align:center;font-size: 30px;">Notices</h2>
<marquee behavior="scroll" direction="up" scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
<p class="manoj">Website has been updated</p>
<br>
<p class="manoj">Now you can register a book<br> from the website</p>
<p class="manoj">you can search any book in Catalog<br></p>
<p class="manoj">Enjoy the experience<br></p>
</marquee>
</div> 
<div class="Admin-login" style="max-height: 60%;width:;">
<h2> Admin Login </h2>
<form method="POST" action="admincheck.php" class="asd">
<p>AdminID:</p>
<input type="text" name="id" placeholder="Admin ID">
<p>Password:</p>
<input type="Password" name="password" placeholder="password"><br><br>
<button>Submit</button>
</form>
</div>
</div>
<!--<div class="quicklinks">
<h1>Quick Links</h1>
<ul>
  <li><a href="#">News Papers</a></li>
  <li><a href="#">News Papers</a></li>
  <li><a href="#">News Papers</a></li>
  <li><a href="#">News Papers</a></li>
</ul>
</div>
-->

<div class="ishuu">
<p class="prakash">“Doctor Who: You want weapons? We're in a library. Books are the best weapon in the world. This room's the greatest arsenal we could have. Arm yourself!<br></p>
</div>

<div class="ishuu1">
<p class="prakash1">“A library is like an island in the middle of a vast sea of ignorance, particularly if the library is very tall and the surrounding area has been flooded.” <br>
― Lemony Snicket, Horseradish<br></p>
</div>
<div class="ishuu2">
<p class="prakash2">“Your library is your paradise.” 
― Erasmus</p>
</div>
<div class="ishuu3">
<p class="prakash3">“The only thing that you absolutely have to know, is the location of the library.” <br>
― Albert Einstein<br><br></p>
</div>

<div id="fot">

  <p id="prod"> PRODUCT </p>
  <ul id="ulc0">
  <li> <a href="#" id="lif"> Business </a> </li>
  <br>
  <li> <a href="#" id="lif"> Compare </a> </li>
  <br>
<li> <a href="#" id="lif"> Feature </a> </li>
 <br>
<li> <a href="#" id="lif"> Pricing </a> </li>
 </ul>

 <p id="comp"> COMPANY </p>
  <ul id="ulc">
  <li> <a href="#" id="lif1"> About Us </a> </li>
  <br>
  <li> <a href="#" id="lif1"> Blog </a> </li>
  <br>
<li> <a href="#" id="lif1"> News </a> </li>
 <br>
<li> <a href="#" id="lif1"> Contact Us </a> </li>
 </ul>

 <p id="learn"> LEARN MORE </p>
  <ul id="ulc3">
  <li> <a href="#" id="lif9"> Support </a> </li>
  <br>
  <li> <a href="#" id="lif9"> Developers </a> </li>
  <br>
<li> <a href="#" id="lif9"> Affillate Program </a> </li>
 <br>
<li> <a href="#" id="lif9"> Referral Program </a> </li>
 </ul>
 <hr>

<p id="copyri"> &#169 Central Library 2017 Design Room,Inc. All Rights Reserverd. </p> 

</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>