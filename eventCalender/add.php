<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Event Calendar | Add Event</title>
		<link rel="stylesheet" href="styles.css">
        <style>
            label{
                display:block;
                margin-top:1rem;
            }
        </style>
	</head>
	<body>
		<h1>Add An Event</h1>

        <form method="post" action="insert.php">
            <label for="name">Event Name</label>
            <input type="text" id="name" name="name" size="30" maxlength="50" required>
            
            <label for="date">Event Date</label>
            <input type="date" id="date" name="date" value="<?php echo date('Y-m-d') ?>" required>
            
            <label for="start">Start Time</label>
            <input type="time" id="start" name="start" required>

            <label for="end">End Time</label>
            <input type="time" id="end" name="end" required>
            
            <label for="venue">Venue</label>
            <input type="text" id="venue" name="venue" maxlength="100" required>
            
            <label for="cost">Cost</label>
        $<input type="number" id="cost" name="cost" value="0.00" min="0" max="999" step="0.25">
            
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="12" cols="40"></textarea>
            
            <input type="submit" value="Add My Event">
        </form>
	</body>
</html>