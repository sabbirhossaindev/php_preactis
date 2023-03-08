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

	<?php 
		#To create a constant, use the define() function.
		echo('<h3>PHP Constants Example</h3> <hr>');

		define("SABBIR", "hey, i am simple."); // first a constant er 'name', tarpor value
		echo SABBIR; // name diya call korta hoba
		echo "<br>";

		define('HPI', 'I reade in diploma in 7th semester in computer subject.');
		echo HPI;
		echo "<br>";

		echo('<h5>PHP Constant Arrays</h5>');

		define("cars", [
		  "Alfa Romeo",
		  "BMW",
		  "Toyota"
		]);
		echo cars[0]; // Alfa Romeo
		echo "<br>";

		define("func", "Welcome to my php preactis");

		function myTest() {
		  echo func;
		}
		
		myTest();
	?>

	<?php 
		echo('<h3>PHP Operators Example</h3> <hr>');
		/*
		Arithmetic operators
		Assignment operators
		Comparison operators
		Increment/Decrement operators
		Logical operators
		String operators
		Array operators
		Conditional assignment operators
		*/

		echo('<p>PHP Arithmetic Operators</p>');
		echo ('+, - , *, /, %, ** <br>');

		echo('<p>PHP Assignment Operators</p>');
		echo ('=, += , -=, *=, /=, %=');

		echo('<p>PHP Comparison Operators</p>');
		echo ('==, === , !=, <>, !==, >, <, >=, <=, <=>');

		echo('<p>PHP Increment / Decrement Operators</p>');
		echo ('++$x, $x++, --$x, $x--');

		echo('<p>PHP Logical Operators</p>');
		echo ('and, or, xor, &&, ||, !');

		echo('<p>PHP String Operators</p>');
		echo ('., .='); 

		echo('<p>PHP Array Operators</p>');
		echo ('+, ==, ===, !=, <>, !=='); 

		echo('<p>PHP Conditional Assignment Operators</p>');
		echo ('?:, ??');
	 ?>

	 <?php 
	 	echo('<h3>PHP if...else...elseif Statements</h3> <hr>');

		$a = 50;
		$b = 10;
		if($a > $b){
		  echo "Hello World";
		}

		echo "<br>";

		$a = 50;
		$b = 10;
		if($a!=$b){
		  echo "Hello PHP";
		}

		echo "<br>";

		$a = 50;
		$b = 10;
		if($a == $b) {
		  echo "1";
		} 
		elseif
		 ($a > $b) {
		  echo "2";
		} 
		else
		 {
		  echo "3";
		}

		echo "<br>";

		$pass = '0808';
		if($pass == '0808'){
			echo "Your password is Right";
		}else{
			echo "Your password is wrong";
		}
	 ?>

	 <?php 
	 	echo('<h3>PHP switch Statement</h3> <hr>');

	 	$color = "green";
		switch ($color) {
		  case "red":
		    echo "Your favorite color is red!";
		    break;
		  case "blue":
		    echo "Your favorite color is blue!";
		    break;
		  case "green":
		    echo "Your favorite color is green!";
		    break;
		  default:
		    echo "Your favorite color is neither red, blue, nor green!";
		}
		echo "<br>";
	 ?>

	 <?php 
	 	echo('<h3>PHP Loops Example</h3> <hr>');
	 	/*
			1. while - loops through a block of code as long as the specified condition is true
			2. do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
			3. for - loops through a block of code a specified number of times
			4. foreach - loops through a block of code for each element in an array
	 	 */

		echo('<p>PHP while Loops Example <br>
			_______________________</p>');
		/*
			Syntax
			__________
			while (condition is true) {
			  code to be executed;
			}
		 */
		$x = 1;
		while($x <= 10) {
		  echo "The number is: $x <br>";
		  $x++;
		}

		echo('<p>PHP do while Loops Example <br>
			_______________________</p>');
		/* 
			Syntax
			___________
			do {
			  code to be executed;
			} while (condition is true);
		*/
		$x = 1;
		do {
		  echo "The number is: $x <br>";
		  $x++;
		} while ($x <= 5);

		echo "<br>";
		echo('<p>PHP for Loop Example <br>
			_______________________</p>');

		/* 
		Syntax
		____________
		for (init counter; test counter; increment counter) {
		  code to be executed for each iteration;
		}		
		*/

		for ($x = 1; $x <= 10; $x++) {
		  echo "The number is: $x <br>";
		}

		for ($x = 0; $x <= 100; $x+=10) {
		  echo "The number is: $x <br>";
		}


		echo "<br>";
		echo('<p>PHP foreach Loop Example <br>
			_______________________</p>');

		/* 
		Syntax
		foreach ($array as $value) {
			code to be executed;
		}		
		*/

		$colors = array("red", "green", "blue", "yellow");

		foreach ($colors as $value) {
		  echo "$value <br>";
		}

		echo "<br>";
		echo('<p>PHP Break and Continue <br>
			_______________________</p>');

		$x = 1;

		while($x <= 10) {
		  if ($x == 6) {
		    break;
		  }
		  echo "The number is: $x <br>";
		  $x++;
		}

		$x = 0;

		while($x <= 10) {
		  if ($x == 4) {
		    $x++;
		    continue;
		  }
		  echo "The number is: $x <br>";
		  $x++;
		}
	 ?>

	 <?php 
	 	echo "<br>";
		echo('<h4>PHP Functions Example <hr></h4>');

		/*
		Syntax
		function functionName() {
		  code to be executed;
		}
		*/

		function laptop() {
			echo 'I have a Dell laptop.';
		}
		laptop();

		echo "<br>";
		echo('<p>PHP Function Arguments Example <br>
			_______________________</p>');
		function familyName($fname, $year, $age) {
		  echo "$fname Refsnes. Born in $year and age is $age.<br>";
		}

		familyName("Sabbir Hossain", "2003", "19");
		familyName("Nadim Joy", "2006", "15");
		familyName("Muhib Nihon", "2013", "11");

		echo "<br>";
		echo('<p>PHP is a Loosely Typed Language Example <br>
			_______________________</p>');
			
		function addNumbers(int $a, int $b) {
		  return $a + $b;
		}
		echo addNumbers(5, 5);


		/*
		<?php declare(strict_types=1); // strict requirement

			function addNumbers(int $a, int $b) {
			  return $a + $b;
			}
			echo addNumbers(5, "5 days");
			// since strict is enabled and "5 days" is not an integer, an error will be thrown
		?>
		*/

	 ?>



</body>
</html>