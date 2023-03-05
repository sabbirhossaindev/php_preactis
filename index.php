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

	 	echo('<h4>PHP Integers</h4>'); // purno sonka ki na ta janer jonno Integer use kore hoy.
	 	#var_dump with is_int()
	 	$x = 5985;
		var_dump(is_int($x));
		echo '<br>';
		$y = 59.85;
		var_dump(is_int($y));
		echo '<br>';

		#var_dump with is_integer()
		$intg = 5000;
		var_dump(is_integer($intg));
		echo '<br>';

		#var_dump with is_long();
		$xyz = 4000.5;
		var_dump(is_long($xyz));
		echo '<br>';
		
		echo('<h4>PHP Floats</h4>'); // dosimik ki na cheack korer jonno;
		# is_float();
		$flo = 10.365;
		var_dump(is_float($flo));
		echo '<br>';

		#is_double();
		$dub = 1000;
		var_dump(is_float($dub));

		echo('<h4>PHP Infinity</h4>'); // infinite number chack korer er jonno
		#is_finite()
		$inf = 1.9e411;
		var_dump($inf);

		#is_infinite()
		$inft = 1e411;
		var_dump($inft);

		echo('<h4>PHP NaN</h4>'); // not a number chack korer jonno.
		#is_nan();

		$x = sqrt(-1);
		var_dump(is_nan($x));

		echo('<h4>PHP numeric</h4>'); // number ki  na ta cheack koreta is_numeric use hoy.
		$x = 5985;
		var_dump(is_numeric($x)); // bool(true)

		echo "<br>";

		$x = "5985";
		var_dump(is_numeric($x)); // bool(true)

		echo "<br>";

		$x = "59.85" + 100;
		var_dump(is_numeric($x)); // bool(true)

		echo "<br>";

		$x = "Hello";
		var_dump(is_numeric($x)); // bool(false)
		echo "<br>";

		echo('<h4>PHP Casting Strings and Floats to Integers</h4>');
		// Cast float to int
		$x = 23465.768;
		$int_cast = (int)$x;
		echo $int_cast;

		echo "<br>";

		// Cast string to int
		$x = "23465.768";
		$int_cast = (int)$x;
		echo $int_cast;
	 ?>

	 <?php 
	 	echo('<h3>PHP Math Example</h3> <hr>');
	 	#php()
	 	echo(pi());
	 	echo "<br>";
	 	#min()
	 	echo(min(0, 150, 30, 20, -8, -200));  // returns -200
	 	echo "<br>";
	 	#max()
		echo(max(0, 150, 30, 20, -8, -200));  // returns 150
		echo "<br>";
		#abs
		echo(abs(-6.7));  // returns 6.7
		echo "<br>";
		#sqrt
		echo(sqrt(64));  // returns 8
		echo "<br>";
		#round
		echo(round(0.60));  // returns 1
		echo(round(0.49));  // returns 0
		echo "<br>";
		#rand
		echo(rand(1, 6)); // random ii 
		echo "<br>";
	  ?>
</body>
</html>