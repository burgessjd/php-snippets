<?php
if (isset($_POST['submit'])) {


// create variables for the values sent from the form

$grades = strip_tags($_POST['grades']);

$first = strip_tags($_POST['firstname']);

$last = strip_tags($_POST['lastname']);

$phone = strip_tags($_POST['tel']);

$email = strip_tags($_POST['email']);

$title = strip_tags($_POST['title']);

$url = strip_tags($_POST['url']);

$date = strip_tags($_POST['date']);

// creat email message

$headers    = "Content-Type: text/plain; charset=iso-8859-1";

$headers    = "From: John Smith <john.smith@somedomain.com>";

$headers    = "Cc: <$email>";

$recipient  = "jane.smith@somedomain.com";

$subject    = "Sample Form Submission";

$body_message = 'Name: '.$first.' '.$last."\n";
$body_message .= 'Grades: '.$grades."\n";  
$body_message .= 'Telephone: '.$phone."\n";  
$body_message .= 'Email: '.$email."\n"; 
$body_message .= 'Video Title: '.$title."\n"; 
$body_message .= 'Video URL: '.$url."\n"; 
$body_message .= 'Date Posted: '.$date; 


// send the email to agency

$mail_status = mail($recipient, $subject, $body_message, $headers);

if($mail_status == true)
{
	
	header('Location: confirmation.php');
}
else 
{
	echo "<h1 style='color:red'>EMAIL MESSAGE WAS NOT DELIVERED! PLEASE CONTACT TECH SUPPORT.</h1>";
}

}
?>