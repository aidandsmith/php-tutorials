<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Example</title>
</head>
<body>
    <h1>My Restaurant</h1>

    <?php
        $specials = array("Half Priced Burgers","Spaghetti and Meatballs","Chicken Wings","All Day Breakfast","Steak Sandwich","Clubhouse Sandwich","Half Priced Appetizers");
        $currentDate = strtotime('+48 hours');
        $dayNumber = date('N', $currentDate);
    ?>

    <h2><?php echo date('l', $currentDate)?> Special</h2>
    <h3><?php echo $specials [$dayNumber - 1]?></h3>
    <img src="images/special-<?php echo $dayNumber;?>.jpg" alt="">
</html>