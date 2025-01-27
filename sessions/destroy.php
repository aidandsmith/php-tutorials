<?php 
    session_start();
    // Destroying our fname session
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions | Change name</title>
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
        a {
            text-decoration: none;
            padding: 0.75rem;
            background-color: red;
            color: white;
            border-radius: 0.3rem;
        }
    </style>
</head>
<body>
    <h1>Welcome to my website!</h1>
    <h2>Your name has been reset.</h2>
    <a href="index.php">Enter a new name</a>
</body>
</html>