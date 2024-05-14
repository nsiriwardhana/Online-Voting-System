<?php
include_once 'config.php';

if(isset($_POST["loginbtn"])){
    $uname=$_POST["username"];
    $pw=$_POST["password"];

    //getting the password for an available username
    $sqlVoter="SELECT Password FROM `signup-contestant` WHERE Username = '$uname'";
    $votePsw=$con->query($sqlVoter);  
  
    if($votePsw->num_rows!=0){
        $voterPassword=$votePsw->fetch_assoc();
        if($pw==$voterPassword['Password']){

            //redirecting to the contestant home page
            echo"<script>window.location='homeC.php';</script>";

        }
        else{
            echo"<script>alert('Enter a valid Password');
            window.location='loginC.html';</script>";
        }
    }
    else{
        echo"<script>alert('Enter a valid username !');
            window.location='loginC.html';</script>";
    }
}
?>