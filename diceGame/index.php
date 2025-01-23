<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Game</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <h1>Dice Game</h1>
        <div class="roll">
            <?php
                // Variables to store total dice rolls for each player
                // Randomly generates nu
                // echo rand(1,6); //min = 1 max = 10
                $dice1roll1 = rand(1,6);
                $dice1roll2 = rand(1,6);
                $dice2roll1 = rand(1,6);
                $dice2roll2 = rand(1,6);
                $totalroll1 = $dice1roll1 + $dice1roll2;
                $totalroll2 = $dice2roll1 + $dice2roll2;

                // echo $diceone;
                // echo $dicetwo;
                // echo "YOUR DICE: "."Dice One: ".$dice1roll1." "."Dice Two: ".$dice1roll2." "."for a total of ".$totalroll1;
                // echo "<br>"."DEALERS DICE: "."Dice One: ".$dice2roll1." "."dice two: ".$dice2roll2." "."for a total of ".$totalroll2;
            ?>
        </div>
        <!-- After roll we insert the associate number of the roll with the image - naming is important! -->
        <div class="dice">
            <h2>Your roll</h2>
            <img src="dice-images/dice-<?php echo $dice1roll1;?>.png" alt="A face of a dice showing <?php echo $dice1roll1;?> pip(s)">
            <img src="dice-images/dice-<?php echo $dice1roll2;?>.png" alt="A face of a dice showing <?php echo $dice1roll2;?> pip(s)">
            <p>Your rolled a <?php echo $dice1roll1?> and a <?php echo $dice1roll2?> for a total of <?php echo $totalroll1?></p>
        </div>
        <div class="dice">
            <h2>Dealers Roll</h2>
            <img src="dice-images/dice-<?php echo $dice2roll1?>.png" alt="A face of a dice showing <?php echo $dice2roll1;?> pip(s)">
            <img src="dice-images/dice-<?php echo $dice2roll2;?>.png" alt="A face of a dice showing <?php echo $dice2roll2;?> pip(s)">
            <p>Your rolled a <?php echo $dice2roll1?> and a <?php echo $dice2roll2?> for a total of <?php echo $totalroll2?></p>
        </div>

        <div class="totalroll">
            <!-- Conditional statements to determine winner, and display on screen  -->
            <?php
                if ($totalroll1 < $totalroll2){
                    echo "The winner is the Computer";
                }
                elseif ($totalroll1 > $totalroll2) {
                    echo "The winner is you!";
                }
                else {
                    echo "It was a tie!";
                };
            ?>
        </div>
        <a href="index.php">Play Again?</a>
    </main>
    
</body>
</html>