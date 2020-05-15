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

// Skapa en funktion som producerar 990 "skräp-böcker", som har titlar som:
$scrapBook = "sffwalefjei";

function createBooks($amount)
{
    $tempShelf = [];
    for ($i = 0; $i < $amount; $i++) {
        $titleLength = mt_rand(4, 20);
        $book = substr(str_shuffle('ABCDEFGHIJK LMNOPQRSTUVWXYZ abcdefghijklmn opqrstuvxyz'), 1, $titleLength);
        array_push($tempShelf, $book);
    }
    return $tempShelf;
}

// Skapa 990 böcker och slå ihop arrayerna.
$newBooks = createBooks(990);
$bookshelf = array_merge($bookshelf, $newBooks);

$middleBook = null;

// Istället för hårdkodad boktitel - Hämta värde från formulär och sök efter det.
$wantedBook = "Jane Eyre";

$bookFound = false;     // Inte helt säker på att den behövs.
$minBook = 0;
$maxBook = count($bookshelf) - 1; // Få maxvärdet på bokhyllan
$message = "";

// Sortera bokhyllan
sort($bookshelf);

// var_dump($bookshelf);


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
