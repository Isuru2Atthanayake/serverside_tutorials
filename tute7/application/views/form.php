<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Submission</title>
<script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
</head>
<body>

<form id="myForm">
  <label for="inputField">Input:</label>
  <input type="text" id="inputField" name="inputField">
  <button type="submit" id="submitButton">Submit</button>
</form>

<div id="outputDiv"></div>

<script>
$(document).ready(function () {
  $('#submitButton').click(function (e) {
    e.preventDefault();
    var inputValue = $('#inputField').val();
    alert(inputValue);
    $('#outputDiv').html(inputValue);
  });

  $('#clearButton').click(function() {
    $('#outputDiv').html('');
  });
});
</script>

<button id="clearButton">Clear</button>

</body>
</html>