<html>
<body style="background-color:brown;">

<?php
$servername = "localhost";
$username = "root";
$password = "05210824";
$dbname = "cndog";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql = "SELECT Opt, ChoiceNB FROM cnydog";
//$result = mysqli_query($conn, $sql);

//if (mysqli_num_rows($result) > 0) {
    
    //while($row = mysqli_fetch_assoc($result)) {
        //echo " Opt: " . $row["Opt"]. " " . $row["ChoiceNB"]. "<br>";
    //}
//} else {
    //echo "0 results";
//}

$sql2  = 'SELECT Opt, sum(ChoiceNB) as ChoNB  FROM `cnydog` group by Opt';
$result2= mysqli_query($conn, $sql2);


if (mysqli_num_rows($result2) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($result2)) {
        echo " Opt: " . $row2["Opt"]. " " . $row2["ChoNB"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql3 = 'SELECT Opt, sum(ChoiceNB) as new FROM `cnydog` group by Opt order by new DESC limit 1';

        
$result3= mysqli_query($conn, $sql3);
if (mysqli_num_rows($result3) > 0) {
    // output data of each row
    while($row3 = mysqli_fetch_assoc($result3)) {
        echo " Opt: " . $row3["Opt"]. " # of selection" . $row3["new"]. "<br>";

        switch ($row3["Opt"]) {
    case "opt1":
        echo "dog 1";
        header("Location:Dog1.php"); 
        exit;
        break;
     case "opt2":
        echo "dog 2";
        header("Location:Dog2.php"); 
        exit;
        break;
    case "opt3":
        echo "dog 3";
        header("Location:Dog3.php"); 
        exit;
        break;
    case "opt4":
        echo "dog 4";
        header("Location:Dog4.php"); 
        exit;
        break;
    case "opt5":
        echo "dog 5";
        header("Location:Dog5.php"); 
        exit;
        break;

    }

    }
} else {
    echo "0 results";
}






mysqli_close($conn);
?>






</body>
</html>