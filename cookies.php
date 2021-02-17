<?php

$c_name = 'name';

if(isset($_COOKIE[$c_name]))
{
    echo $_COOKIE[$c_name];
}

setcookie($c_name, 'Usama Bin Tariq');

?>