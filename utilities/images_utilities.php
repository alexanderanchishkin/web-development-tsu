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

	function get_image($image_directory, $image_filename)
	{
		if (!is_image($image_filename))
			return false;

		$image_path = "$image_directory/$image_filename";
		$description = "Картинка";

		return [
			'path' => $image_path,
			'description' => $description
		];
	}

	function get_image_paths($image_directory)
	{
		$image_filenames = scandir($image_directory);

		$response = [
			'images' => [],
			'count' => 0
		];

		foreach ($image_filenames as $image_filename)
		{
			$image = get_image($image_directory, $image_filename);
			if ($image === false)
				continue;

			array_push($response['images'], $image);
		}

		$response['count'] = count($response['images']);

		$json = json_encode($response, JSON_UNESCAPED_UNICODE);

		print($json);
	}