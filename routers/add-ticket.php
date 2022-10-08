<?php
include '../includes/connect.php';
$subject = htmlspecialchars($_POST['subject']);
$description =  htmlspecialchars($_POST['description']);
$stype = $_POST['stype'];
$u_id = $_POST['uid'];
if($type != ''){
	$sql = "INSERT INTO tickets (poster_id, subject, description, stype) VALUES ($u_id, '$subject', '$description', '$stype')";
	if ($con->query($sql) == TRUE){
		$ticket_id =  $con->insert_id;
		$sql = "INSERT INTO ticket_details (ticket_id, u_id, description) VALUES ($ticket_id, $u_id, '$description')";
		$con->query($sql);
	}
}
header("location: ../tickets.php");
?>
