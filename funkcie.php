<?php
function send_email($to, $subject, $message){

	$headers = 'From: autocentrummp@autocentrummp.com' . "\r\n" .
		'Reply-To: autocentrummp@autocentrummp.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}

?>