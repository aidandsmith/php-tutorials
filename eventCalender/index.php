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
    <title>Event Calendar | All Events</title>
</head>
<body>
    <h1>All Events</h1>
    <?php 
        $query = "SELECT id,name,date FROM events ORDER BY date DESC";
        $sql = mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($sql)){
            $date = strtotime($row['date']);
            $date = date('l F j, Y', $date);
            echo '<h2>'.$row['name'].'</h2>';
            echo '<h3>'.$date.'</h3>';
            echo '<br>';

        }
    ?>
</body>
</html>