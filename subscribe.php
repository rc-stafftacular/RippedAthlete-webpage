<?php
/*
 * Statix Newsletter Subscription
 */

function isValidEmail($email){
	return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);
}

if ($_POST['email'] == "" || !isValidEmail($_POST['email'])){
	echo 'Please enter a valid email.';
	return;
}

$myFile = 'newsletter_emails.txt';
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite(
	$fh, $_POST['email'].'
');
fclose($fh);

echo 0;

return;
?>
