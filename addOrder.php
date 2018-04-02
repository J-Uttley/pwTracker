<!DOCTYPE html>
<html>
<head>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="OrderStyle.css"> 

<title>BPD Poundworld Dashboard</title>
</head>
<body>
<div id="container">
<div class="form" id="addOrder">
<form method="post" action="process.php">
<label>Order Number</label>
<input type="text" name="orderNo" />
<br />
<label>Order Date</label>
<input type="date" name="orderDate" />
<br />
<label>Poundworld Store No.</label>
<input type="text" name="PWNo" />
<br />
<label>Poundworld Store Name</label>
<input type="text" name="PWStore" />

<br />
<input type="submit" value="Add New Order">
</form>
</div>
<div class="form" id="addConsignment">
<form method="post" action="consignment.php">
<label>Order Number</label>
<input type="text" name="orderNo" />
<br />
<label>Consignment Number</label>
<input type="text" name="bpdConsignment" />
<br />
<label>Number of Packs</label>
<input type="text" name="NoPacks" />

<br />
<input type="submit" value="Update Order">
</form>
</div>
<div class="status">
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

$sql = "SELECT orderNo, orderDate, PWNo, PWStore, bpdDesp, inProd, NoPacks, bpdConsignment FROM mainorder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Order Number</th><th>Store No.</th><th>Store Name</th><th>In Production</th><th>BPD Consignment No.</th><th>Number of Packs</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["orderNo"]."</td><td>".$row["PWNo"]. "</td><td> ".$row["PWStore"]."</td><td> ".$row["inProd"]."</td><td> ".$row["bpdConsignment"]."</td><td>".$row["NoPacks"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
</html>