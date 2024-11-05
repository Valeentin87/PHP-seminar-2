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
<h2 style="color:green;"> Демонстрация решения задания № 1 </h2>
<h2 style="font-style:italic; color:blue;">Результат выполнения скрипта: mathOperation(2, 3, '+') </h2>
<p style="font-size: 30pt"> <?php echo mathOperation(2, 3, '+'); ?> </p>

<h2>Результат выполнения скрипта: mathOperation(210, 23, '-') </h2>
<p style="font-size: 30pt"> <?php echo mathOperation(210, 23, '-'); ?> </p>

<h2 style="font-style:italic; color:blue;">Результат выполнения скрипта: mathOperation(12, 3, '*') </h2>
<p style="font-size: 30pt"> <?php echo mathOperation(12, 3, '*'); ?> </p>

<h2 style="font-style:italic; color:blue;">Результат выполнения скрипта: mathOperation(12, 3, '/') </h2>
<p style="font-size: 30pt"> <?php echo mathOperation(12, 4, '/'); ?> </p>

<h2 style="font-style:italic; color:blue;">Результат выполнения скрипта: mathOperation(2, 0, '/') </h2>
<p style="font-size: 30pt; color:red;"> <?php echo mathOperation(2, 0, '/'); ?> </p>

<h2  style="color:green;">Демонстрация решения задания № 2 </h2>
<?php
/*
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – 
массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, 
чтобы результат был таким: Московская область: Москва, Зеленоград, Клин Ленинградская область: Санкт-Петербург, 
Всеволожск, Павловск, Кронштадт Рязанская область … (названия городов можно найти на maps.yandex.ru).
*/


$cityArr = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Сапожок', 'Скопин', 'Ярск']
];

$allCities = '';
foreach($cityArr as $key => $elem){
    $allCities = $key.":";
    foreach($elem as $city){
        $allCities .= $city.', ';
    }
    echo rtrim($allCities, ', ')."<br>";
    
};
