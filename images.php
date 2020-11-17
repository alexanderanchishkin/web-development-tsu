<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изображения</title>
</head>
<body>

<code><?=htmlspecialchars('<?php ?>')?></code>

<?php
	// include
	// include_once
	// require
	// require_once
	require_once "utilities/images_utilities.php";

	//$image_paths = ['/images/img1.png', '/images/img2.png', '/images/img3.png'];

	/* Проверяли работу scandir()
	echo "<pre>";
	var_dump(scandir("./images"));
	echo "</pre>"; */

	$image_filenames = scandir("./images");

	// images.php -> images_utilities.php -> strings_utilities.php

	foreach ($image_filenames as $image_filename)
	{
		//TODO: Проверить, является ли картинкой

		//Вывести картинку

		if (!is_image($image_filename))
			continue;

		$arr = ["img" => $image_filename];
		$image_path = "/images/{$arr['img']}";

		// <img src="/images/img1.png" />
		//echo '<img src="' . $image_path . '" />';

		//echo "<img src='$image_path' />";
		//echo "<img src=\"$image_path\" />";


?>

		<img src="<?=$image_path?>" />


<?php

	}

?>

</body>
</html>

