<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изображения</title>
</head>
<body>

<form enctype="multipart/form-data" method="POST" action="./load_image.php">
	<input type="file" name="filename"><br>
	<input type="submit" value="Отправить изображение">
	<input type="hidden" name="description" value="Загрузка изображения">
</form>

<?php
	require_once "utilities/images_utilities.php";
	print_images('./images/');
?>

</body>
</html>

