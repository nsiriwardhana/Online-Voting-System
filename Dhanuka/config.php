<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "onlinevotingsystem";

    //create connection
    $con = new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($con->connect_error)
    {
        die("Connection Faild :" . $con->connect_error);            
    }     
?>