<?php
$id=$_POST["id"];
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

<div style="background-image: url(back1.jpg); background-size: 100% 100%;height: 540px;">
<?php
if($id){
$studentid=$_SESSION['id'];
//echo  'Welcome, ' .$_SESSION['id']  .'!'."<br>"."<br>";
$conn=mysqli_connect("localhost","root","","LIBRARY");

if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

$sql = "SELECT id,duedate,studentid FROM Books WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        if (empty($row["studentid"])) {
        	echo '<div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;"><p style="font-style:italic; color:#00cc00; font-size:2em;">The book cant be returned as it is not taken by anyone</p></div>';
        }
        else{
            if($studentid!=$row['studentid'])
                echo '<div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;">
                   <p style="font-style:italic; color:#00cc00; font-size:2em;">This book is not taken by you and so it can not be returned </p></div>';
            else{
                if($row['duedate']<date("Y-m-d")){
                echo '<div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;"><p style="font-style:italic; color:#00cc00; font-size:2em;">You have fine and so the book cant be returned</p></div>';
            }
            else{
        	$query = "UPDATE Books SET studentid='',duedate='' WHERE id='$id'";
        	if (mysqli_query($conn, $query)) {
            echo '<div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;"><p style="font-style:italic; color:#00cc00; font-size:2em;">Book returned successfully </p></div>';
			} else {
    		echo '<div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;"><p style="font-style:italic; color:#00cc00; font-size:2em;">Error returning book:  . mysqli_error($conn); </p></div>';
			}
            }
            }
        }
    }
} else {
    echo '<div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;"><p style="font-style:italic; color:#00cc00; font-size:2em;">You have entered invalid id of book</p></div>';
}
}
else
 	echo '  <div class="mess" style="position: relative;margin-top: 0em;margin-bottom:4em;margin-left:20em;padding: 2em;padding-top:10em;width:40%;height:50%;text-align:center;">
            <p style="font-style:italic; color:#00cc00; font-size:2em;">You need to enter the id of book</p>
            </div>';
?>
</div>
</body>
</html>