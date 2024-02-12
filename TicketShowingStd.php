
<!DOCTYPE html>
<html>
<head>
	<title>My tickets</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="StyleSheets/signup.css"/>
	<link rel="stylesheet" href="StyleSheets/StyleMain.css"/>
</head>
	<body>	
		<header> 
			<input type = "checkbox"  name=""  id = "chk1">
				<div class = "logo"><h2>Student Support Desk</h2></div>
					<div class = "search-box">
						<form action = "GET">
							<input type = "text" name = "search" id = "srch" placeholder = "search">
							<button type = "submit"><image src="logo/searchlogo.webp" width="30" height="30"/></button>
						</form>
					</div>
				<ul>
					<li><a href="index.html"> Home </a></li>
					<li><a class="nav" href="MainPage_student.html"> Help Service </a></li>
					<li><a href="About_us.html"> About </a></li>
					<li><a href="Contact_us.html"> Contact us </a></li>
					<li><a href="Updatepro.html"><button><image src="logo/profile.png" width="40" height="30"/></button></a></li>
				</ul>
		</header><br><br>
		

		
	<div class="container1">
	
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "help_desk_db";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $db);
	
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			else
			{
				//echo "Connected to DB"
				echo '<script>alert("Connected to DB")</script>';
			}
			
				$Stid = $_POST["stdID"];
				
				echo "<b><center>Student ID : $Stid</center></b> <br><br>";
				$sql = "SELECT ID, request_type, Subject, Message, Response, Faculty FROM tickets_responses WHERE Student_ID = '$Stid'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					echo "<table border='1' style='width:100%'><tr><th>Question No</th><th>Request Type</th><th>Subject</th><th>Question</th><th>Response</th><th>Faculty</th></tr>";
						// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["ID" ]. "</td><td>" . $row["request_type" ]. "</td><td>" . $row["Subject" ]. "</td><td>" . $row["Message" ]. "</td><td>" . $row["Response" ]. "</td><td>" . $row["Faculty" ]. "</td></tr>";
					}
					echo "</table>";
				} 
				else
					{
						echo "0 results";
					}

				$conn->close();
				?>
				<br><br>
				<form method="post" action="TicketDelete.php">
					<center>
						<b>If you want to Remove any question, Please enter the Question number :</b>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
							<input type="text" name="QuesNo" id = "Qno" placeholder="Question no: 1" size="5"> 
							<input type="submit" class="Qsmbt" value="Delete" name="btnSubmit" style="height:35px; width:100px">&ensp;
					</center>
				</form>
	 </div>	 
	
	
	
		<div class="vl">
		<div class = "intro2">
			<div class="month">
    <ul>
      <li class="prev">&#10094;</li>
      <li class="next">&#10095;</li>
      <span style="font-size:25px; color:white;">November</span><br><span style="font-size:18px; color:white;">2022</span></li>
    </ul>
  </div>
  
  <ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
  </ul>
  
  <ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li><span class="active">7</span></li>
    <li>8</li>
    <li>9</li>
    <li>10</li>
    <li>11</li>
    <li>11</li>
    <li>12</li>
    <li>13</li>
    <li>14</li>
    <li>15</li>
    <li>16</li>
    <li>17</li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
    <li>21</li>
    <li>22</li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
    </ul><br><br>
		<p style = "font-family: cursive;">CAPELLA UNIVERSITY...</p>
		<div class="adres">
			<div id="adress">Support desk :<br>Welivita,<br>Malabe,<br>Sri Lanka,<br>10115.</div>
			<div>Main office : <br>2nd floor,<br>Malabe,<br>Sri Lanka,<br>10115.</div>
		</div><br>
		
		</div>
		</div>
		<footer id = "foter">
			<hr>
			<p style="color:white; background-color:maroon">© 2022<br>All Rights Reserved</p>
				<div class = "socialfoter">
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiK5qaCsPf6AhWmcGwGHRfMCpQQFnoECBIQAQ&url=https%3A%2F%2Fwww.instagram.com%2Fcapellau%2F%3Fhl%3Den&usg=AOvVaw3LIQPdrRdi-My3NXlgUxIC"><image src="logo/insta.jpeg" width="20" height="20"/>'</a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiOlrumsPf6AhXUTmwGHbSRBNgQFnoECBAQAQ&url=https%3A%2F%2Fwww.facebook.com%2FCapellaUniversity%2F&usg=AOvVaw3V_WhKWLHszJmygSkbcH16"><image src="logo/fb.jpeg" width="20" height="20"/></a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwikrLDRsPf6AhVJSmwGHSpEC84QFnoECA0QAQ&url=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fcapella-university%2F&usg=AOvVaw1LmyiQN0XU8i4ujXKIJmcG"><image src="logo/LinkedIn.jpeg" width="20" height="20"/></a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj3iYzQw4P7AhW3SmwGHSJUAz0QFnoECBYQAQ&url=https%3A%2F%2Ftwitter.com%2Fcapellau&usg=AOvVaw1EYA48gsgmCHIb9sdwLNaF"><image src="logo/Twiter.jpeg" width="20" height="20"/></a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjR5ayAxIP7AhX9R2wGHbSAAJoQFnoECAkQAQ&url=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCzICfNoGvU6qRQjl9xwZT7Q&usg=AOvVaw3Q4gOQMIob9DvFBrVNwpIk"><image src="logo/youtube.jpeg" width="20" height="20"/></a>
				</div>
			<hr>
		</footer>
		
	</body>
</html>
		
	</body>
	
</html>