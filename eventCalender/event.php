<?php 
    $server = "localhost";
    $username = "eventmanager";
    $password = "123456";
    $db = "events";

    $connection = mysqli_connect($server,$username,$password,$db);

    if(!$connection){
        die(mysqli_connect_error());
    }

    //Get ID from URL (query string)
    $event = $_GET['event'];

    $query = "SELECT name,date,start,end,venue,cost,description FROM events WHERE id=$event";
    $sql = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Calendar | <?php echo $row['name'] ?></title>
</head>
<body>
    <?php 
        $date = strtotime($row['date']);
        $date = date('l F j, Y', $date);
        echo '<h1>'.$row['name'].'</h1>';
        echo '<h3>This Event is On: '.$date.'</h3>';
        echo '<p>Price: $'.$row['cost'].'</p>';
        echo '<p>Venue: '.$row['venue'].'</p>';
        echo '<p>Event Description: '.$row['description'].'</p>';
    ?>

    <h1><?php echo $row['name']?></h1>
    <h3>This Event is On: <?php echo $date ?> - <?php echo $row['start'] ?> to <?php echo $row['end'] ?></h3>
    <p>Price: $<?php echo $row['cost'] ?></p>
    <p>Venue: <?php echo $row['venue'] ?></p>
    <p>Event Description: <?php echo $row['description'] ?></p>
</body>
</html>