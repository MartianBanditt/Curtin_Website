<?php

		// Database authentication details 
		$servername = "localhost";
		$username = "efftwelv_admin";
		$password = "Admin1000";
		$dbname = "efftwelv_nationwide";
		
		// Connect to database
		try{
			
			$conn = mysqli_connect($servername,$username,$password,$dbname);
		}
		catch(Exception $e)
		{
			//Display alert no connection
			echo "<script>alert('Connection failed: ')</script>";
		}
	
?>