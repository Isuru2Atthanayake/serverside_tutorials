<!-- Tute 3 Exercise 1 -->
<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <h1>Enter your Date of Birth:</h1>
    <form action="<?php echo base_url('index.php/agecalculator/calculate_age'); ?>" method="post">
        <label for="date_of_birth">Date of Birth (YYYY-MM-DD):</label>
        <input type="text" name="date_of_birth" id="date_of_birth" required>
        <br>
        <button type="submit">Calculate Age</button>
    </form>
</body>
</html>
