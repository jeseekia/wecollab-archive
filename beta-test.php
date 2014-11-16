<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  
?>

<?php
    $email_from = 'WeCollabCo@gmail.com';
 
    $email_subject = "New Form submission";
 
    $email_body = "You have received a beta test request from the user $visitor_email.\n".
                            "Here is the message:\n $message".
?>



<?php
 
  $to = "WeCollabCo@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
 
 ?>