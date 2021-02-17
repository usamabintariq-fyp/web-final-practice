<?php

    include 'connection.php';

    if(isset($_GET['name']) && isset($_GET['author']) && strlen($_GET['author']) > 1 && strlen($_GET['name']) > 1)
    {
        $l = 'INSERT INTO books(Name, Author) VALUES(\''.$_GET["name"].'\', \''.$_GET["author"].'\')';
        $db->query($l);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Final Exam</title>
</head>
<body>
    

    <div class="container">
        <div class="mt-2">
    
            <form action='/' method='get'>

                <input class="form-control mb-2" type="text" name="name" placeholder="Book Name"/>
                <input class="form-control mb-2" type="text" name="author" placeholder="Author"/>
                <input type="submit" class="btn btn-primary"/>

            </form>

        </div>

        <h1 class="text-center">Books</h1>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php
                $rows = $db->query('select id, Name, Author from books');

                if($rows->num_rows > 0)
                {
                    foreach($rows as $row)
                    {
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['Name'].'</td>';
                        echo '<td>'.$row['Author'].'</td>';
                        echo '<td><a class="btn btn-danger" href="/edit.php?type=delete&id='.$row['id'].'">Delete</a></td>';
                        echo '</tr>';
                    }
                }
                ?>
            <tbody>
        </table>
    </div>
</body>
</html>