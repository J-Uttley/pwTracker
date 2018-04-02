<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="OrderStyle.css"> 
    <title>BPD Poundworld Backoffice</title>
</head>
<body>
    <h1>Order Status Summary</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "poundworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT orderNo, orderDate, PWNo, PWStore, bpdDesp, inProd FROM mainorder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Order Number</th><th>Store No.</th><th>Store Name</th><th>In Production</th><th>Collected by Poundworld</th><th>Date Collected</th><th>Recieved at Poundworld</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["orderNo"]."</td><td>".$row["PWNo"]. "</td><td> ".$row["PWStore"]."</td><td> ".$row["inProd"]."</td><td> ".$row["bpdDesp"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>