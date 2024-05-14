<?php

if(isset($_POST["submit_c"]))//Check that whether the submit button is clicked or not
{
    $C_Name=$_POST["Name_c"];
    $C_Birthday=$_POST["Birthday_c"];
    $C_Address=$_POST["Address_c"];
    $C_Email=$_POST["Email_c"];
    $C_Username = $_POST["Username_c"]; 
    $C_Password=$_POST["Password_c"];
    $C_RePassword=$_POST["RePassword_c"];

    //Including the configuration file
    include_once("config.php");

    //Retrieving table data from the database
    $sql = "SELECT * FROM `signup-contestant` WHERE Username = '$C_Username'";

    //Executing the query
    $result = $con->query($sql);

    //Checking whether the entered username is taken or not
    if ($result->num_rows > 0) {
            $alertMessage="Username has already been taken";
            echo "<script>alert('$alertMessage');</script>";
            echo "<script>location.href='signup-contestant.html';</script>";
        }

    else{

         //Checking that reentered password is correct or not
        if($C_RePassword==$C_Password){

            //Inserting values into tables
            $sql = "INSERT INTO `signup-contestant` (`ContestantID`, `Name`, `Birthday`, `Address`, `Email`, `Username`, `Password`) VALUES ('', '$C_Name', '$C_Birthday', '$C_Address', '$C_Email', '$C_Username', '$C_Password')";
            $record = $con->query($sql);

            if($record){
                $alertMessage="Registration was Successful...";
                echo "<script>alert('$alertMessage');</script>";
                echo "<script>location.href='..\Dhanuka\index.html';</script>";
                exit();                                                 //Alerts registration was successful and redirects to homepage
            }
            else{
                $alertMessage="Registration was Unsuccessful...";
                echo "<script>alert('$alertMessage');</script>";
                echo "<script>location.href='signup-contestant.html';</script>";
                exit();                                                         //Alerts registration was unsuccessful and redirects to contestant signup page
            }
        }
        else{
            $alertMessage="Password does not match !!!";
            echo "<script>alert('$alertMessage');</script>";
            echo "<script>location.href='signup-contestant.html';</script>";
            exit();                                                         //Alerts password does not matchs and redirects to contestant signup page
        }
    }
}
else{
    //Opens signup-contestant page
    header("location:signup-contestant.html");
    exit();
}
?>
