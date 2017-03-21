<?php
include 'ParentClass.php';
include 'ChildClass.php';

if($_POST)
{
	$post = $_POST;
	$n = $post['name'];
	$e = $post['email'];
	$a = $post['age'];
	var $person = new ParentClass($n, $e, $a);
	var $output = $person.produce_output();

}

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<form method="post" action="">
		<h2>Name:</h2>
		<input type="text" name="name"/>
		<h2>Email:</h2>
		<input type="text" name="email"/>
		<h2>Age:</h2>
		<input type="text" name="age"/>
		<input type="submit" value="Submit!"/>
	</form>
</body>
</html>
