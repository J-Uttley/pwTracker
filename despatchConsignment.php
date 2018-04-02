<?php include 'databaseOnline.php'; ?>
 
<?php
 
// create a variable
$bpdConsignment=$_POST['bpdConsignment'];

//Execute the query
echo $orderNo;
 
mysqli_query($connect, "Update mainorder SET bpdDesp='&#9989;' WHERE bpdConsignment='$bpdConsignment'");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Order Added to consignment ".$orderNo."</p>";
 echo '<a href="dashboard.php">Go Back</a>';
 //header('location:pwRecieve.php');
} else {
 echo "Error, please check and retry!<br />";
 echo mysqli_error ($connect);
}
?>
<script>setTimeout(function(){window.location.href='dashboard.php'},5);</script>