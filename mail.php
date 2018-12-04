<?php
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "chengcheng8715@gmail.com";
  $email = $_REQUEST['email'];
  $fullname = $_REQUEST['fullname'];
  $message = $_REQUEST['message'];
  $headers = "From:" . $email . "\n" . $fullname
  
  //send email
  mail($admin_email, $message, "From:" . $headers);

?>