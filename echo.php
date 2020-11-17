<?php
/*
	$b = $_GET['a'] . "<br>";
	echo $b;
	$a = 1;
	$b = 'Hello $a World! ' . $a;
	$c = '1';
	if ($a == $c)
	{

	}
	else
	{

	}
*/

	$name = $_GET['name'];
	$lastname = $_GET['lastname'];

	echo "Вас зовут $name $lastname!";
	//echo $_POST['name'] . ' ' . $_POST['lastName'];