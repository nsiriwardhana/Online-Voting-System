<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinevotingsystem";

    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error)
    {
        die("Connection Faild :" . $conn->connect_error);            
    }     
?>