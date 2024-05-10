<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Get Word Definition</title>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    $('#submitBtn').click(function(e) {
        e.preventDefault();
        var word = $('#word').val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("WordController/get_definition"); ?>',
            data: { word: word },
            success: function(response) {
                $('#definition').html(response);
            },
            error: function() {
                alert('Error retrieving definition.');
            }
        });
    });
});
</script>
</head>
<body>

<h2>Get Word Definition</h2>
<form id="wordForm">
    <label for="word">Enter a word:</label>
    <input type="text" id="word" name="word">
    <button type="submit" id="submitBtn">Get Definition</button>
</form>

<div id="definition"></div>

</body>
</html>