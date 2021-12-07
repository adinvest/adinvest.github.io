<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);
    $name = urldecode($name);
    $email = urldecode($email);
    $message = urldecode($message);
    $name = trim($name);
    $email = trim($email);
    $message  = trim($message);
     
    $to = 'adinvest@list.com';
      
    $subject = 'Contact Request From Website';
    $headers = "From: ".$name." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}
?>