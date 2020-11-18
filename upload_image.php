<?php

	$filename = $_FILES['filename'];
	$name = $filename['name'];
	$tmp_name = $filename['tmp_name'];
	$type = $filename['type'];

	if ($type !== 'image/png')
	{
		echo 'Допустима загрузка файлов только с расширением .png!';
		die();
	}

	$d = new \DateTime();

	$datetime_string = $d->format("Y_m_d__H_i_s");
	//17.11.2020 16:53:01
	//2020_11_17T16_53_01

	define("ROOT", $_SERVER['DOCUMENT_ROOT']);

	$uploaded_image_directory = ROOT . '/images/';
	$image_fullname = $datetime_string . '_' . str_replace(' ', '_', $name);
	$image_fullpath = $uploaded_image_directory . $image_fullname;

	$success = move_uploaded_file($tmp_name, $image_fullpath);
	if (!$success)
	{
		echo "Файл загрузить не удалось!";
		die();
	}


	require_once "database.php";
	$description = "Описание";
	//write_image_to_database($image_fullpath, $description);
	load_description_from_database($uploaded_image_directory . '2020_11_17__17_27_42_image.png');

	//echo "Файл загружен успешно!";

	//header('Location: /images.php');
