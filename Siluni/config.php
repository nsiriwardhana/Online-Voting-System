<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="OnlineVotingSystem";

    //create connection
    $con=new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($con->connect_error)
    {
        die("connection Failed:".$con->connect_error);
    }else{
        echo'connection successfully';
    }
    
?>