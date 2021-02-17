<?php

session_start();

$username = $_SESSION['username'];
$id = $_SESSION['id'];

if(!(isset($username) && isset($id)))
{
    header('location:/login.php');
}

echo 'loggedin';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a name="logout" id="logout" class="btn btn-danger" href="/logout.php" role="button">Logout</a>
</body>
</html>