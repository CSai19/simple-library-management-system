<?php
$id=$_POST['id'];
$password=$_POST['password'];

$conn=mysqli_connect("localhost","root","","LIBRARY");

if(!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

$sql="INSERT INTO Admin(AdminID,Password) VALUES ('".$id."','".$password."')";

if(mysqli_query($conn,$sql)){
echo "Admin Registered Successfully";
}
else{
echo "Error " .$sql. "<br>" .mysqli_error($conn);
}

mysqli_close($conn);
?>
