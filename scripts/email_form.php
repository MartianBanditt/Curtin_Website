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
  
	echo $name;
	echo $email;
  
?>
