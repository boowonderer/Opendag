<!DOCTYPE html>
<html>


<body>

    <?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "projectopendag");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$email = $_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact VALUES ('$firstname',
			'$lastname','$email','$gender','$message')";
		

		
		if (mysqli_query($conn, $sql)){
			header("Location: ./form_done.php");
			
		} else{
			echo "ERROR $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>

</body>

</html>