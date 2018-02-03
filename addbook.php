<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.addbook{
			text-align: left;
			display: inline-block;
			margin: 200px 200px;
			padding: 50px;
			border: 1px solid red;
			background-color: rgb(255,255,255);
		}
	</style>
</head>
<body style="background-color:rgb(115, 216, 84);text-align: center;">

<div class="addbook">
<h2> Add a Book </h2>
<form method="POST" action="bookadd.php">
Title:<br>
<input type="text" name="title" required><br>
Author:<br>
<input type="text" name="author" required><br>
ISBN:<br>
<input type="text" name="isbn" required><br><br>
<button>Add</button>
</form>
</div>

</body>
</html>