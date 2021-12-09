<?php
    $new_number = [];
    for ($i = 0; $i < 10; $i++) {
        $new_number[] = $i;
    }

    echo '<pre>';
    print_r($new_number);

    $person = [
        'name' => 'Sergey',
        'age'  => 31,
        'city' => 'New York'
    ];

    echo '<pre>';
    print_r($person);

   echo '<hr>';

   $colors = ['red', 'green', 'blue'];
   $output = '';
   foreach ($colors as $color) {
       $output = $output . ' '. $color;
   }

   $str_colors = implode(', ', $colors);
   echo "$str_colors<br>";

   $new_str = "Предложение из 4 слов";
   $arr_str = explode(' ', $new_str);

   print_r($arr_str);

   $numbers = [2, 4, 6, 10, 11, 5];

   sort($numbers);
   print_r($numbers);

   asort($person);
   print_r($person);

   ksort($person);
   print_r($person);

   krsort($person);
   print_r($person);

   echo '<hr>';

   $persons = [
       [
        'name' => 'Sergey',
        'age'  => 31,
        'city' => 'New York'
       ],
       [
        'name' => 'Ivan',
        'age'  => 30,
        'city' => 'MGN'
       ],
       [
        'name' => 'Petr',
        'age'  => 33,
        'city' => 'Kazan'
       ]
    ];

    function sortByAge($a, $b) {
        if ($a['age'] > $b['age']) {
            return 1;
        } else if ($a['age'] < $b['age']) {
            return -1;
        } else {
            return 0;
        }
    } 

    print_r($persons);

    usort($persons, 'sortByAge');
    print_r($persons);

    function sortByName($a, $b) {
        return $a['name'] <=> $b['name'];
    }

    usort($persons, 'sortByName');
    print_r($persons)
?>