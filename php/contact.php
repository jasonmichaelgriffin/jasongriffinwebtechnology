<?php

//TODO add sanitizers, validators, and csrf defenses
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'jasonmichaelgriffin@gmail.com';
$subject = 'Message from griffinwebtechnology site'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the reaching out to me. I will be contacting you shortly.');
		//		alter the below location once this is migrated to production
		window.location = '../draft/in-progress1_1.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an e-mail to sailor_griffin@yahoo.com');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>