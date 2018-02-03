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


<div class="alla">

<img src="nag.jpg" alt="nag" width="300" height="300"><br><br>
PHNO:9497026568<br>
NAME:ALLA NAGARJUNA REDDY<br>

<a href="https://www.facebook.com/nag167">
  <img src="fb.jpeg" alt="nag" style="width:42px;height:42px;border:0;">
</a>
<a href="https://www.linkedin.com/in/nagarjuna-reddy-alla-242a90124/">
  <img src="li.png" alt="nag" style="width:42px;height:42px;border:0;">
</a>

</div>

<div class="ch">
<img src="bhanu.jpg" alt="bhanu" width="300" height="300"><br><br>
PHNO:8891749974<br>
NAME:CH BHANU PRAKASH<br>
<a href="https://www.facebook.com/ch.bhanu.7">
  <img src="fb.jpeg" alt="nag" style="width:42px;height:42px;border:0;">
</a>
<a href="https://www.linkedin.com/in/nagarjuna-reddy-alla-242a90124/">
  <img src="li.png" alt="nag" style="width:42px;height:42px;border:0;">
</a>

</div>

<div class="chandu">

<img src="chandra.jpg" alt="chandra" width="300" height="300"><br><br>
PH NO:7799699572<br>
NAME:CH CHANDRA SAI<br>

<a href="https://www.facebook.com/profile.php?id=100011123552350">
  <img src="fb.jpeg" alt="chandra" style="width:42px;height:42px;border:0;">
</a>
<a href="https://www.linkedin.com/in/nagarjuna-reddy-alla-242a90124/">
  <img src="li.png" alt="chandra" style="width:42px;height:42px;border:0;">
</a>

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


</body>
</html>