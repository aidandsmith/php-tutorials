<?php
    $server = "localhost";
    $username = "eventmanager";
    $password = "123456";
    $db = "events";

    $connection = mysqli_connect($server,$username,$password,$db);

    if(!$connection){
        die(mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Event Calendar | Add Event</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<h1>Create Event</h1>
        <?php
            //Sanitize the user inputs
            $name = mysqli_real_escape_string($connection, $_POST['name']);
            $date = mysqli_real_escape_string($connection, $_POST['date']);
		    $start = mysqli_real_escape_string($connection, $_POST['start']);
		    $end = mysqli_real_escape_string($connection, $_POST['end']);
	    	$venue = mysqli_real_escape_string($connection, $_POST['venue']);
		    $cost = mysqli_real_escape_string($connection, $_POST['cost']);
		    $description = mysqli_real_escape_string($connection, $_POST['description']);

            $query = "INSERT INTO events (name,date,start,end,venue,cost,description) VALUES ('$name','$date','$start','$end','$venue','$cost','$description')";

            $sql = mysqli_query($connection,$query);

            if($sql){
                echo "<p>Your event was successfully added to the database. Cool eh?</p>";
            }else{
                echo "<p>Your event was not added to the database due to an error. Please try again in a few hours, our code monkeys are working to fix it.</p>";
                echo mysqli_error($connection);
            }
        ?>
        <a href="add.php">Add another event?</a>


	</body>
</html>