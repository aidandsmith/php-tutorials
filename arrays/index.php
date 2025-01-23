<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
        }
        h1, h2 {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1> Indexed Arrays </h1>";
        // Also can use [] instead of array()
        $shoppingList = array('apples','oranges','cheerios');
        // Used to print an array that is readable - used to debug
        print_r($shoppingList);
        echo "<br>";
        // Range creates array with a range - this puts letters from A-Z 
        // Works with numbers and letters - capital or lowercase
        $alphabet = range('a','z');
    
        $largeCities = ['Toronto','Montreal','Calgary','Ottowa','Edmonton','Winnipeg','Mississauga','Vancouver','Brampton','Hamilton'];
        // Used to sort in ascending order
        // sort($largeCities);
        // Used to sort in decending order
        rsort($largeCities);
        print_r($largeCities);
        // Selects certain index in array and prints it
        echo $largeCities[8];

        echo "<h2> Custom Index on Array - Associative Arrays</h2>";

        // Defines custome index for each node of the array
        $specials = array(
            'Monday' => 'Half priced burgers',
            'Tuesday' => 'Half Pizzas',
            'Wednesday' => '20c wings all day',
            'Thursday' => '$1 off beer and wine',
            'Friday' => 'Half off fish and chips',
        );
        
        // Used to display special on a specific date and time
        // echo $specials['Wednesday'];

        // Displays special on the current date - refreshes everyday - uses global time
        echo $specials[date('l')];
    ?>
</body>
</html>