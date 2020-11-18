$(function() {
	console.log("jQuery работает");

	$('.load_images_button').on('click', function() {
		$.ajax({
			url: './load_images.php',
			method: 'GET'
		}).done(function(response) {
			console.log('done');
			console.log(response);
			$('.images_container').html(response);
		}).fail(function(response) {
			console.log('fail');
			console.log(response);
		});
	});

	$('.load_images_json').on('click', function() {
		$.ajax({
			url: './load_images_json.php',
			method: 'GET'
		}).done(function(response) {
			console.log('done');
			console.log(response);

			let json = JSON.parse(response);
			console.log(json);

			json.images.forEach(function(image) {
				let img = "<img src='" +
								image.path + "' width=400 alt='" + image.description + "' />";

				$('.images_container').html($('.images_container').html() + img);
			});

		}).fail(function(response) {
			console.log('fail');
			console.log(response);
		});
	});

	$('.start_task_button').on('click', function() {
		$.ajax({
			url: './start.php',
			method: 'GET'
		}).done(function(response) {
			setInterval(function() {
				$.ajax({
					url: './progress.php?task_id=123',
					method: 'GET'
				}).done(function(response) {
					console.log('Прогресс: ' + response + '%');
				}).fail(function(response) {

				});
			}, 2000);

		}).fail(function(response) {
			console.log('failed to start task');
		});
	});
});