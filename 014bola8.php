<?php
/* 014bola8.php: A partir del anterior, crea un 
    programa que muestre la pregunta recibida y genere una respuesta de 
    manera aleatoria entre un conjunto de respuestas predefinidas, 
    almacenadas en un array: Sí, no, quizás, claro que sí, por supuesto que no, 
    no lo tengo claro, seguro, yo diría que sí, ni de coña, etc...
    Este ejercicio se basa en el juego de la Bola 8 mágica-->*/

$respuestas = [
    "Sí", "No", "Quizás", "Claro que sí", "Por supuesto que no", "No lo tengo claro",
    "Seguro", "Yo diría que sí", "Ni de coña"
];
$pregunta = $_GET["pregunta"];
echo  "$pregunta <br><br> La bola del 8 dice: " . $respuestas[rand(0, count($respuestas) - 1)];
