<?php
// Applicatie die uitrekent wat je kwijt bent aan brandstof
// per type brandstof. Kan varieren vanweg de brandstof prijs

$brandstof = $_GET['brand'];
$prijsperliter = $_GET['prijs'];
$bedrag = 0;
    if($brandstof == "Diesel"){
        $bedrag = $prijsperliter * 5;
        echo "Prijs per 5 liter is: ".$bedrag; // wij gaan uit van 5 liter per honderd
    }

?>