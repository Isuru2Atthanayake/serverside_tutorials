<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <h2>Enter your date of birth</h2>
    <form action="<?php echo base_url('agecalculator/calculate_age'); ?>" method="post">
        <input type="date" name="dob">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>