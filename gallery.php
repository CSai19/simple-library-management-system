  <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>Central Library</title>
  <link rel="stylesheet" type="text/css" href="nag.css">
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



<h2>QUOTES</h2>

<div class="q1">
<img src="quote1.jpg" alt="quote1">
</div>
<div class="q2">
<img src="quote2.jpg" alt="quote2">
</div>
<div class="q3">
<img src="quote3.jpg" alt="quote3">
</div>
<div class="q4">
<img src="quote4.jpg" alt="quote4">
</div>
<div class="q5">
<img src="quote5.jpg" alt="quote5">
</div>
<div class="q6">
<img src="quote6.jpg" alt="quote6">
</div>


<h2>LIBRARY BUILDINGS</h2><br>
<div class="b1">
<img src="b11.jpg" alt="quote1">
</div>
<div class="b2">
<img src="b22.jpg" alt="quote2">
</div><br>

<p><b>FACILITIES</b></p><br>

<p style="float: left"><b>ID CHECKING</b></p>
<p style="position: absolute;left:400px;"><b>SYSTME FACILITY</b></p>

<p style="position: absolute;left:790px;"><b>STACK</b></p>

<p style="position: absolute;left:1070px;"><b>STUDY ROOM</b></p>


<div class="checkid">
<img src="swipe.png">
</div>



<div class="sys">

<img src="system.jpg">
</div>
<div class="stack">

<img src="stack.gif">
</div>
<div class="stud">

<img src="studyroom.jpg">
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