<?php
/*
    Описываем человека
*/
    // имя
    $fname = "Sergey";
    // фамилия
    $lname = "Andreev";
    // возраст
    $age = 31;
    $fullName = $fname . ' ' . $lname;
    echo $fullName;
    echo '<br>';
    echo $age;

    $word = 'lower_case';
    $word = strtoupper($word);
    echo '<br>';
    echo $word;

    $upperCase = 'LOWER_UPPER';
    $upperCase = strtolower($upperCase);
    echo "<br>";
    echo $upperCase;
    echo "<br>";

    $password = "qwerty ";
    echo $password . '!';
    echo "<br>";
    echo trim($password) . '!';
    echo '<br>';

    /**
     * 2 гамбургера по 4,95
     * 2 коктель за 1,95
     * 1 кока-кола за 0,85
     * ндс 7,5%
     * чаевые от меню 16%
     */
    $sandwich = 2 * 4.95;
    $cocktail = 2 * 1.95;
    $cola = 1;
    $nds = 7.5 / 100;
    $chaevie = 16 / 100;

    $check = $sandwich + $cocktail + $cola;
    $checkWithChaevie = $check + $check * $chaevie;
    $totalCheck = $checkWithChaevie + $checkWithChaevie * $nds;
    echo "<br>";
    echo 'Счет = ' . $check . '$';
    echo "<br>";
    echo 'Счет с чаевыми = ' . $checkWithChaevie . '$';
    echo "<br>";
    echo 'Счет с чаевыми вкл. НДС = ' . $totalCheck . '$';
?>