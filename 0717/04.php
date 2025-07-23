<?php

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

class Fruit{
    private $fruit;
    private $color;

    function full($fruit,$color){
        $this->fruit=$fruit;
        $this->color=$color;
        $text="$this->color 的 $this->fruit 掉下來了";
        echo $text;
    }
}

class Car{
    public $name;
    public $color;

    function run($name,$color){
        // echo "$this->color 的 $this->name 正在跑";
        $this->name=$name;
        $this->color=$color;
        echo "$this->color 的 $this->name 正在跑";
    
    }
}

$apple=new Fruit();
$car=new Car();


$apple->full("蘋果","紅色");
echo "<br>";
// $car->name='小客車';
// $car->color='紅色';
// $car->run();
$car->run("小客車","紅色");