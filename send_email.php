<?php
$name = $_POST['name'];
$user_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
sendEmail($name, $user_email, $subject, $message);

function    sendEmail($name, $email, $subject, $message)
{
    $to      = 'mjjply2@gmail.com';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
    $message .= '
    ------------------------
    Sender Name: '.$name.'
    Sender Email: '.$email.'
    ------------------------';
    
    mail($to, $subject, $message, $headers);
    header('Location: index.html#work');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  </head>
  <body>
  
  </body>
</html>