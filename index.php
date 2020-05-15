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
    "C++ för nybörjare",
    "Gösta Berlings saga",
    "Röda rummet",
    "Vingar av silver"
];
$middleBook = null;
$title = "Jane Eyre";
$minBook = 0;
$maxBook = count($bookshelf) - 1; // Få maxvärdet på bokhyllan

// Så länge som bok inte funnen
    // Leta upp en bok
    // Är det min bok?
        // Ja - meddela
        // Nej - fortsätt leta

            // Ändra min och max-värden
                // ?
// Meddela resultat
