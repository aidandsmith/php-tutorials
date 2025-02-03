<?php
    $server = 'localhost';
    $username = 'admin'; // username for DB
    $password = '1234567'; // password for DB admin
    $database = 'movies';
    
    $connect = mysqli_connect($server,$username,$password,$database);

    if(!$connect){
        // if we cant connect to DB
        die(mysqli_connect_error()); // kills connection, wont render html
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with MySQL/MariaDB</title>
</head>
<body>
    <h1>Movie Database</h1>
    <?php
        $selectquery = 'SELECT * FROM movies';
        $sql = mysqli_query($connect, $selectquery);  // runs the query, and makes sure the user has access to

        while($row = mysqli_fetch_array($sql)){ // runs a loop x amount of times depeinding on rows in DB
            // print_r($rows); prints all rows in DB
            echo '<h2>'.$row['title'].'</h2>'; // fetches certain column from DB and displays on page
            echo '<ul>';
            echo '<li>'.'genre: '.$row['genre'].'</li>';
            echo '<li>'.'year: '.$row['year'].'</li>';
            echo '<li>'.'runtime: '.$row['runtime'].' minutes'.'</li>';
            echo '</ul>';
        }
    ?>
</body>
</html>