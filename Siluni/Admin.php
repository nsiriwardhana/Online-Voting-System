<?php
 //Including the configuration file
include_once("config.php");


//Insert values into tables
$Address=$_POST["Address_c"];
$Username=$_POST["Username_c"];
$Password=$_POST["Password_c"];

$sql="SELECT * FROM `contestant`";
$statement=$con->prepare($sql);

$statement->bind_param("sss",$Address,$Username,$Password);


$statement->execute();


// Retrieve contestant data
$sql = "SELECT * FROM contestant_table";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "contestant_Id: " . $row["contestant_Id"]. "<br>";
    echo "Address: " . $row["Address"]. "<br>";
    echo "Username: " . $row["Username"]. "<br>";
    echo "Password: " . $row["Password"]. "<br><br>";
  }
} else {
  echo "No contestants found.";
}

// Close the database connection
$con->close();



?>
