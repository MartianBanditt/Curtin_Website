<?php

	require_once 'scripts/functions.php';
	require 'scripts/conn.php';
	
	
	
if(isset($_POST['submit'])){

	// check if all fields have been entered
	if( $_POST['cust-name'] == "" ||
		$_POST['cust-email'] == "" ||
		$_POST['mobile'] == "" ||
		$_POST['date'] == "" ||
		$_POST['time'] == "" ){

			echo "<script>alert('Please enter all fields')</script>";
			
	}else{
		
		try{
			// create connection
			$conn = mysqli_connect($servername,$username,$password,$dbname);
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}	

			$query = "INSERT INTO `Bookings`(`name`, `email`, `mobile`,`date`,`time`) VALUES 
				('{$_POST['cust-name']}', '{$_POST['cust-email']}', '{$_POST['mobile']}', '{$_POST['date']}',
					 '{$_POST['time']}')";
					 
			$result = mysqli_query($conn, $query);
			
			
		} catch(Exception $e ){
			echo "<script>alert('Connection failed: ')</script>";
		}
	}
}

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Account Types</title>
    <?php style_sheets(); ?>
    
</head>

<body>

    <!-- header starts here -->
    <header class="container">
        <?php header_content(); ?>
    </header>

    <main>
        <!-- Call to aciton section, funnels through to questionaires -->
        <div class="full-width-background title">
            <section id="title" class="container">

                <h1>Booking Details Confirmed</h1>
					<hr>
					<?php
						
											//form details posted 
						$name = htmlspecialchars($_POST['cust-name'], ENT_QUOTES); 
						$email = htmlspecialchars($_POST['cust-email'], ENT_QUOTES);
						$mobile = htmlspecialchars($_POST['mobile'], ENT_QUOTES);
						$date = htmlspecialchars($_POST['date'], ENT_QUOTES);
						$time = htmlspecialchars($_POST['time'], ENT_QUOTES);
						
						$email_from = "www.nationwide.efftwelve.com";
						$email_subject = "Re: Booking";
						$email_body = "Hello there \n\n".
									  "You have received a Booking from the user $name.\n".
									  "To Respond here is their email : $email \n".
									  "Or their mobile phone number : $mobile \n".
									  "The date of the booking is: $date \n".
									  "The time of the booking is: $time \n".
									  
						
						// send message information
						$to = "jasonaelane@gmail.com";
						$headers = "From: $email_from \n";
						$headers .= "Reply-To: $email \n";
						mail($to,$email_subject,$email_body,$headers);
											

						echo "Booking details for the date of: " . $_POST['date'] . "</br>";
						echo "at this time: " . $_POST['time'] . "</br>";
						echo "Booking made by: " . $_POST['cust-name'] . "</br>";
						echo "Contact email: " .$_POST['cust-email'] . "</br>";
						echo "Contact phone: " . $_POST['mobile'] . "</br>";
						
						echo " An email has also been sent to a Customer service Representative";

					?>
					<div class="submit">
							<input class="btn btn-secondary btn-lg" type="button" onclick="location.href='index.php'" value="Back" />
							
					</div>
					
					<hr>
				</section>
			</div>
					
		
		
    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>

    <!-- Loading scripts last -->
    <?php scripts(); ?>
    
</body>

</html>
