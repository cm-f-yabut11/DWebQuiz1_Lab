<?php
//Yabut, Clarence Matthew F. | WD - 201 | DWEB - Q1

$user = "Suki";
$greet = "Maligayang Pagdating";

if ($user = true)
    echo $greet;

$product = "Box'O Dozen";

$cost = 399;

for ($i = 1; $i <= 10; $i++) 
{
    $subtotal = [399];
    $discount = 399 / 2 * 3;
    $totals = [3];
}
require "header.php";
include "footer.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>DONATS</title>
        <div>
            <header.php>
        </div>
    </head>
    <body>
        <h1>Hello,<?= $greet ?></h1>
        <h2>Our <?= $product?> is on promo for a limited time!</h2>
        <table>
    <tr>
        <th>Item</th>
        <th>Price</th>
    </tr>
    <?php foreach ($subtotal as $quantity => $price) { ?>
        <tr>
            <td>Reg - Box'O Dozen</td>
            <td>P <?= $price ?></td>
        </tr>
        <tr>
            <td>Box'O Dozen Promo</td>
            <td>P <?= $discount ?></td>
        </tr>
    <?php } ?>
    </body>
    <div>
        <footer.php>
    </div>
</html>