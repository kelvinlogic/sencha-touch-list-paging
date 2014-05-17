<?php
    function confirm_query($query){
        if(!$query){
            die("error occured".mysql_error());
        }
    }
?>