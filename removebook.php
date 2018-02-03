<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.removebook{
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

<div class="removebook">
<h2> Remove a Book </h2>
<p>You can remove a book by knowing its id</p>
<form method="POST" action="bookremove.php">
Id:<br>
<input type="text" name="id" required><br><br>
<button>Remove</button>
</form>
</div>

</body>
</html>