/*Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
Обязательно использовать оператор return*/

<?php

function sum ($a, $b) {
    return $a + $b;
}

function difference ($a, $b) {
    return $a - $b;
}

function multiplication ($a, $b) {
    return $a * $b;
}

function division ($a, $b) {
    return $a / $b;
}

echo 'Сумма чисел: ' . sum(5,10).'<br>';
echo 'Разность чисел: ' . difference(20,2).'<br>';
echo 'Произведение чисел: ' . multiplication(8,7).'<br>';
echo 'Деление чисел: ' . division(6,2).'<br>';

?>