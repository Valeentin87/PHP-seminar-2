<?php
/*
1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.

2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

echo "Решение задачи № 1 к семинару № 2 по PHP."."<br>";

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation){
        case '+':
            return $arg1 + $arg2;
            break;
        case '-':
            return $arg1 - $arg2;
            break;
        case '*':
            return $arg1*$arg2;
            break;
        case '/':
            if ($arg2 === 0){
                return 'Делить на ноль нельзя';
            } 
            else {
                return $arg1/$arg2;
            }
            break;
        default:
            return 'Нужная операция не выбрана';
    }
}
?>

<h2>Результат выполнения скрипта: mathOperation(2, 3, '+') </h2>
<p> <?php echo mathOperation(2, 3, '+'); ?> </p>

<h2>Результат выполнения скрипта: mathOperation(210, 23, '-') </h2>
<p> <?php echo mathOperation(210, 23, '-'); ?> </p>

<h2>Результат выполнения скрипта: mathOperation(12, 3, '*') </h2>
<p> <?php echo mathOperation(12, 3, '*'); ?> </p>

<h2>Результат выполнения скрипта: mathOperation(12, 3, '/') </h2>
<p> <?php echo mathOperation(12, 3, '/'); ?> </p>

<h2>Результат выполнения скрипта: mathOperation(2, 0, '/') </h2>
<p> <?php echo mathOperation(2, 0, '/'); ?> </p>
