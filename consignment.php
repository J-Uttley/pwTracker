<?php include 'databaseOnline.php'; ?>
 
<?php
 
// create a variable
$orderNo=$_POST['orderNo'];
$bpdConsignment=$_POST['bpdConsignment'];
$NoPacks=$_POST['NoPacks'];

//Execute the query
echo $orderNo;
 
mysqli_query($connect, "Update mainorder SET bpdConsignment='$bpdConsignment',NoPacks='$NoPacks'  WHERE orderNo='$orderNo'");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Order Added to consignment ".$orderNo."</p>";
 echo '<a href="dashboard.php">Go Back</a>';
 header('location:pwRecieve.php');
} else {
 echo "Error Record NOT Updated!<br />";
 echo mysqli_error ($connect);
}
?>

<script>setTimeout(function(){window.location.href='dashboard.php'},5);</script>