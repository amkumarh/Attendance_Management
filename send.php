<?php
require_once "mail.php";

$from = "hardshiv15@gmail.com";
$to = "azadshiv1508@gmail.com";
$subject = "Test email using PHP SMTP\r\n\r\n";
$body = "This is a test email message";

$host = "SMTPhostname";
$username = "azadshiv1508@gmail.com";
$password = "arrehmangulzar";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
} else {
  echo("<p>Message successfully sent!</p>");
}
?>