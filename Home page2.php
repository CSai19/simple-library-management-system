 <!DOCTYPE html>
 <html>
 <head>
 	<title>Central Library</title>
 	<link rel="stylesheet" type="text/css" href="Home page2.css">
 	
 </head>
 <body> 
 <div class="heading">
 <h1 style="text-align: center;">Library</h1>
 </div>
 <ul>
 	<li><a href="Home page2.php"> Home</a></li>
 	<li  class="dropdown">
 		<a href="#" class="dropbtn">Services</a>
		<div class="dropdown-content" style="width:100px">
				
				<a href="catalog.php" >Catalog</a>
				<a href="renewal.php">Book Renewal</a>
				<a href="return.php">Book Return</a>
				<a href="#">E-books</a>
				<a href="viewmybooks.php">View My Books</a>
		</div>
	</li>
 	<li class="dropdown">
 		<a href="#" class="dropbtn">Journals</a>
 		<div class="dropdown-content">
 			<a href="#">2017</a>
 			<a href="#">2016</a>
 			<a href="#">2015</a>
 		</div>
 	</li>
 	<li><a href="#">Gallery</a></li>
 	<li><a href="#">Contact</a></li>
 	<li><a href="#">About</a></li>
 	<li style="float: right" class="dropdown">
 		<a href="#" class="dropbtn">Login/Sign-up</a>
 		<div class="dropdown-content">
 			<a href="login.php" target="_self">Login</a>
      		<a href="signup.php" target="_self">Signup</a> 
      	</div>
 	</li>
 </ul>

<div class="img-not" style="width: 100%">
<div style="float:left; width: 75%">
   <img src="lib2.jpg" style="width:100%">
 
</div>

<div style="float:right;">
<div class="notices">
<h2>Notices</h2>
<p>Website has been updated</p>
<br>
<p>Now you can pre register a book<br> from the website</p>
</div>

<div class="Admin-login">
<h2> Admin Login </h2>
<form method="POST" action="admincheck.php">
AdminID:<br>
<input type="text" name="id"><br>
Password:<br>
<input type="Password" name="password"><br><br>
<input type="submit" name="submit" value="submit">
</form>
</div>
</div>

</div>

<div style="clear:both"></div>


 </body>
 </html>


