<?php
include '../includes/connect.php';
$status = $_POST['status'];
$uid = $_POST['id'];

$stat = "UPDATE orders SET status='$status' WHERE id=$uid;";
$con->query($stat);

header("location: ../all-orders.php");
?>
