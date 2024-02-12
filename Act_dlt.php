<?php require ("config.php");
?>

<?php
if(isset($_POST["dltBtn"])){
	
    $email = strtolower($_POST['Lemail']);
    $pwd = $_POST['Lpwd'];
	$cpwd = $_POST['cpwd'];
	
	if( $pwd == $cpwd ){
		$sql = "DELETE FROM registration WHERE E_mail='$email' AND Password='$pwd'";
		if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record deleted successfully')</script>";
		echo "<script>window.location.replace('Log_in.html')</script>";
		} 
			else {
					echo "Error deleting record" . $conn->error;
			}
	}
	else
	{
		echo "<script>alert('pasword miss matched')</script>";
		echo "<script>window.location.replace('Act_dlt.html')</script>";
	}
	
	

	$conn->close();
}
?>

