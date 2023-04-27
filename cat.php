<?php 

include 'animals.php';

class cat extends animals{
    public $vaccination;
    public $num_exibition;
    public $owner_name;
}

$katica= new cat;
$katica->kind='Maine cun';
$katica->hair_color='blue, white, grey';
$katica->weight=2.5;
$katica->vaccination='6.5.23 next vaccination';
$katica->num_exibition=0;
$katica->owner_name='Marko';


echo $katica->kind.'<br>'.$katica->weight.'<br>'.$katica->hair_color.'<br>'.$katica->vaccination.'<br>'.$katica->num_exibition.'<br>'.$katica->owner_name.'<br>';







?>