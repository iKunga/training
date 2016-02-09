<?php

//модель - данные
//контроллер - управление согласно произведенному действию
//views - вид, который меняет контроллер

define('ROOT',dirname(__FILE__));
// регулярные выражения - еще один способ
// работы со строками

//регулярные выражения позволяют найти строку в строке 
//по более сложным правилам

$string = 'This is a good page 2016';
$pattern = '/20[0-9]{2}/'; // 20-начало строки
//[0-9] - символы которые могут быть дальше строке
//// {2} КОЛИЧЕСТВО СИМВОЛОВ
//$pattern = '/.*good.*/'; //шаблон

//поиск совпадения
$result = preg_match($pattern,$string);
//распечатаем результат
//var_dump($result);


include_once ROOT.'/components/Router.php';
$router = new Router();

$router->run();

//echo "Hello world!";
