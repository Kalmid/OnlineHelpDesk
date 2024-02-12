<?php require ("config.php");
?>

<?php
	if(isset($_POST["btnSubmit"])){
		$User_name = $_POST["username"];
		$E_mail = strtolower($_POST["email"]);
		$Mobile_number = $_POST["Mnumber"];
		$LogInAs = $_POST["accType"];
		$Faculty = $_POST["faculty"];
		$Password = $_POST["pwd"];
		$ConfrmPassword = $_POST["pwd_repeat"];
		
	if ( $Password == $ConfrmPassword){
		
		$sql = "INSERT INTO registration ( User_name, E_mail, Mobile_number, LogInAs, Faculty, Password ) VALUES ( '$User_name', '$E_mail', '$Mobile_number', '$LogInAs', '$Faculty', '$Password')";
				
		if ($conn->query($sql)){
			echo '<script>alert("insert succeful")</script>';
								}
		else {
			echo "error: ". $conn->error;
			}
		}
		
		else {
			echo '<script>alert("Password mismatched")</script>';
		}
	}
	echo "<script>window.location.replace('Sign_up.html')</script>";
?>
