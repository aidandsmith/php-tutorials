<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "main.css">
    <title>Aidan's Mug Store</title>
</head>
<body>
    <main>
        <?php
            $mugCost = 10.99;
            $mugQuantity = 7;
            $salesTax = 0.05; // 5% Sales Tax
            $subTotal =  $mugQuantity * $mugCost;
            $totalTax = ($salesTax * $mugQuantity) * 100;
            $totalPrice = $subTotal + $totalTax;
        ?>
        <h1>Aidan's Mug Store</h1>
        <ul class="mugReciept">
            <li>Cost per mug: <span>$<?php print number_format($mugCost,2)?> </span></li>
            <li>Quantity: <span><?php print $mugQuantity ?> Mug(s)</span></li>
            <li>Sub Total: <span>$<?php print number_format($subTotal,2)?> </span></li>
            <li>Sales Tax: <span>$<?php print number_format($totalTax,2)?> </span></li>
            <li>Total: <span>$<?php print number_format($totalPrice,2)?></span></li>
        </ul>
    </main>
</body>
</html>

