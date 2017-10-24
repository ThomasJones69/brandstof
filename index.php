<?php
// Applicatie die uitrekent wat je kwijt bent aan brandstof
// per type brandstof. Kan varieren vanweg de brandstof prijs

$brandstof = $_GET['brand'];
$prijsperliter = $_GET['prijs'];
$bedrag = 0;
    if($brandstof == "Diesel"){
        $bedrag = $prijsperliter * 5;
        $bedragtot = $prijsperliter * 55;
        echo "Prijs per 5 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 5 liter per honderd
        echo "<br>";
        echo "Bedrag voor een volle tank van 55 liter is: ".$bedragtot;
    }
    if($brandstof == "Euro"){
        $bedrag = $prijsperliter * 8;
        $bedragtot = $prijsperliter * 55;
        echo "Prijs per 8 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 8 liter per honderd
        echo "<br";
        echo "Bedrag voor een volle tank van 55 liter is: ".$bedragtot;
    }
    if($brandstof == "Super"){
        $bedrag = $prijsperliter * 11;
        $bedragtot = $prijsperliter * 55;
        echo "Prijs per 11 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 11 liter per honderd
        echo "<br>";
        echo "Bedrag voor een volle tank van 55 liter is: ".$bedragtot;
    }    
    if($brandstof == "LPG"){
        $bedrag = $prijsperliter * 15;
        $bedragtot = $prijsperliter * 55;
        echo "Prijs per 15 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 15 liter per honderd
        echo"<br>";
        echo "Bedrag voor een volle tank van 55 liter is: ".$bedragtot;
    }

?>