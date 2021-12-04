<?php
    $number = 4;

    if ($number > 5) {
        echo '10 больше 5';
    }

    echo '<br>';
    echo 'Это строка выводится всегда';
    
    if ($number > 5) {
        echo '<br>';
        echo 'число больше 5';
    } else {
        echo '<br>';
        echo 'число меньше или равно 5';
    }

    if ($number > 5) {
        echo '<br>';
        echo 'число больше 5';
    } else if ($number > 3) {
        echo '<br>';
        echo 'число меньше или равно 5, но больше 3';
    } else if ($number > 0) {
        echo '<br>';
        echo 'либо 1, либо 2, либо 3';
    } else {
        echo '<br>';
        echo '0 либо отрицательное';
    }


/**
 * вывести одно из сообщений
 * если возраст меньше 7: Вы дошкольник
 * если старше 6 и младше 19: Вы в школе
 * если старше 17: Закончили школу
 */
echo '<br>';
echo '<form method="post">
        <input type="text" name="age">
        <button name=click>Проверить</button>
      </form>';

    if (isset($_POST['age']) and isset($_POST['click'])) {
        $age = $_POST['age'];

        if ($age >= 19) {
            echo "Ура! Вы закончили школу";
        } else if ($age < 19 && $age > 6) {
            echo "Вы школьник.";
        } else {
            echo "Вы дошкольник.";
        }
    
    }
?>