<?php
    require_once('functions.php');
    $connection = mysql_connect("localhost","root","");
    confirm_query($connection);
    $db = mysql_select_db("restaurantdb", $connection);
    confirm_query($db);
?>