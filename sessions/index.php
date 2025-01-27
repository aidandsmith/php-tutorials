<?php 
    // Initalizing a session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
        }
        h1 {
            color: green;
        }
        h2 {
            color: blueviolet;
        }
    </style>
</head>
<body>
    <h1>Welcome to my website!</h1>
    <?php 
        if(isset($_SESSION['fname'])){
            // If the session named fname exists...
            echo "<h2>Welcome back, ".$_SESSION['fname'].".</h2>";
        }
        //Else statement opened here
        else{
            
    ?>
    <h2>Please enter your name:</h2>
    <form method="post" action="setname.php">
        <label for="name">Your first name:</label>
        <input required placeholder="Enter your first name!" type="text" name="firstName">
        <input type="submit" name="submit" value="Enter">
    </form>
    <!-- Closing out the else statement from line 39  so we dont have to echo the whole form -->
    <?php } ?>
</body>
</html>