<h2><?= $title ?></h2>
<p> Check Email </p>

<?php 
$url = com_create_guid();
$to       = 'aazambrano201@gmail.com';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail! Click this link to verify your account <a href= http://localhost/aaron-personal-codeigniter/verified >'.$url.'<a/>';
$headers  = 'From: aazambrano201@@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
?>