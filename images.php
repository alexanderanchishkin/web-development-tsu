<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изображения</title>
</head>
<body>

<code><?=htmlspecialchars('<?php ?>')?></code>

<?php

	define("ROOT", $_SERVER['DOCUMENT_ROOT']);

	require_once "utilities/images_utilities.php";

	function print_image($image_directory, $image_filename)
	{
		if (!is_image($image_filename))
			return;

		$image_path = "$image_directory/$image_filename";

		echo "<img src=\"$image_path\" />";
	}

	function print_images($image_directory)
	{
		$image_filenames = scandir($image_directory);

		foreach ($image_filenames as $image_filename)
			print_image($image_directory, $image_filename);
	}


	print_images('./images/');
?>

</body>
</html>

