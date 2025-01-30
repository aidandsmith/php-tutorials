<?php 

    // sets cookie, needs the following params (name, value, expiry)
    // setcookie('favourite', 'oatmeal choclate chip', strtotime('+24 hours'));
    
    // If we dont already have a cookie named favourite, it will set a new one with the following value
    if(!isset($_COOKIE['favourite'])) {
        setcookie('favourite', 'oatmeal choclate chip', strtotime('+24 hours'));;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>PHP Cookies</h1>
    <?php 
        if(isset($_COOKIE['favourite'])){
            //If cookie has been written show the value on screen\
            echo $_COOKIE['favourite'].'<br>';
        }else{ // If not it displays this message
            echo "<p>We dont know your favourite cookie</p><br>";
        }
    ?>
</body>
</html>