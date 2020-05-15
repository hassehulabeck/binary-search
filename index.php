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
$message = "";

// Sortera bokhyllan
sort($bookshelf);

var_dump($bookshelf);


// Så länge som bok inte funnen
while ($bookFound == false) {

    // Leta upp en bok
    $middleBook = floor(($minBook + $maxBook) / 2);
    echo "<p>" . $minBook . " - " . $maxBook;

    // Är det min bok?
    if ($bookshelf[$middleBook] == $wantedBook) {
        // Ja - meddela
        $bookFound = true;
        $message = "Hurra";
    }
    // Nej - fortsätt leta
    // Ändra min och max-värden
    else if ($bookshelf[$middleBook] < $wantedBook) {
        $minBook = $middleBook + 1;
    } else {
        $maxBook = $middleBook - 1;
    }
}

// Meddela resultat
echo $message;
