<?php
    // Define the variables that will be used on this whole page
    $mainCourse = ['pizza','lasagna','steak and veggies','chicken and rice','club sandwich','stir fry'];
    $sideDish = ['chips','salad','broccoli','french fries','soup','poutine', 'mac n cheese','onion rings'];
    $dessert = ['ice cream','donuts','chocolate bar','cheesecake','lemon tart','lava cakes','cookies'];
    
    // Generates random number on page load and stores in variable
    $randomMain = rand(0,count($mainCourse)-1); //Counts the array on page load and sets to the highest index of array
    $randomSide = rand(0,count($sideDish)-1); // -1 because count of indexed arrays start at [0]
    $randomDessert = rand(0,count($dessert)-1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whats for dinner? | Activity</title>
    <style>
        a {
            text-decoration: none;
            padding: 0.7rem;
            color: white;
            background-color: darkslategray;
            border-radius: 100px;
            font-size: smaller;
        }
        h3 {
            color: red;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <!-- Using arrays to decide what you want for dinner -->
    <h1>Whats for dinner?</h1>
    <p>Hate deciding what you want for dinner? Let a computer decide for you!</p>
    <p>A Random meal has been generated below for you</p>
    <h2>Tonight for dinner you will have...</h2>
    <h3>You will be having <?php echo $mainCourse[$randomMain];?> with a side of <?php echo $sideDish[$randomSide];?> and to finish it off, for dessert you will have <?php echo $dessert[$randomDessert];?>.</h3>
    <a href="activity.php">Get a new meal</a>
</body>
</html>