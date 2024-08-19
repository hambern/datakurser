<?php

class Fruit
{
    public $name;
    public $color;
    public $shape;
    public $taste;

    public function __construct($name = 'fruit', $color = 'colored', $shape = 'fruit-shaped', $taste = 'like a fruit')
    {
        $this->name = $name;
        $this->color = $color;
        $this->shape = $shape;
        $this->taste = $taste;
    }

    public function describe()
    {
        return "I'm a {$this->color} and {$this->shape} {$this->name}, and i taste {$this->taste}!";
    }

    public function eat()
    {
        return "This {$this->name} tastes {$this->taste}!";
    }
}

class Apple extends Fruit {

    public function __construct($name = 'apple', $color = 'red', $shape = 'round', $taste = 'sweet')
    {
        parent::__construct($name, $color, $shape, $taste);
    }
}

$apple = new Apple();

echo $apple->describe();

echo $apple->eat();