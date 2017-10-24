<?php
// Applicatie die uitrekent wat je kwijt bent aan brandstof
// per type brandstof. Kan varieren vanweg de brandstof prijs

$brandstof = $_GET['brand'];
$prijsperliter = $_GET['prijs'];
$bedrag = 0;
    if($brandstof == "Diesel"){
        $bedrag = $prijsperliter * 5;
        echo "Prijs per 5 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 5 liter per honderd
    }
    if($brandstof == "Euro"){
        $bedrag = $prijsperliter * 8;
        echo "Prijs per 8 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 8 liter per honderd
    }
    if($brandstof == "Super"){
        $bedrag = $prijsperliter * 11;
        echo "Prijs per 11 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 11 liter per honderd
    }    
    if($brandstof == "LPG"){
        $bedrag = $prijsperliter * 15;
        echo "Prijs per 15 liter ".$brandstof." is ".$bedrag; // wij gaan uit van 15 liter per honderd
    }

?>