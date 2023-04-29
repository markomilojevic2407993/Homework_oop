<?php 

class person{
    public $height;
    public $weight;
    public $eye_color;
    public $age;
    public $hair_color;
    public $place_live;
}

$nikola=new person;
    $nikola->age=30;
    $nikola->height=180;
    $nikola->weight=100;
    $nikola->eye_color='blue';
    $nikola->hair_color='black';


    echo 'Weight:'.$nikola->weight.'<br>'.'Age:'.$nikola->age.'<br>'.'Height:'.$nikola->height.'<br>'.'Hair color:'.$nikola->hair_color.'<br>'.'Eye color:'.$nikola->eye_color.'<br>';



?>