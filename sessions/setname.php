<?php
    // If using a session, it has to be started before the DOCTYPE
    session_start();
    
    // Creates a session that stores the info in the form - info can be used until the browser is closed.
    if(isset($_POST['submit'])){
        $_SESSION['fname'] = $_POST['firstName'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions | Results</title>
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
    <h1>Your profile page</h1>
    <?php
        // If statement to check if session is initalized - and if it has a value
        if(isset($_SESSION['fname'])){
            echo "<h2>Good morning, ".$_SESSION['fname'].".</h2>";
        }else { // If not, it will display this message on screen!
            echo "<h2>You do not have authentication to view this page!</h2>";
        }

        // If you want to us a redirect - would be something like this
        // header("location: https://www.example.com/new-page-url");
        // exit;
    ?>
</body>
</html>