<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Teller | Results</title>
</head>
<body>
    <h1>Form Result</h1>
    <?php
        //fortune teller php
        // echo $_POST['firstName'];
        //Conditional statement for first name
        $firstname = strtolower($_POST['firstName']);

        if($firstname == "aidan"){
            echo "<p>You are smart and funny,</p>";
        }
        elseif($firstname == "john"){
            echo "<p>You are curious and like an adventure,</p>";        
        }
        else{
            echo "<p>You are bold and eager for work,</p>";
        }

        //Conditional statements for favourite colour

        $favcolour = strtolower($_POST['favColour']);

        if($favcolour == "green"){
            echo "<p>you are going to be rich,</p>";
        }
        elseif($favcolour == "blue"){
            echo "<p>you are going to have good health,</p>";
        }
        elseif($favcolour == "red"){
            echo "<p>you are going to have bad luck,</p>";
        }
        else {
            echo "<p>you are going to get a good job,</p>";
        }

        //Conditianal statement for each month

        $birthmonth = ($_POST['birthMonth']);

        if($birthmonth <="4"){
            echo "<p>Your a good person</p>";
        }
        elseif($birthmonth <="8"){
            echo "<p>your a sarcastic person</p>";
        }
        else {
            echo "<p>your a humble person</p>";
        } 
        

    ?>

    <a href="index.php">Get a new fortune</a>
</body>
</html>