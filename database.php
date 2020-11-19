<?php

	function connect_to_bd()
	{
		$username = 'root';
		$password = 'root';

		try {
		  $pdo = new PDO("mysql:host=localhost;dbname=web_development_tsu", $username, $password);
		  // set the PDO error mode to exception
		  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		  return $pdo;
		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		  die();
		}
	}

	function write_image_to_database($filepath, $description)
	{
		$pdo = connect_to_bd();

		try {
		  $sql = "INSERT INTO images VALUES (NULL, '$filepath', '$description')";
		  $pdo->exec($sql);

		  echo "Insert successfully";
		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}

		//var_dump($pdo);
	}

	function load_description_from_database($filepath)
	{
		$pdo = connect_to_bd();

		$sql = "SELECT description FROM images WHERE filepath='$filepath'";
		$stmt = $pdo->prepare($sql);
		$stmt->execute();

		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		var_dump($stmt->fetchAll());
	}
