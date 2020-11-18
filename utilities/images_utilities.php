<?php
	require_once "./utilities/strings_utilities.php";
	function is_image($image_path)
	{
		return endsWith($image_path, '.png');
	}

	function print_image($image_directory, $image_filename)
	{
		if (!is_image($image_filename))
			return;

		$image_path = "$image_directory/$image_filename";

		echo "<img src=\"$image_path\" width=400/>\n";
	}

	function print_images($image_directory)
	{
		$image_filenames = scandir($image_directory);

		foreach ($image_filenames as $image_filename)
			print_image($image_directory, $image_filename);
	}