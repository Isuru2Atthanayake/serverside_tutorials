<!DOCTYPE html>
<html>
<head>
    <title>Movies Search</title>
</head>
<body>
    <h2>Search for Movies</h2>
    <form action="<?php echo site_url('movies/search');?>" method="get">
        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre">
        <input type="submit" value="Search">
    </form>
    <br>
    <a href="<?php echo site_url('movies/allmovies');?>">View All Movies</a>
</body>
</html>