$(function() {

let interval;

function getRandomNumber(a, b)
{
	let r = Math.random();
	let maxR = b - a;

	let randomNumber = a + Math.round(r * maxR);
	return randomNumber;
}

function printRandom()
{
	let randomNumber = document.querySelector("#randomNumber");
	randomNumber.innerHTML = getRandomNumber(1, 100);
}

function clickRandom()
{
	clearInterval(interval);
}

function clickTransit()
{
	//document.location.href = "/second.html";

	let name = $(".name-field").val();
	let lastName = $(".lastname-field").val();

	// Это ajax запрос. Его нужно доделать.
	// TODO: Доделать ajax запрос.
	$.ajax({
		url: "http://web-site/echo.php",
		async: true,
		method: "POST",
		data: {
			"name": name,
			"lastName": lastName
		},
		dataType: "json",
	});
}

function changeTextSize(newSize)
{
	let p = document.querySelector(".abc p");
	p.style.fontSize = newSize + "px" + 1;
}

function sayHello()
{
	//TODO: Передать привет от всех!
	console.log("Привет от Александра!");
  
	console.log("Привет из Белгорода!");

	console.log("Привет от Ленара);

	console.log("Привет от Un-R");


        console.log("Привет от Виктора");



	console.log("Привет от Иры из Калининграда!)");

	console.log("Здесь был я");



	console.log("Привет от albert-garipov");

	console.log("Привет от EvgenyShevelev");
	console.log("Hello from Navka");
	console.log("Привет из солнечной Чувашии");



	console.log("Есть Казанские?))");

	console.log("Привет из солнечной Чувашии");

	console.log("Привет от Артема");
	console.log(" Hello from Ilon Masl");




	console.log("Привет из солнечной Чувашии");

	console.log("Привет от Дмитрия");


}
function main()
{
	sayHello();
	let helloH1 = document.getElementById("hello");

	let button = document.createElement("button");
	$(button).html("Отправить");

	document.body.appendChild(button);

	$(button).on("click", clickTransit);

	//           0         1 		2			3			4		5
	let a = ["Первый", "Второй", "Третий", "Четвёртый", "Пятый", "Шестой"];

	let b = {
		property: "value"
	};

	let arr = [
		{
			name: "Вася",
			lastName: "Иванов"
		},
		{
			name: "Петя",
			lastName: "Петров"
		},
		{
			name: "Ваня",
			lastName: "ААА"
		},
		{
			name: "333",
			lastName: "БББ"
		},
		{
			name: "444",
			lastName: "111"
		},
		{
			name: "555",
			lastName: "222"
		}
	];

	// <p>Первый</p>
	// <p>Второй</p>
	// <p>Третий</p>

	/*for (let i = 0; i < arr.length; i++)
	{
		let p = document.createElement("p");
		p.innerHTML = arr[i].name + " " + arr[i].lastName;
		document.body.appendChild(p);
	}*/

	function aa(element)
	{
		let p = document.createElement("p");
		p.innerHTML = element.name + " " + element.lastName;
		document.body.appendChild(p);
	};

	arr.forEach(aa);
/*
	interval = setInterval(function() {
		//printRandom();
		changeTextSize(getRandomNumber(15, 70));
	}, 500);

	setTimeout(function() {
		clickRandom();
	}, 6000);

*/

	//document.body.removeChild(document.querySelector("button"));



	// helloH1.innerHTML = "Пока!";
	//

	//let body = document.getElementsByTagName("body")[0];
	//console.log(body);

	//document.getElementById
	//document.getElementsByTagName
	//document.getElementsByClassName



	//console.log(p);
}

main();

});