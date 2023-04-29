<?php 

include 'animals.php';

class cat extends animals{
    public function __construct($kind, $owner_name) //u zagradu stavis, obaveznu public....obavezni parametri, stampa odma 
    {
        echo $this->kind='Vrsta_macke:'.$kind;
        echo '<br>';
        echo $this->owner_name='vlasnik:'.$owner_name.'<br>';
        echo '<br>';
    } 
    
    public $vaccination;
    public $num_exibition;
    public $owner_name;
    
    public function nekaMjaukne(){                    
        echo $this->kind.'<br.>OVO JE VRSTA.<br>';  //ugradnja u odredjni public, this je rezervisana rec za new class
    }
}


$katica= new cat('Maine cun', 'Marko');
$katica->kind='Maine cun';
$katica->hair_color='blue, white, grey';
$katica->weight=2.5;
$katica->vaccination='6.5.23 next vaccination';
$katica->num_exibition=0;
$katica->owner_name='Marko';



$izi= new cat('Persian', 'Nikola');
$izi->kind='Persian';
$izi->hair_color='white';
$izi->weight='20kg';
$izi->vaccination='all';
$izi->num_exibition='10';
$izi->owner_name='Nikola';

$lora= new cat('Russian', 'Cedomir');
$cile= new cat('treeColor', 'Ratko');


echo '<hr>';

echo '<hr>';
echo $katica->nekaMjaukne().'Vrsta:'.$katica->kind.'<br> Tezina:'.$katica->weight.'<br> Boja-dlake:'.$katica->hair_color.'<br> Preostale_vakcinacije:'.$katica->vaccination.'<br> broj_izlozvbi:'.$katica->num_exibition.'<br> ime_vlasnika:'.$katica->owner_name.'<hr>';
echo '<hr>';
echo 'Vrsta:'.$izi->kind.'<br> Tezina:'.$izi->weight.'<br> Boja-dlake:'.$izi->hair_color.'<br> Preostale_vakcinacije:'.$izi->vaccination.'<br> broj_izlozvbi:'.$izi->num_exibition.'<br> ime_vlasnika:'.$izi->owner_name.'<hr>'.$izi->nekaMjaukne();








?>