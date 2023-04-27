<?php 

include 'animals.php';


class dog extends animals{

    public $vaccination;
    public $num_exibition;
    public $owner_name;
}

$miki= new dog;
$miki->hair_color='black';
$miki->kind='mix, pulin and labrador';
$miki->weight='25kg';
$miki->vaccination='all';
$miki->num_exibition=2;
$miki->owner_name='Marko';

echo $miki->hair_color.'<br>'.$miki->kind.'<br>'.$miki->weight.'<br>'.$miki->vaccination.'<br>'.$miki->num_exibition.'<br>'.$miki->owner_name.'<br>';




?>