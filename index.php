<?php

// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Lagra initialvärden
$bookshelf = [
    "Jane Eyre",
    "Operativsystem jag minns",
    "Gökboet",
    "Tre män i en båt",
    "Flickan som lekte med elden",
    "Operativsystem vi glömt",
    "Pascal för nybörjare",
    "Gösta Berlings saga",
    "Röda rummet",
    "Vingar av silver"
];
$middleBook = null;
$wantedBook = "Jane Eyre";
$bookFound = false;     // Inte helt säker på att den behövs.
$minBook = 0;
$maxBook = count($bookshelf) - 1; // Få maxvärdet på bokhyllan

// Sortera bokhyllan
sort($bookshelf);

var_dump($bookshelf);


// Så länge som bok inte funnen
    // Leta upp en bok
    // Är det min bok?
        // Ja - meddela
        // Nej - fortsätt leta

            // Ändra min och max-värden
                // ?
// Meddela resultat
