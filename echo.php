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

	$array = ['Алёна', 'Александр', 'Борис', 'Владимир'];
	$assoc_array = [
		'names' => $array,
		'string' => 'строка',
		'char' => 'символ'
	];

	try
	{
		$div = 0;

		if ($div === 0)
			throw new Exception("Деление на ноль");

		$num = 1 / $div;

		echo 'Success!';
		var_dump($num);
	}
	catch(Exception $ex)
	{
		echo 'Exception!';
		var_dump($ex);
	}

/*
	foreach($assoc_array as $key => $name)
	{
		echo $key . '. ' . $name . '<br>';
	}

*/

	$name = $_GET['name'];
	$lastname = $_GET['lastname'];

	echo "Вас зовут $name $lastname!";
	//echo $_POST['name'] . ' ' . $_POST['lastName'];

