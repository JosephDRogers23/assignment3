
<?php
include 'ParentClass.php';
include 'ChildClass.php';


?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<?php
	if (!$_POST) {
		?>
	<form method="post" action="">
		<h2>Name:</h2>
		<input type="text" name="name"/>
		<h2>Email:</h2>
		<input type="text" name="email"/>
		<h2>Age:</h2>
		<input type="text" name="age"/>
		<input type="submit" value="Submit!"/>
	</form>
	<?php
}
else {
	$post = $_POST;
	$n = $post['name'];
	$e = $post['email'];
	$a = $post['age'];
	$person = new ParentClass($n, $e, $a);
	#$person->setName($n);
	#$person->setAge($a);
	#$person->setEmail($e);
	echo "<p>Your name: " . $person->getName() . "</p><br><br>";
	echo "<p>Your email: " . $person->getEmail() . "</p><br><br>";
	echo "<p>Your age: " . $person->getAge() . "</p><br><br>";
	$output = $person->produceOutput();
	echo "<p>The data from the parent class will now be displayed as <br> your age to the power of the length of your name.</p><br>";
	echo "<p>Your output from the parent class is: " . $output . "</p><br> <br>";
	$child = new ChildClass($n, $e, $a);
	$output2 = $child->produceOutput();
	echo "<p>The data from the child class will now be displayed as <br> your age times the length of your email address.</p><br>";
	echo "<p>Your output from the child class is: " . $output2 . " </p><br><br>";

}

	?>
</body>
</html>
