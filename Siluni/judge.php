<?php
//Including the configuration file
include_once("config.php");


//Insert values into tables

$Username="Udula Ravinath";
$Vote_percentage="56%";

$sql="insert into winner(Username,Vote_percentage) values(?,?,?)";
$statement=$con->prepare($sql);

$statement->bind_param("sf",$Username,$Vote_percentage);


$statement->execute();





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vocal Voyage | Judge</title>

     <!--Favicon-->
     <link rel="icon" type="image/x-icon" href="logo.png">

    <!--linking css file-->
    <link rel="stylesheet" href="judge.css">

    <!--linking fonts from google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Header-->
    <header>
        <ul>
            
            <img src="logo.png" height="60px" style="float: left;" class="ftrlogo">
            <li style="float:right"><a class="" href=""></a></li>
            <li style="float:right"><a class="" href="../Dhanuka/index.html">Logout</a></li>
            
        </ul>
    </header>
</head>
<body>
    <center><h1 style="color:white;">Vocal Voyage Reality Show</h1></center><br>
    <center><img src=profile.png  alt="contestant picture" class="profilepic"></center>
    <center><h3>judge</h3></center>

    <div style="border: 1px solid black; width: 97%; height: 870px; float: left;">
        <div id="wrapper">
            <div class="container2">
                <img src="stage.jpg" height="600px" width="500px">
            </div>
            
            <div class="main1">
              <form action="#">
                   <div class="title">
                      <h2>Analyze Votes Percentage</h2>
                    </div>
                 <table>
                      <tr>
                          <th>profile</th>
                          <th>Name</th>
                          <th>Percentage</th>
                        </tr>
                      <tr>
                         <td><img src=profile.png  alt="contestant picture" class="profilepic" ></td>
                         <td >Nisal Perera</td>
                         <td>72%</td>
                        </tr>
                      <tr>
                          <td><img src=profile.png alt="contestant picture" class="profilepic"></td>
                          <td >Kamani Fonseka</td>
                          <td>33%</td>
                       </tr>
                      <tr>
                          <td><img src=profile.png alt="contestant picture" class="profilepic"></td>
                          <td >Lochana Amandi</td>
                          <td>88%</td>
                       </tr>
                       <tr>
                          <td><img src=profile.png alt="contestant picture" class="profilepic"></td>
                          <td >Udula Ravinath</td>
                          <td>56%</td>
                       </tr>
                       
                       
                    </table>
                </form>
            </div>   
            <div class="container">
                
             <form action="#">
                 <h2>Winner Details</h2>
                 <img src=profile.png height="150px"  alt="Winner's picture" class="user">
                 <br>
                 <input type="text" placeholder="No"
                 
                 <br>
                 <input type="text" placeholder="Name">
                 <input type="text" placeholder="percentage">

                 <button type="submit">Submit</button>
                <button type="submit">Cancel</button>
                </form>
            
            </div>

           
          
        </div>   
        </div>
</body>
    
    <footer>
    
        <!--ManageFAQ-->
        
            <div class="ManageFAQ" style="float: right;">
                <button type="submit">ManageFAQ</button>
              </div>
        
        
    </footer>
</body>
</html>