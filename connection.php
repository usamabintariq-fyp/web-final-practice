<?php

$db = new mysqli('localhost', 'root','','webfinal');

if($db->connect_error)
    die($db->connect_error);

?>