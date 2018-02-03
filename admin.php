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
<div>
<div  class="add">
<div class="addb">
<h2 style=" position: absolute; top: -20px; left: 40px; padding-top:5px; padding-bottom: 0px;">Add a Book</h2><br>
<form  method="POST" action="bookadd.php">
<input type="text" name="title" placeholder="Title" required><br>
<input type="text" name="author" placeholder="Author" required><br>
<input type="text" name="isbn" placeholder="ISBN" required><br><br>
<button>Add</button>
</form>
</div>
<div class="addimage" style="background-image: url(book1.jpg); background-size: 100% 100%;">
</div>
</div>
<div class="rem">
<div class="remb">
<h2> Remove a Book </h2><br>
<form method="POST" action="bookremove.php">
<input type="text" name="id" placeholder="ID" required><br><br>
<button>Remove</button>
</form>
</div>
<div class="remimage" style="background-image: url(book3.jpg); background-size: 100% 100%;">
</div>
</div>
</div>
</body>
</html>