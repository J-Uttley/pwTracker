<?php include 'databaseOnline.php'; ?>
 
<?php
 
// create a variable
$orderNo=$_POST['orderNo'];
$orderDate=$_POST['orderDate'];
$PWNo=$_POST['PWNo'];
$PWStore=$_POST['PWStore'];
 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO mainorder (orderNo,orderDate,PWNo,PWstore)
         VALUES ('$orderNo','$orderDate','$PWNo','$PWStore')");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Order Added!</p>";
 echo '<a href="dashboard.php">Back to Dashboard</a>';
} else {
 echo "Order NOT added please check your data and retry!<br />";
 echo mysqli_error ($connect);
}
?>

<script>setTimeout(function(){window.location.href='dashboard.php'},1);</script>