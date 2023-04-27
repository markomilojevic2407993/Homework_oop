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


    echo $nikola->weight.'<br>'.$nikola->age.'<br>'.$nikola->height.'<br>'.$nikola->hair_color.'<br>'.$nikola->eye_color.'<br>';



?>