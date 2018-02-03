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





<?php
if($_SESSION){
echo '
		<div style="background-image: url(back1.jpg); background-size: 100% 100%">
		<div class="login-page">
		<h1 style="text-align: center; position: relative; top: 0.4em; left: 0.2em; padding-top:5px; padding-bottom: 0px;">RENEWAL</h1>
  		<div class="form">
	   <form method="POST" action="renewalaction.php">

       <h3>Enter the name of the book:</h3>
       <input type="text" name="" placeholder="Book name"><br>
       <h3>Enter the id of the book:</h3>
       <input type="number" name="id" placeholder="ID"><br>
       <button>Renew</button>


       </form>
       </div>
       </div>
       <br><br><br>
       </div>
       ';
}
else{
header("Location: login1.php");
   exit();
}
?>
</body>
</html>
