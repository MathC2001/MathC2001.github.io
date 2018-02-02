<?php
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];
$Q5 = $_POST["Q5"];
$Q6 = $_POST["Q6"];
$Q7 = $_POST["Q7"];
$Q8 = $_POST["Q8"];
$Q9 = $_POST["Q9"];
$Q10 = $_POST["Q10"];


/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "05210824", "cndog");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Opt = mysqli_real_escape_string($link, $_REQUEST['Opt']);
$ChoiceNB = mysqli_real_escape_string($link, $_REQUEST['ChoiceNB']);

 
// attempt insert query execution
$sql = "INSERT INTO cnydog (Opt, ChoiceNB) VALUES ('$Q1','1'),('$Q2','1'),('$Q3','1'),('$Q4','1'),('$Q5','1'),('$Q6','1'),('$Q7','1'),('$Q8','1'),('$Q9','1'),('$Q10','1')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

// close connection
mysqli_close($link);


header("Location:retrieve.php"); 
exit; 

?>