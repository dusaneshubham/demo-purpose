<?php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello, I am in hostel</h1>
    <button onclick="myFunc()">Submit</button>
</body>
<script>
    function myFunc() {
        document.querySelector('h1').style.color = 'blue';
    }
</script>
</html>
?>
