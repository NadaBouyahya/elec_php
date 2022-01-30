<?php
$TVA = 0.14; 
$callib_tarif = array("small" => 22.65, "medium" => 37.05, "big" => 46.20);

class Tranche {
    public tranche_1;
    public tranche_2;
    public tranche_3;
    public tranche_4;
    public tranche_5;
    public tranche_6;
}
$trn_1 = new Tranche();
$trn_1 -> tarif = 0.794;
$trn_1 -> start = 0;
$trn_1 -> end   = 100;

$trn_2 = new Tranche();
$trn_2 -> tarif = 0.883;
$trn_2 -> start = 101;
$trn_2 -> end   = 150;

$trn_3 = new Tranche();
$trn_3 -> tarif = 0.9451;
$trn_3 -> start = 151;
$trn_3 -> end   = 210;

$trn_4 = new Tranche();
$trn_4 -> tarif = 1,4975;
$trn_4 -> start = 511;
$trn_4 -> end   = 310;

$trn_5 = new Tranche();
$trn_5 -> tarif = 1,2915;
$trn_5 -> start = 311;
$trn_5 -> end   = 510;

$trn_6 = new Tranche();
$trn_6 -> tarif = 1,0489;
$trn_6 -> start = 511;

?>