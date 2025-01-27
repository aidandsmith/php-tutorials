<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions | Results</title>
</head>
<body>
    <h1></h1>
    <?php
        // If statement to check if first name is set before displaying the name
        if(isset($_POST['firstName'])){
            echo "<h2>Good morning, ".$_POST['firstName'];
        }else { // If not, it will display this message on screen!
            echo "<h2>Please enter a name!</h2>";
        }

        // Redirect 
        // header("location: https://www.example.com/new-page-url");
        // exit;
    ?>
</body>
</html>