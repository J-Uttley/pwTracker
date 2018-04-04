<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="OrderStyle.css"> 
    <title>Poundworld Backoffice</title>
</head>
<body>

    <?php include 'NavBar.php';?>
    <h1>Receive Orders Into Poundworld DC</h1>


<?php
$servername = "213.171.200.84";
$username = "apiRootUser";
$password = "apiR00tUser";
$dbname = "poundworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT orderNo, orderDate, PWNo, PWStore, bpdDesp,bpdConsignment, inProd FROM mainorder where PWRec is null and bpdDesp is not null order by PWNo asc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Order Number</th><th>Store No.</th><th>Store Name</th><th>In Production</th><th>Despatched From BPD</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["orderNo"]."</td><td>".$row["PWNo"]. "</td><td> ".$row["PWStore"]."</td><td> ".$row["inProd"]."</td><td> ".$row["bpdDesp"].'</td><td>
        <form method="post" action="Despatch.php">
        <input type="hidden" name="orderNo" value="'.$row["orderNo"].'">
        <input type="submit" value="Received">
        </form>
        
        </td></tr>';
    }
    echo "</table>";
} else {
    echo "<h4>No Outstanding Orders to Receive!</h4>";
}
$conn->close();
?>

</body>
</html>