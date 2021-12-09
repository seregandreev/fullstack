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
?>