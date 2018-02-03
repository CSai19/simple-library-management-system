<?php
$id=$_POST['id'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","");

if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

echo $id;
$query = mysqli_query("LIBRARY","SELECT * FROM Admin");

//$result=mysqli_query($conn,$sql);

/*if(!$result||mysqli_num_rows($result)==0){
echo "Invalid adminID";
exit();
}
else{
 header("Location : login.html");
 exit(); 
}*/
//$query=mysql_query("SELECT AdminID,Password FROM Admin WHERE AdminID='$id'");
echo $query;
if(mysql_num_rows($query)!=0)
{
    while($row = mysql_fetch_assoc($query)) {
           echo $row['AdminID'];
           echo $row['Password'];
    }
}

/*$count=mysqli_num_rows($result);
if($count==1){
   header("Location : login.html");
   exit();   
}
else{
echo "Invalid adminID";
exit();
}*/

mysqli_close($conn);

?>
