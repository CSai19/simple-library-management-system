 <?php
 session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <style>
  
.kk a:link {
    color: green;
    background-color: transparent;
    text-decoration: none;
}

.kk a:visited {
    color: blue;
    background-color: transparent;
    text-decoration: none;
}

.kk a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}

.kk a:active {
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

<div class="kk">
<ul>

<li><a href="http://iips.icci.edu.iq/images/exam/databases-ramaz.pdf"target="_blank"> DBMS ramiz</a> </li><br>


<li><a href="http://www.realtechsupport.org/UB/SR/algorithms/Cormen_Algorithms_3rd.pdf"target="_blank">INTRODUCTION TO ALGORITHMS CORMEN</a> </li><br>


<li><a href="https://yinyanghu.github.io/files/clrs.pdf"target="_blank">SOLUTIONS TO CORMEN</a></li><br>


<li><a href="http://www.uobabylon.edu.iq/download/M.S%202013-2014/Operating_System_Concepts,_8th_Edition[A4].pdf"target="_blank">OPERATING SYSTEMS</a> </li><br>


<li><a href="http://www.srmuniv.ac.in/downloads/computer_architecture.pdf"target="_blank">COMPUTER ORGANISATION</a> </li><br>


<li><a href="http://fuuu.be/polytech/INFOF408/Introduction-To-The-Theory-Of-Computation-Michael-Sipser.pdf"target="_blank"> MICHAL SIPSER</a> </li><br>


<li><a href="http://userspages.uob.edu.bh/mangoud/mohab/Courses_files/ssbook_204.pdf"target="_blank">SIGNALS AND SYSTEMS</a> </li><br>

<li><a href="https://www-elec.inaoep.mx/~jmram/Kreyzig-ECS-DIF1.pdf"target="_blank">kreyzig</a></li>


</ul>
</div>






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
