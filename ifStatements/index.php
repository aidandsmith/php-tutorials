<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Teller</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Fortune Teller</h1>
    <form method="POST" action="result.php">
        <label for="firstname">First Name</label>
        <input type="text" name="firstName" placeholder="Enter First Name">
        <label for="colour">Favourite Colour</label>
        <input type="text" name="favColour" placeholder="Enter Favourite Colour"> 
        <label for="birthmonth">Birth Month</label>
        <select required name="birthMonth">
            <option default disabled selected>Choose a Province</option>
            <option value="1">Alberta</option>
            <option value="2">British Columbia</option>
            <option value="3">Manitoba</option>
            <option value="4">New Brunswick</option>
            <option value="5">Newfoundland and Labrador</option>
            <option value="6">Nova Scotia</option>
            <option value="7">Ontario</option>
            <option value="8">Prince Edward Island</option>
            <option value="9">Quebec</option>
            <option value="10">Saskatchewan</option>
            <option value="11">Northwest Territories</option>
            <option value="12">Nunavut</option>
            <option value="13">Yukon</option>
        </select>
        <input type="submit" value="Get Your Fortune">
    </form>
</body>
</html>