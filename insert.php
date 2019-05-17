<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "signin");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Name = mysqli_real_escape_string($link, $_GET['Name']);
$Email = mysqli_real_escape_string($link, $_GET['Email']);
$Time = mysqli_real_escape_string($link, $_GET['Time']);
 
// attempt insert query execution
$sql = "INSERT INTO sheet (Name, Email, Time) VALUES ('$Name', '$Email', '$Time')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// close connection
mysqli_close($link);
?>