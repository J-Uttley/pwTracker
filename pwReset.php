<?php include 'databaseOnline.php'; ?>
 
<?php
 
// create a variable
$orderNo=$_POST['orderNo'];

//Execute the query
echo $orderNo;
 
mysqli_query($connect, "Update mainorder SET PWRec=null WHERE orderNo='$orderNo'");
 
 if(mysqli_affected_rows($connect) > 0){
 echo "<p>Order Has Been Marked as NOT Received!</p>";
 echo '<a href="pwResetDel.php">Go Back</a>';
  header('location:pwResetDel.php');
} else {
 echo "Error<br />";
 echo mysqli_error ($connect);
}
?>

<script>setTimeout(function(){window.location.href='pwResetDel.php'},5);</script>