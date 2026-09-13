<?php

$con = mysqli_connect('localhost', 'root', '', 'hotel_db');

if(!$con){
    die("Date Base Connection Failed : " .mysqli_connect_errno());
}

?>