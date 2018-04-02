<?php include 'databaseOnline.php'; ?>
 
<?php
 
// create a variable
$orderNo=$_POST['orderNo'];

//Execute the query
echo $orderNo;
 
mysqli_query($connect, "Update mainorder SET PWRec='&#9989;' WHERE orderNo='$orderNo'");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Order Added!</p>";
 echo '<a href="pwRecieve.php">Go Back</a>';
 header('location:pwRecieve.php');
} else {
 echo "Employee NOT Added<br />";
 echo mysqli_error ($connect);
}
?>

<script>setTimeout(function(){window.location.href='pwRecieve.php'},5);</script>