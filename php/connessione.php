<?php
    function open(){
        $password = 'ciava';
        $user = 'root';
        $database = 'db_ciava';
        $host = 'db_ciavs';

        $mysqli = mysqli_connect($host, $user, $password, $database);
        return $mysqli;
    }
?>