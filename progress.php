<?php
	if (!isset($_GET['task_id']))
		die();

	$task_id = $_GET['task_id'];

	// TODO: check progress

	$progress = 75;
	echo $progress;