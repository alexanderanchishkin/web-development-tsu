<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изображения</title>
</head>
<body>

<code><?=htmlspecialchars('<?php ?>')?></code>

<?php

	require_once "utilities/images_utilities.php";



	function print_images($image_directory)
	{

	}

	$image_filenames = scandir("./images");


	foreach ($image_filenames as $image_filename)
	{
		if (!is_image($image_filename))
			continue;

		$arr = ["img" => $image_filename];
		$image_path = "/images/{$arr['img']}";
?>
		<img src="<?=$image_path?>" />
<?php
	}
?>

</body>
</html>

