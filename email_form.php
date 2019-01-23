<?php

	//form details posted 
	$name = htmlspecialchars($_POST['cust-name'], ENT_QUOTES); 
	$email = htmlspecialchars($_POST['cust-email'], ENT_QUOTES);
	$mobile = htmlspecialchars($_POST['cust-mobile'], ENT_QUOTES);
	$enquiry = htmlspecialchars($_POST['enquiry-type'], ENT_QUOTES);
	$message = htmlspecialchars($_POST['cust-message'], ENT_QUOTES);
	
	$email_from = "www.nationwide.efftwelve.com";
	$email_subject = "Re: Contact Us - Enquiry, Compliment or Complaint";
	$email_body = "Hello there Adminstrator.\n\n".
				  "You have received an important message from the user $name.\n".
				  "To Respond here is their email : $email \n".
				  "Or their mobile phone number : $mobile \n".
				  "Below is the message : \n\n".
				  "$message \n";
	
	// send message information
	$to = "jasonaelane@gmail.com";
	$headers = "From: $email_from \n";
	$headers .= "Reply-To: $email \n";
	mail($to,$email_subject,$email_body,$headers);
  
	
?>

<?php
   require_once 'scripts/functions.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nationwide - Homepage</title>
    <!-- bootstrap styles -->
    <?php style_sheets(); ?>

</head>

<body>

    <!-- header starts here -->
    <header class="container">
        <?php header_content(); ?>
    </header>

	<!-- main navigation -->
	<?php main_nav(); ?>

    <main>
    <!-- thankyou message -->  
	   <div class="full-width-background">
            <div class="container">
				<div class="row no-gutters">
                    <div class="col-md-8 p-sm-5 p-4 bg-third">
						<p>Thank You <?php echo $name ?> for your enquiry </br>
						  Within 24 hours you will receive a response from our </br>
							Customer Service Representatives.</p>
						<p>Our Customer Service Representative might call you on : <?php echo $mobile; ?></br>
							or they might email you at : <?php echo $email; ?> </p>
						<p> Thanks again for your time.</p>
						<input type="button" value="BACK" onclick="history.back()">
					</div>
				</div>
            </div>
        </div>
        
    </main>

    <!-- Footer should be consistent across pages so rendered from php file -->
    <?php footer(); ?>


    <!-- Loading scripts last -->
    <?php scripts(); ?>

</body>

</html>

