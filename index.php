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
		echo "<h2>php Syntax!</h2><hr>";
		$color = "red";
		echo "My car color is " . $color. "<br>";
		$language = "php, html, css, js, node, mongoDB, react.";
		echo "I am expert in " . $language. "<br>";
	?>

	<?php 
		#This is php variable example.
		echo "<h2>php variable example!</h2><hr>";
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
		echo "<h2>print Statements & echo Statement example!</h2><hr>";
		 #PHP echo and print Statements
		 #1.The PHP echo Statement
		 echo "<h2>PHP is Fun echo first!</h2>"; //first
		 print "<h2>PHP is Fun print than slow!</h2>"; // slow

		 echo('Learn PHP <br>');
		 print('Learn PHP <br>');
	 ?>

	 <?php 
		 echo "<h2>Data Type example!</h2><hr>";
		 #PHP Data Types
		 #var_dump diya data type chack kora hoy
		 /*
		 Variables can store data of different types, and different data types can do different things.
		PHP supports the following data types:

		1.String
		2.Integer
		3.Float (floating point numbers - also called double)
		4.Boolean
		5.Array
		6.Object
		7.NULL
		8.Resource
		*/
		#PHP String Example
		$stringExample = "I hava 10 and 5 +10 tk"; //String
		echo "$stringExample <br>";

		#PHP Integer Example
		$ages=20; //Integer
		echo "$ages <br>";

		#PHP Float Example
		$x = 10.365;
		var_dump($x);

		#PHP Boolean Example
		$t = true;
		$f = false;
		echo('<br>');
		#PHP Array Example
		$cars = array("Volvo","BMW","Toyota"); // array
		echo($cars['0']);
		#PHP Object Example
		#PHP NULL Example
		$n = "Hello world!";
		$n = null;
		echo '<br>';
		var_dump($n);
		#PHP Resource Example
		echo '<br>';
	?>

	 <?php 
	 	#PHP Strings Example
	 	echo "<h2>php Strings Example</h2><hr>";
	 	echo strlen("Hello world!"); // outputs 12
	 	echo '<br>';
	 	echo str_word_count("Hello world!"); // outputs 2
	 	echo '<br>';
	 	echo strrev("Hello world!"); // outputs !dlrow olleH
	 	echo '<br>';
	 	echo strpos("Hello world!", "world"); // outputs 6
	 	echo '<br>';
	 	echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
	 	echo '<br>';
	 ?>

	 <?php 
	 	echo('<h3>PHP Numbers Example</h3> <hr>');
	 	echo('<h4>PHP Integers</h4>');

	 ?>
</body>
</html>