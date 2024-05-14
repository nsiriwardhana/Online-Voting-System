<?php

if(isset($_POST["signup_v"]))//Checks whether the submit button is clicked or not
{
    $V_Name=$_POST["Name_v"];
    $V_Birthday=$_POST["Date_v"];
    $V_Email=$_POST["Email_v"];
    $V_Username = $_POST["Username_v"]; 
    $V_Password=$_POST["Password_v"];
    $V_RePassword=$_POST["RePassword_v"];

    //Including the configuration file
    include_once("config.php");

    //Retrieving table data from the database
    $sql = "SELECT * FROM `signup-voter` WHERE Username = '$V_Username'";
    
    //Executes the query
    $result = $con->query($sql);

    //Ckecks that username is taken or not
    if ($result->num_rows > 0) {
        $alertMessage="Username has already been taken";
        echo "<script>alert('$alertMessage');</script>";
        echo "<script>location.href='signup-voter.html';</script>";
        }

    else{
        //Checking that reentered password is correct or not
        if($V_RePassword==$V_Password){

            //Insurting values into tables
            $sql = "INSERT INTO `signup-voter`(`VoterID`, `Name`, `Birthday`, `Username`, `Password`, `Email`) VALUES ('','$V_Name','$V_Birthday','$V_Username','$V_Password','$V_Email')";
            $record = $con->query($sql);

            if($record){
                $alertMessage="Registration was Successful...";
                echo "<script>alert('$alertMessage');</script>";
                echo "<script>location.href='..\Dhanuka\index.html';</script>";
                exit();                                                 //Alerts registration was successful and redirects to index.html page
            }
            else{
                $alertMessage="Registration was Unsuccessful...";
                echo "<script>alert('$alertMessage');</script>";
                echo "<script>location.href='signup-voter.html';</script>";
                exit();                                                     //Alerts registration was unsuccessful and redirects to signup-voter.html page
            }
        }
        else{
            $alertMessage="Password does not match !!!";
            echo "<script>alert('$alertMessage');</script>";
            echo "<script>location.href='signup-voter.html';</script>";
            exit();                                                     //Alerts password doesn't match and redirects to signup-voter.html page
        }
    }
}
else{
    //Opens signup-voter page
    header("location:signup-voter.html");
    exit();
}

?>
