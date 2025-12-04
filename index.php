<?php
//Yabut, Clarence Matthew F. | WD - 201 | DWEB - Q1

$user = "Suki";
$pagbati = " Maligayang Araw!";

$offer = [
"Box'O Dozen Squared", 3, 399, 199
];

$reg_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $reg_price - $offer_price;

require "header.php";
include "footer.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>DONATS</title>
    </head>
    <body>
        <h1>Hello <?= $user, $pagbati?></h1>
        <h3>You Can Save a total of <?= $saving?> when you go for the promo!</h3>
        <p>Today, we're offering a limited time promo! Buy Three 1-Dozen Boxes, and get each Box for half the price!</p>
        <p>The Regular Price of a box of a dozen is <?= $reg_price?>, but when you avail the promo, it's <?= $offer_price?>!</p>
    </body>
</html>