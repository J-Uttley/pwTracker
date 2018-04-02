<!DOCTYPE html>
<html>
<head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="OrderStyle.css"> 

<title>Poundworld Backoffice</title>
</head>
<body>
    <?php include 'NavBar.php';?>

<h1>Orders In Production</h1>
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

$sql = "SELECT orderNo, orderDate, PWNo, PWStore, bpdDesp, inProd, NoPacks, bpdConsignment, pwRec FROM mainorder where bpdConsignment is null";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Order Number</th><th>Store No.</th><th>Store Name</th><th>In Production</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["orderNo"]."</td><td>".$row["PWNo"]. "</td><td> ".$row["PWStore"]."</td><td> ".$row["inProd"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h4>No Orders In Production</h4>";
}
$conn->close();
?>
<hr>
<h1>Orders Awaiting Collection</h1>
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

$sql = "SELECT orderNo, orderDate, PWNo, PWStore, bpdDesp, inProd, NoPacks, bpdConsignment FROM mainorder where bpdConsignment is not null and bpdDesp is null";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Order Number</th><th>Store No.</th><th>Store Name</th><th>BPD Consignment No.</th><th>Number of Packs</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["orderNo"]."</td><td>".$row["PWNo"]. "</td><td> ".$row["PWStore"]."</td><td> ".$row["bpdConsignment"]."</td><td>".$row["NoPacks"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h4>No Orders in Current Consignment</h4>";
}
$conn->close();
?>
</div>
<hr>

</div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
</html>