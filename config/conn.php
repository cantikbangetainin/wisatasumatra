<?php
    $hostname   = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "wisata_kelompok";

    $con = mysqli_connect($hostname, $username, $password, $database) or die (mysqli_error($con));