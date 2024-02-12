<?php require ("config.php");
?>

<?php
		if(isset($_POST["Bsubmt"])){
		$Bname = $_POST["Bname"];
		$BStudent_id = strtolower($_POST["Bidnum"]);
		$Bemail = strtolower($_POST["Bemail"]);
		$Bmobile = $_POST["Bphone"];
		$Brequest_type = $_POST["Brequest_type"];
		$BSubject = $_POST["Bsubject"];
		$Bmessage = $_POST["Bmessage"];
		$BFaculty = "Bussiness" ;
		
		
		$sql = "INSERT INTO tickets_responses ( Name, Student_ID, E_mail, mobile, request_type, Subject, Message, Faculty ) 
				VALUES ( '$Bname', '$BStudent_id', '$Bemail', '$Bmobile', '$Brequest_type', '$BSubject', '$Bmessage', '$BFaculty' )";
				
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