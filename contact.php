<?php
// Fetching Values from URL.
$name = $_POST['name'];
$email = $_POST['email'];
$version = $_POST['version'];
$message = $_POST['message'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
$subject = "Putyoursubjecthere";
// To send HTML mail, the Content-type header must be set.
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $email. "\r\n"; // Sender's Email
//$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
$template = 'Name: ' . $name . '<br /><br />'
. 'Email: ' . $email . '<br /><br />'
. 'Version: ' . $version . '<br /><br />'
. 'Message: ' . $message;

$sendmessage = $template;
// Message lines should not exceed 70 characters (PHP rule), so wrap it.
$sendmessage = wordwrap($sendmessage, 70);
// Send mail by PHP Mail Function.
mail("putyouremailaddresshere.com", $subject, $sendmessage, $headers);
echo "Your query has been received, We will contact you soon.";
} else {
//do nothing
echo "<span> The email address entered is invalid</span>";
}
?>
