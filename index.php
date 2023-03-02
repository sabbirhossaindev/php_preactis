<!DOCTYPE html>
<html>
<head>
	<title>My PHP Preactis</title>
</head>
<body>
	<header>
		<h4>PHP Explore</h4>
		<hr>
	</header>
	<?php
		echo "welcome to my php code.";
	?>
	<br>

	<?php
		// This is a php Syntax.

		// comment using
		# This is also a single-line comment
		/*
		This is a multiple-lines comment block
		that spans over multiple
		lines
		*/
		/* + 15 */
		?>

	<?php
		$color = "red";
		echo "My car color is " . $color. "<br>";
		$language = "php, html, css, js, node, mongoDB, react.";
		echo "I am expert in " . $language. "<br>";
	?>

	<?php 
		#This is php variable example.
		$myBalance = 5 +10 +10;
		echo "my balance is total " .$myBalance . "<br>";
		$tex = "this is text variable.";
		echo "Hey ". $tex ."<br>"; 
		# the sum of two variables
		$x = 5;
		$y = 4.5;
		echo $x + $y;
	 ?>

	 <?php
	 #PHP echo and print Statements

	 #1.The PHP echo Statement
	 echo "<h2>PHP is Fun echo first!</h2>"; //first
	 print "<h2>PHP is Fun print than slow!</h2>"; // slow

	 echo('Learn PHP <br>');
	 print('Learn PHP');
	 ?>
</body>
</html>