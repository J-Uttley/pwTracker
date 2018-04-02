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
    <?php include 'BPDNavBar.php';?>
<div id="container">
<div class="form" id="addOrder">
    <h5>Add New Order</h5>
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
</div>

</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script>
</html>