<?php
    $server = 'localhost';
    $username = 'admin'; // username for DB
    $password = '123456'; // password for DB admin
    $database = 'movies';

    $connect = mysqli_connect($server,$username,$password,$database);

    if(!$connect){
        // if we cant connect to DB
        die(mysqli_connect_error()); // kills connection, wont render html
    }

    $id = $_GET['id'];

    $query = "SELECT * FROM movies WHERE id=$id";
    $sql = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie | <?php echo $row['title']; ?></title> <!-- PHP to dynamically display title of current movie -->
</head>
<body>
    <?php 
        echo '<h1>'.$row['title'].'</h1>';
        echo '<h2>Genre: '.$row['genre'].'</h2>';
        echo '<h2>Release Year: '.$row['year'].'</h2>';
        echo '<h2>Runtime: '.$row['runtime'].'</h2>';
    ?>
</body>
</html>