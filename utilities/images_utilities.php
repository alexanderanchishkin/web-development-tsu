<?php
	require_once "./utilities/strings_utilities.php";
	function is_image($image_path)
	{
		return endsWith($image_path, '.png');
	}