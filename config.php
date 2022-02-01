<?php
$TVA = 14; 
$timbre = 0.45; 
$callib_tarif = array("small" => 22.65, "medium" => 37.05, "big" => 46.20);

class Tranche {
    public $Born_min;
    public $Born_max;
    public $Tarif;

    function __construct($B_min, $B_max, $tar){
        $this-> Born_min = $B_min;
        $this-> Born_max = $B_max;
        $this-> Tarif = $tar;
    }
}

$tarifs = [
    new Tranche(0, 100, 0.794),
    new Tranche(101, 150, 0.883),
    new Tranche(151, 210, 0.9451),
    new Tranche(211, 310, 1.0489),
    new Tranche(311, 510, 1.2915),
    new Tranche(511, null, 1.4975)
];

?>