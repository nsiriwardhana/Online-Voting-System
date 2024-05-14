<?php
include_once 'config.php';

// check if FAQ exists
$sql = "SELECT * FROM `faqs` WHERE `id` = ?";
$statement = $conn->prepare($sql);

if (!$statement) {
    die("Error: " . $conn->error); // Display the error message
}

$statement->bind_param("i", $_REQUEST["id"]); // Bind the parameter
$statement->execute();
$faq = $statement->fetch();

if (!$faq) {
    die("FAQ not found");
}

// delete from database
$sql = "DELETE FROM `faqs` WHERE `id` = ?";
$statement = $conn->prepare($sql);

if (!$statement) {
    die("Error: " . $conn->error); // Display the error message
}

$statement->bind_param("i", $_REQUEST["id"]); // Bind the parameter
$statement->execute();

// redirect to previous page
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
