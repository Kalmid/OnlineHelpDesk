<?php require ("config.php");
?>

<?php
		if(isset($_POST["submt"])){
		$name = $_POST["name"];
		$Student_id = strtolower($_POST["idnum"]);
		$Email = strtolower($_POST["email"]);
		$mobile = $_POST["phone"];
		$request_type = $_POST["request_type"];
		$Subject = $_POST["subject"];
		$message = $_POST["message"];
		$Faculty = "Computing" ;
		
		
		$sql = "INSERT INTO tickets_responses ( Name, Student_ID, E_mail, mobile, request_type, Subject, Message, Faculty ) 
				VALUES ( '$name', '$Student_id', '$Email', '$mobile', '$request_type', '$Subject', '$message', '$Faculty' )";
				
		if ($conn->query($sql)){
			echo '<script>alert("insert succeful")</script>';
								}
		else {
			echo "error: ". $conn->error;
			}
		}
			
		echo "<script>window.location.replace('computing ticket.html')</script>";
	
	$conn->close();
		
?>