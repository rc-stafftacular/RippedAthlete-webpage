<?php
/*
 * Statix Email Form Submission
 */
$contact_email = 'bobbyli68@gmail.com';	//change this to your email


function isValidEmail($email){
	return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);
}

foreach($_POST['data'] as $key => $data){
	$_POST[$data[0]] = $data[1];
}

if ($_POST['fname'] == ""){
	echo 'Please enter your first name.';
	return;
}

if ($_POST['lname'] == ""){
	echo 'Please enter your last name.';
	return;
}

if ($_POST['email'] == "" || !isValidEmail($_POST['email'])){
	echo 'Please enter a valid email.';
	return;
}

if ($_POST['message'] == ""){
	echo 'Please enter a message.';
	return;
}

$to = $contact_email;
$subject = "New email sent from your contact page";
$message = "First Name: ".$_POST['fname']."\r\nLast Name: ".$_POST['lname']."\r\nEmail: ".$_POST['email']."\r\n";
if (isset($_POST['phone'])) $message .= "Phone: ".$_POST['phone']."\r\n";
if (isset($_POST['address'])) $message .= "Address: ".$_POST['address']."\r\n";
$message .= "Message: \r\n\r\n".$_POST['message'];
$header = 'From: '.$_POST['email']."\r\n".'Reply-To: '.$_POST['email']."\r\n".'X-Mailer: PHP/'.phpversion();
mail (  $to , $subject , $message , $header );
echo 0;

return;
?>
