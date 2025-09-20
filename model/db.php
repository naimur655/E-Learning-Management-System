<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="eLearning_DB";
   

    function getConnection()
    {
        global $host;
        global $user;
        global $pass;
        global $db;
        global $port;

        $conn=mysqli_connect($host,$user,"",$db);
        return $conn;
    }


?>
