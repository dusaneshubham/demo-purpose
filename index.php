<?php
$conn = mysqli_connect('remotemysql.com', 'ajLjW9uMW1', 'QlPLa4PrDU', 'ajLjW9uMW1') or die('Not connected');

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "insert into signup(user,email,pass,cpass) values('$user', '$email', '$password', '$cpassword')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
                alert('Submitted');
              </script>";
            header('location:index.php');
    }
    else {
        echo "Not submitted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" placeholder="Enter user" name="user"><br><br>
        <input type="email" placeholder="Enter email" name="email"><br><br>
        <input type="password" placeholder="Enter password" name="password"><br><br>
        <input type="password" placeholder="Enter cpassword" name="cpassword"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <iframe width="560" height="315" src="https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_iframe" frameborder="0" allowfullscreen></iframe>
</body>

</html>
