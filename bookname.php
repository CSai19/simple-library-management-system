<?php
 session_start();
 ?>
 <!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
	th, td{
		padding: 8px;
		text-align: left;
	}
	tr{
		padding: 2px;
	}
	tr:nth-child(even){background-color: #99ffff}
	tr:nth-child(odd){background-color: #ffff66}
</style>
<title>Central Library</title>
<link rel="stylesheet" type="text/css" href="Home page2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $(this).css("display","none");
        $("#book").show();
        
    });
});
</script>
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
<center><h2>Search Results</h2></center>
<br>
<?php
$search = $_POST["search"];
$conn=mysqli_connect("localhost","root","","LIBRARY");

if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

$query = "select title,authorname,isbn,id,duedate,studentid from Books where title like '%$search%'";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0)
{
?>
<table style="border-collapse: collapse;width: 100%" border="2" align="center" cellpadding="15" cellspacing="15">
<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Duedate</th>
<th> StudentID</th>
<th> id</th>
<th></th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["isbn"];?> </td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["authorname"];?> </td>
<td><?php echo $row["duedate"];?> </td>
<td><?php echo $row["studentid"];?> </td>
<td><?php echo $row["id"];?> </td>
<td><?php if(empty($row["studentid"])) 
          echo '<button>Place Hold</button>' ?></td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the book name $search </center>" ;
?>
</table>
<form method="POST" action="bookreg.php" style="display: none; margin: 5em 25em;" id="book">
	Enter the Book id:
	<input type="number" name="id">
	<button>Add Book</button>
</form>
</body>
</html>