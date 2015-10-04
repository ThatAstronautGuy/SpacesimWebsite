<?php
  $email_to = "commanders@spacesim.org";
       
  $email_subject = "Automatic Email from Website";
       
       
  function died($error) {
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br><br>";
    echo $error."<br><br>";
    echo "Please go back and fix these errors.<br><br>";
    die();
  }
       
  // validation expected data exists
  if(!isset($_POST['first_name'])
    || !isset($_POST['last_name'])
    || !isset($_POST['email'])
    || !isset($_POST['organization'])
    || !isset($_POST['comments'])) {
      died('Not all fields of form were filled out.');       
  }
       
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email_from = $_POST['email'];
  $organization = $_POST['organization'];
  $comments = $_POST['comments'];
       
  $error_message = "";
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br>';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br>';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br>';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br>';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  $email_message = "Form details below.\n\n";
     
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
    
  $email_message .= "First Name: ".clean_string($first_name)."\n";
  $email_message .= "Last Name: ".clean_string($last_name)."\n";
  $email_message .= "Email: ".clean_string($email_from)."\n";
  $email_message .= "Organization: ".clean_string($organization)."\n";
  $email_message .= "Comments: ".clean_string($comments)."\n";
     
       
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);  
?>
<div id="contents">
  <p>Thank you for contacting us. We should get back to you within the next few school days.</p>
</div>
<?php
    die();
?>
