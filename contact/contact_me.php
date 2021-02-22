<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'martin.duconseil@gmail.com'; // ----->>> put your email to receive mails
$email_subject = "Message envoyé par:  $name";
$email_body = "Vous avez reçu un nouveau message. \n\n".
				  "Voici les détails:\n \nName: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "De: martin.duconseil@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
