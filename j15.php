 <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
<style>
.nn a:link {
    color: green;
    background-color: transparent;
    text-decoration: none;
}

.nn a:visited {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}

.nn a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}

.nn a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
</style> 
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

<div class="nn"> 
<ul>

<li><a href="http://www.sciencedirect.com/science/journal/03091708?sdc=1"target="_blank">Advances in Water Resources </a></li><br>

<li><a href="http://onlinelibrary.wiley.com/journal/10.1107/S20597983"target="_blank">Acta Crystallographica</a></li><br>

<li><a href="http://iopscience.iop.org/journal/1882-0786;jsessionid=1FB556680381985E6D07051383F580C1.c2.iopscience.cld.iop.org"target="_blank">Applied Physics Express</a> </li><br></ul>

<ul>
<li><a href="http://dev.biologists.org/"target="_blank">Development </a></li><br>

<li><a href="http://pubs.acs.org/journal/esthag"target="_blank">Environmental Science and Technology </a></li><br>

<li><a href="http://www.emeraldinsight.com/journal/el"target="_blank">Electronic Library</a> </li><br>

<li><a href="http://iopscience.iop.org/journal/0295-5075"target="_blank">Euro Physics Letters </a></li><br>

<li> <a href="http://www.ams.org/publications/journals/journalsframework/proc"target="_blank">American Mathematical Society Proceedings  </a></li><br>

<li> <a href="http://onlinelibrary.wiley.com/journal/10.1002/%28ISSN%291099-0682c"target="_blank">European Journal of Inorganic Chemistry  </a></li><br>

<li> <a href="https://link.springer.com/journal/366"target="_blank">Engineering with Computers  </a></li><br>

<li> <a href="http://www.sciencedirect.com/science/journal/03601323?sdc=1"target="_blank">Building and Environment  </a></li><br>

<li> <a href="https://www.cambridge.org/core/journals/bilingualism-language-and-cognition"target="_blank">Bilingualism: Language and Cognition  </a></li><br>




</ul>
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
