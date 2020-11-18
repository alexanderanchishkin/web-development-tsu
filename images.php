<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изображения</title>
</head>
<body>

<form enctype="multipart/form-data" method="POST" action="./upload_image.php">
	<input type="file" name="filename"><br>
	<input type="submit" value="Отправить изображение">
	<input type="hidden" name="description" value="Загрузка изображения">
</form>

<button class="load_images_button">Загрузить изображения</button>
<button class="start_task_button">Старт задачи</button>

<div class="images_container"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/images.js"></script>

</body>
</html>

