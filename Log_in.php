<?php require ("config.php");
?>

<?php
if(isset($_POST["logInBtn"])){
	
    $email = strtolower($_POST['Lemail']);
    $pwd = $_POST['Lpwd'];
    $accType = $_POST['accType'];

    $sql = "SELECT * FROM registration WHERE E_mail='$email' AND Password='$pwd' AND LogInAs='$accType'";

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    if($result->num_rows>0){

        echo "<script>alert('Login Successfull!')</script>";

        if($row['LogInAs'] == 'std'){
			echo "<script>window.location.replace('MainPage_student.html')</script>";
		}
		else if($row['LogInAs'] == 'stf'){
			echo "<script>window.location.replace('MainPage_Staff.html')</script>";
		}
        else{
            echo "<script>alert('Please choose login type')</script>";   
			echo "<script>window.location.replace('Log_in.html')</script>";
		}
    }
    else{
        echo "<script> alert('Invalid email/password!')</script>";
		echo "<script>window.location.replace('Log_in.html')</script>";
    }
}
?>
