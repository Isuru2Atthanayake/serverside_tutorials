<!DOCTYPE html>
<html>
<head>
    <title>Date of Birth Form</title>
</head>
<body>
    <h2>Enter Your Date of Birth</h2>
    <form method="post" action="<?php echo site_url('AgeCalculator/calculate_age'); ?>">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob">
        <input type="submit" value="Submit">
    </form>
</body>
</html>