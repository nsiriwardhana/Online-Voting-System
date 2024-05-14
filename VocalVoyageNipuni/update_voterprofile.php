<?php
include_once 'config.php';
   //Include the config.php file to establish a database connection
   include_once("config.php");

    session_start();
    if(!isset($_SESSION["voterID"])){
       //redirect to the login page if the user is not logged in
       header("loaction:login_voter.php");

       exit();
    }

   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $birthdate = $_POST["birthdate"];

    $voterID = $_SESSION["voterID"];

    //Update the voter's profile information in the database
    $sql = "UPDATE 'signup-voter' SET 'Name'='$firstname $lastname', 'Email'='$email', 'Birthday'='$birthdate' WHERE 'VoterID'='$voterID' ";
    $result = $con->query($sql);

    if($result){
        //Profile update successful
        echo "<script>alert('Profile updated successfully');</script>";
        echo "<script>location.href='voterprofile.html';</script>";
    }
    else{
        //Profile update failed
        echo "<script>alert('Failed to update profile');</script>";
        echo "<script>location.href='voterprofile.html';</script>";
    }

   }

   else{
      //Redirect back to the profile page if accessed directly without submitting the form
      header("location: voterprofile.html");
      exit();
   }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vocal Voyage | Voter Profile Page</title>

     <!--Favicon-->
     <link rel="icon" type="image/x-icon" href="logo.png">

    <!--linking css file-->
    <link rel="stylesheet" href="styles_main.css"> 
    <link rel="stylesheet" href="styles_voter.css"> 
    
    <!--linking fonts from google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Header-->
    <header>
        <ul>
            <li><a href="../Dhanuka/index.html">Home</a></li>
            <li><a href="../Dhanuka/leaderboard.php">Leaderboard</a></li>
            <li><a href="vote.html">Vote</a></li>
            <li><a href="../New folder/About us.html">About us</a></li>
            <li style="float:right;"><a class="HomeLogout" href="../Dhanuka/index.html">Logout</a></li>
            
        </ul>
    </header>
</head>
<body>
    <center>
        <div class="box">
            <form action="update_profile.php" method="POST">
                <h1>Voter Account Information</h1>
                <img src="voterprofileimage.png" class="profilepic">
                <input type="file" name="" id="file" class="img_icon"  accept="image">
                <label for="file" id="uploadBtn">Choose image</label>
                <input type="text" name="" placeholder="First name" class="text" >
                <input type="text" name="" placeholder="Last name" class="text" >
                <input type="email" name="" placeholder="Email" class="text" >
                <input type="text" name="" placeholder="Date of birth" class="text" >
                <button style="float: left; margin: 20px 0 0 18.2%;">CANCLE</button>
                <button type="submit" style="float: right; margin: 20px 18.2% 0 0;">DONE</button>
            </form>
        </div>
    </center>
</body>
    
    <footer>
        
        
        <img src="logo.png" height="60px" style="float: left;" class="ftrlogo">
        <p class="ftrmenu"><a href="">Contact us</a>&nbsp;&nbsp;&nbsp;
            <a href="../t&cHasangi/terms.html">Terms and Conditions</a>&nbsp;&nbsp;&nbsp;
            <a href="../t&cHasangi/privacy.html">Privacy policy</a>&nbsp;&nbsp;&nbsp;
            <a href="../t&cHasangi/index.php">FAQ</a></p>
        
            <!--Subscribe-->
        <div class="subscribe">
            <input type="email" class="email" id="Email" name="Email" placeholder="Email" autocomplete="off">
            <input class="emailsubmit" value="Subscribe" type="submit">
        </div>
        </footer>

</html>