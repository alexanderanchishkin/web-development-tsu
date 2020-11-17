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
	$array = ['Alena', 'Alexandr', 'Boris', 'Vladimir'];
	$assoc_array = [
		'name1' => $array,
		'string' => 'stroka',
		'char' => 'simvol'	
	];

	try
	{
		$num = 1 / 0;

		echo 'Succes!';
		var_dump($ex);

	}
	catch(Exception $ex)
	{
		var_dump($ex);

	}

	
/*	foreach($assoc_array as $key => $name)
	{
		echo $key . '. ' . $name . '<br>';
	}
*/
	$name = $_GET['name'];
	$lastname = $_GET['lastname'];

	echo "Вас зовут $name $lastname!";
	//echo $_POST['name'] . ' ' . $_POST['lastName'];