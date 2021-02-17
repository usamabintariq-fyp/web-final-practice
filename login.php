<?php
    session_start();

    if(isset($_SESSION['username']) && isset($_SESSION['id']))
    {
        header('location:/home.php');
    }

    $status = true;
    include 'connection.php';

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = $db->query("SELECT id FROM Users WHERE username = '$username' and password = '$password'");

        if($result ->num_rows > 0)
        {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = ($result -> fetch_assoc())['id'];
            
            header('location:/home.php');
        }
        else {
            $status = false;
        }
    }

?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Login</title>
</head>
<body class="h-100">
    <div class="container d-flex h-100">
        <div class="justify-content-center m-30 w-100">
            <form  method="post" action="/login.php" class="border p-1 round-1">
                <div class="text-center"><label class="mb-2 text-center">Login</label></div>
                <input class="form-control mb-2" name="username" type="text" placeholder="Username"/>
                <input class="form-control mb-2" name="password" type="password" placeholder="Password"/>
                <input class="btn btn-primary" type="submit" value="Login"/>
            </form>

            <?php
                if(isset($status) && !$status)
                {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    Login Failed
                </div>';
                }
            ?>
        </div>
    </div>
</body>
</html>