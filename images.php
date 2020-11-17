
<?php
	echo 'images';
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изображения</title>
</head>
<body>

<?php
	//$image_paths = ['/images/img1.png', '/images/img2.png', '/images/img3.png'];

	/* Проверяли работу scandir()
	echo "<pre>";
	var_dump(scandir("./images"));
	echo "</pre>"; */

	$image_filenames = scandir("./images");

	function endsWith( $string, $suffix ) {
	    $length = strlen( $suffix );
	    if( !$length ) {
	        return true;
	    }
	    return substr( $string, -$length ) === $suffix;
	}

	function is_image($image_path)
	{
		return endsWith($image_path, '.png');
	}

	foreach ($image_filenames as $image_filename)
	{
		//TODO: Проверить, является ли картинкой

		//Вывести картинку

		if (!is_image($image_filename))
			continue;

		$image_path = "/images/$image_filename";

		// <img src="/images/img1.png" />
		echo '<img src="' . $image_path . '" />';
	}

?>

</body>
</html>

