<?php
class Car {

    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function drive() {
        echo "$this->brand $this->model driving<br>";
    }
}

$bmwX5 = new Car('BMW', 'X5', 2020);
$audiA4 = new Car('Audi', 'A4', 2021);
//$mersedesGL = new Car();

$bmwX5->drive();