<?php
    $host="localhost";
    $port=3307;
    $user="root";
    $password="usbw";
    $dbname="cad_cli";
    $con = mysqli_connect($host, $user, $password, $dbname)
        or die ('Could not connect to the database server');
?>