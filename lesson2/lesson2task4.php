/* Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */

<?php

function sum ($arg1, $arg2) {
    return $arg1 + $arg2;
}

function difference ($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiplication ($arg1, $arg2) {
    return $arg1 * $arg2;
}

function division ($arg1, $arg2) {
    return $arg1 / $arg2;
}

function mathOperation($arg1,$arg2,$operation)
{
    switch ($operation) {
        case '+':
            return sum ($arg1, $arg2);
            break;

        case '-':
            return difference ($arg1, $arg2);
            break;

        case '*':
            return multiplication ($arg1, $arg2);
            break;

        case '/':
            return division ($arg1, $arg2);
            break;
    }
}
echo mathOperation(1,2,'+');

?>