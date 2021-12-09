<?php

function sayHello () {
    echo 'Hello<br>';
}

function plusOne($a) {
    echo ++$a . '<br>';
}

function sumNumbers ($a, $b, $c = 0) {
    echo $a + $b + $c . '<br>';
}

function returnPlusOne ($a) {
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
}

sayHello();

plusOne(1);

$number = 218;
plusOne($number);

sumNumbers(2, 7);

$number = 50;
$result = returnPlusOne($number); 
echo "Старое число: {$result['oldValue']}, новое число: {$result['newValue']} <br>";  

$numbers = [1, 5, 3, 7, 2, 4];

function maxNumber (array $numbers) {
    $maxElem = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $maxElem) {
            $maxElem = $number;
        }
    }
    return $maxElem;
}

function sumArray(array $numbers) {
    $res = 0;
    foreach($numbers as $number) {
        $res += $number;
    }
    return $res;
}

echo maxNumber($numbers) . '<br>';

echo 'Сумма массива: ' . sumArray($numbers) . '<br>';