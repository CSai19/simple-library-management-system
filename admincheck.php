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
  <li><a href="galley.php">Gallery</a></li>
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
<div class="chan" style="background-image: url(back1.jpg); background-size: 100% 100%;height: 540px;">
<?php
$id=$_POST['id'];
$password=$_POST['password'];
if($id&&$password){
$conn=mysql_connect("localhost","root","") or die("Could not connect!");
mysql_select_db("LIBRARY") or die("Could not find db");
$query=mysql_query("SELECT * FROM Admin WHERE AdminID='$id'");
$numrows=mysql_num_rows($query);
if($numrows!=0){
  while($row=mysql_fetch_assoc($query)){
    $dbpassword=$row['Password'];
  }
  if($password==$dbpassword){
   $_SESSION['id']=$id;
   header("Location: admin.php");
   exit();
  }
  else
     echo '<div class="sai"><p class="para">Incorrect Password</p></div>';
 
}
else
   echo '<div class="sai"><p class="para">The user does not exist</p></div>';
mysql_close($conn);
}
else 
  echo '<div class="sai"><p class="para">Please enter both your id and password</p></div>';
?>
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
