<?php
include_once 'config.php';

if(isset($_POST["loginbtn"])){
    $uname=$_POST["username"];
    $pw=$_POST["password"];

    //getting the password for an available username
    $sqlCont="SELECT Password FROM `signup-voter` WHERE Username = '$uname'";
    $contPsw=$con->query($sqlCont);  
  
    if($contPsw->num_rows!=0){
        $contPassword=$contPsw->fetch_assoc();
        if($pw==$contPassword['Password']){

            //redirecting to the voter home page
            echo"<script>window.location='homeV.php';</script>";

        }
        else{
            echo"<script>alert('Enter a valid Password');
            window.location='loginV.html';</script>";
        }
    }
    else{
        echo"<script>alert('Enter a valid username !');
            window.location='loginV.html';</script>";
    }

}
?>