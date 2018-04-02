<?php
$connect=mysqli_connect('localhost','root','root','poundworld');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

?>