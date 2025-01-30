<?php
    if(!isset($_COOKIE['firstName'])){
        //Set a cookie called "firstName" to blank or null and expire 15 minutes from now
        setcookie("firstName"," ",strtotime("+15 minutes"));
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Introduction to Cookies</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h1>Cookies Demo</h1>
        <?php
            if(isset($_COOKIE['firstName'])){
                echo "<p>Welcome back ".$_COOKIE['firstName'].".</p>";
            }
        ?>
		<form method="post" action="cookieResults.php">
			<label for="fname">Your first name</label>
			<input type="text" name="fname" id="fname" required>
			<input type="submit" name="submit" value="Do you dare to enter?">
		</form>
	</body>
</html>