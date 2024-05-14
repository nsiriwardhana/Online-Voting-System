<?php
include_once 'config.php';
/*// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OnlineVotingSystem";

// Create a database connection
$con = new mysqli($servername, $username, $password, $dbname);*/

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if the vote form is submitted
if (isset($_POST['voteButton'])) {
    // Retrieve the submitted vote data
    $contestantID = $_POST['contestantID'];

    // Insert the vote into the database
    $sql = "INSERT INTO `vote`(`ContestantID`, `Name`) VALUES ('[value-1]','[value-2]')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('Vote submitted successfully!')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    header("location: vote.html");
    exit();

}


// Close the database connection
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vocal Voyage | Voting Page</title>

     <!--Favicon-->
     <link rel="icon" type="image/x-icon" href="logo.png">

    <!--linking css file-->
    <link rel="stylesheet" href="styles_main.css"> 
    <link rel="stylesheet" href="styles_vote.css"> 
    <script src="script_vote.js"></script>
    
    <!--linking fonts from google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Header-->
    <header>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#news">Leaderboard</a></li>
            <li><a href="vote.html">Vote</a></li>
            <li><a href="#contact">About us</a></li>
            <li style="float:right;"><a class="HomeLogout" href="../Dhanuka/index.html">Logout</a></li> 
            

        </ul>

          
    </header>
</head>

<body>
    <center>
    <div class="box">
        <h1>Semi Final Round</h1>
        <hr><br><br>
        <img src="contestantprofileimage.png" class="profilepic">
        <h3>Contestant Name<br>
        Age<br>
        ContestantID</h3>
       
        <form action="vote.php" method="POST">
        <button id="voteButton" name="voteButton" style="margin: 50px 0 0 18.2%;"><strong>VOTE</strong></button>
        <input type="hidden" name="contestantID" value=""> <!-- Replace value with the actual contestant ID -->

        </form>

        <br><br><br>
        <h3>Countdown</h3>
        <div class="countdown" id="countdown"></div>

        <br>
        
    </div>
</center>
</body>
    
    <footer>
        
        
        <img src="logo.png" height="60px" style="float: left;" class="ftrlogo">
        <p class="ftrmenu"><a href="">Contact us</a>&nbsp;&nbsp;&nbsp;
            <a href="">Terms and Conditions</a>&nbsp;&nbsp;&nbsp;
            <a href="">Privacy policy</a>&nbsp;&nbsp;&nbsp;
            <a href="">FAQ</a></p>
        
            <!--Subscribe-->
        <div class="subscribe">
            <input type="email" class="email" id="Email" name="Email" placeholder="Email" autocomplete="off">
            <input class="emailsubmit" value="Subscribe" type="submit">
        </div>
        </footer>

</html>
