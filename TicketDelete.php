<?php require ("config.php");
?>

<?php
if(isset($_POST["btnSubmit"])){
	
    $QusId = $_POST['QuesNo'];
    
    $sql = "DELETE FROM tickets_responses WHERE ID='$QusId' ";

	if ($conn->query($sql) == TRUE) {
		echo "<script>alert('Record deleted successfully')</script>";
		echo "<script>window.location.replace('TicketShowingStd.html')</script>";
	} 
	else {
		echo "Error deleting record" . $conn->error;
	}

	$conn->close();
}
?>

