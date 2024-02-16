

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    <div>
        <p>Name: <?php echo $name; ?></p>
        <p>Course: <?php echo $course; ?></p>
        <img src="<?php echo $picture_url; ?>" alt="Student Picture">
        <!-- Add more details as needed -->
    </div>
</body>
</html>