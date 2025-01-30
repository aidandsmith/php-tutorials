<?php
    //Set the cookie to whatever the user entered in the form
    //$_COOKIE['firstName'] = $_POST['fname'];

    setcookie('firstName', $_POST['fname'], strtotime('+15 minutes'))
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
		<?php echo $_COOKIE['firstName']; ?>
        <a href="form.php">Return to the form</a>
	</body>
</html>