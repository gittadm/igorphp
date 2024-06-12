<?php

class Car {
    private ?string $color = null;
    private ?string $model = null;
    private ?int $year = null;

    public function __construct($color = 'green', $model = 'bmw')
    {
        $this->color = $color;
        $this->model = $model;
        $this->year = 2024;
    }

    public function repaint(string $color)
    {
        $this->color = $color;

        $this->info();
    }

    public function info()
    {
        echo 'Color: ' . $this->color . '<br>';
        echo 'Model: ' . $this->model . '<br>';
        echo 'Year: ' . $this->year . '<br>';

        $this->smth();
    }

    private function smth()
    {
        // ...
    }

    public static function calculate()
    {
        echo 123;
    }
}

$audi = new Car('red', 'audi');

$audi->repaint('blue');
$audi->year = 2000;

$bmw = new Car();
$bmw->repaint('red');

Car::calculate();


