<?php

$connection = mysqli_connect('localhost','root','','departmental');
//
//if($connection){
//    echo "We are Connected";
//}

if(! $connection ) {
               die('Could not connect: ' . mysql_error());
            }
?>