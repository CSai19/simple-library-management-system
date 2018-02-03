<!DOCTYPE html>
 <html>
 <head>
  <title>Central Library</title>
  <link rel="stylesheet" type="text/css" href="Home page2.css">
  
 </head>
 <body style="background-color: #e0e0d1"> 
 <div class="heading">
 <h1 style="text-align: center;">Library</h1>
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
  <li style="float: right" class="dropdown">
    <a href="#" class="dropbtn">Login/Sign-up</a>
    <div class="dropdown-content">
      <a href="login.php" target="_self">Login</a>
          <a href="signup.php" target="_self">Signup</a> 
        </div>
  </li>
 </ul>
</div>
<div style="background-image: url(back1.jpg); background-size: 100% 100%">
<div class="login-page">
<h2 style="text-align: center; position: relative; top: 0.4em; left: 0.4em; padding-top:5px; padding-bottom: 0px;">You must be logged in:</h2>
  <div class="form">
      <h1 style="text-align: center; position: absolute; top: -20px; left: 120px; padding-top:5px; padding-bottom: 0px;">LOGIN</h1>
      <form class="login-form" method="POST" action="loginaction.php">
      <input type="text" placeholder="id" name="id" />
      <input type="password" placeholder="password" name="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="signup.php"> Sign up</a></p>
    </form>
  </div>
</div>
<br>
<br><br>
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
<html>
