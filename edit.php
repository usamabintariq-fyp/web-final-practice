<?php

include 'connection.php';

$type = $_GET['type'];
$id = $_GET['id'];

if(isset($type) && isset($id))
{
    switch($type)
    {
        case 'delete':
            $st = 'DELETE FROM Books WHERE id = '.$id;
            $db->query($st);
            break;
    }
}

header('location:/');

?>