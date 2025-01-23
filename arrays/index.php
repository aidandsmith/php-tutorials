<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        // Also can use [] instead of array()
        $shoppingList = array('apples','oranges','cheerios');
        // Used to print an array that is readable - used to debug
        //print_r($shoppingList);
        // Range creates array with a range - this puts letters from A-Z 
        // Works with numbers and letters - capital or lowercase
        $alphabet = range('a','z');
        //print_r($alphabet);

        $largeCities = ['Toronto','Montreal','Calgary','Ottowa','Edmonton','Winnipeg','Mississauga','Vancouver','Brampton','Hamilton']
    ?>
</body>
</html>