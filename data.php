<?php
$Ancien = $_POST["in1"];
$Nouvel = $_POST["in2"];
$Consomation = $Ancien - $Nouvel;

echo 'Consomation: ' . $Consomation;
