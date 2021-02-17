<?php

header('Content-Type: application/json');

// $json = "[{'name':'Usama Bin Tariq'},{'name':'Nouman Shah'},{'name':'Ali Muslim'}]";

// $j = json_decode($json);

// echo json_encode($json);

$names = array('Usama', 'Nouman', 'Ali');

echo json_encode($names);

exit;
?>