<?php require ("config.php");
?>

<?php
if(isset($_POST["smtbtn"])){
	
    $email = strtolower($_POST['email']);
    $newpwd = $_POST['NewPwd'];
	$conpwd = $_POST['conPwd'];
	
		$sql = "UPDATE registration SET Password='$newpwd' WHERE E_mail='$email'";

	if ($conn->query($sql) == TRUE) 
	{
		echo "<script>alert'Record updated successfully'</script>";
		echo "<script>window.location.replace('Log_in.html')</script>";
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
	}

}
$conn->close();
?>
