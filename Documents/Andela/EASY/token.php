<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Click the button below to generate a new, randomized token.</p>
<button id="generateToken">Generate New Token</button>
<p id="showToken"></p>
<script>
    $(document).ready(function() {

// set the length of the string
var stringLength = 15;

// list containing characters for the random string
var stringArray = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '!', '?'];

$("#generateToken").click(function() {

  var rndString = "";

  // build a string with random characters
  for (var i = 1; i < stringLength; i++) {
    var rndNum = Math.ceil(Math.random() * stringArray.length) - 1;
    rndString = rndString + stringArray[rndNum];
  };

  $("#showToken").html('<p><strong>' + rndString + '<strong></p>');

});

});





</script>
</body>
</html>