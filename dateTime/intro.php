<?php
    date_default_timezone_set("America/Edmonton");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time</title>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h1>Date & Time</h1>
    <ul>
        <li><?php echo date('l');?></li> <!-- Day of Week -->
        <li><?php echo date('F');?></li> <!-- Month -->
        <li><?php echo date('d');?></li> <!-- Day of Month -->
        <li><?php echo date('Y');?></li> <!-- Year -->
        <li><?php echo date('l')." ".date('d').", ".date('Y');?></li> <!-- Formatted using Concatenation -->
        <li><?php echo date('l d, Y');?></li> <!-- Easier way to do it -->
        <li><?php echo date('g:i a') ?></li> <!-- Time 12HR -->
        <li><?php echo date('H:i') ?></li> <!-- Time 24HR -->
        <li><?php echo date('l d, Y g:i a');?></li> <!-- Current Date & Time -->
        <li><?php echo date('m/d/y');?></li> <!-- Current Date & Time - M/Y/D -->
    </ul>
    <h2>strtotime</h2>
    <?php 
        // Used to display and format time using strtotime
        // echo strtotime('now');
        $specificDate = strtotime('now');
        echo date ('l d, Y g:i a', $specificDate);
        $specificDate = strtotime('august 9, 2002');
        echo date ('l d, Y g:i a', $specificDate);
    ?>
    <h2>How many days between dates</h2>
    <?php
        $today = strtotime('today');
        echo $today;
        
        $birthday = strtotime('august 9, 2002');
        $dateDifference = $today - $birthday;

        echo "<br>".$dateDifference;

        echo "<p>I have been alive for ".number_format(floor($dateDifference / (60 * 60 * 24)))." days.</p>";
    ?>


</body>
</html>