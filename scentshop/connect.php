<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

    $con = new mysqli("localhost","bsitrdye_juryn","onlineserverinhybrid","bsitrdye_icat");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $con->set_charset("utf8");


 

?>