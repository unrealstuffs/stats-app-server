<?php
header('Access-Control-Allow-Origin: http://localhost:3000');
header('Content-Type: application/json; charset=utf-8');

$phrases = ["Пока что нет", "Все еще нет", "К сожалению нет"];

$response = [
	"text" => $phrases[array_rand($phrases)]
];

echo json_encode($response);

?>