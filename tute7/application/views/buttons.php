<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Exercise</title>
<script src="https://code.jquery.com/jquery-3.7.1.js" crossorigin="anonymous"></script>
</head>
<body>

<h2>Welcome Message</h2>
<button id="button1">Click me!</button>

<button class="buttonClass">Button 1</button>
<button class="buttonClass">Button 2</button>

<script>
$(document).ready(function (){
    // jQuery callback function for click events on the button
    $('#button1').click(function () {
        alert("Welcome to jQuery!");
    });

    // jQuery callback function for mouseover events on buttons with class 'buttonClass'
    $('.buttonClass').mouseover(function () {
        alert("Mouse over a button!");
    });
});
</script>

</body>
</html>