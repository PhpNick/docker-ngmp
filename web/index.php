<?php

require 'vendor/autoload.php';

Flight::route('/', function(){

	$host = 'db';
	$user = 'root';
	$pass = 'root';	

	$conn = mysqli_connect($host, $user, $pass);
	if (!$conn) {
	    exit('Соединение с БД завершилось с ошибкой: '.mysqli_connect_error().PHP_EOL);
	}
	 
	echo 'Используется PHP фреймворк Flight.'.PHP_EOL;

	echo 'Успешно произведено подключение к БД.'.PHP_EOL;

});

Flight::start();
