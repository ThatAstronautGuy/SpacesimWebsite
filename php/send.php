<?php
  $email_to = "ocespacesim@gmail.com";
       
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

<!DOCTYPE HTML>
<html>
	<head>
		<title>OCE SpaceSim</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="OCESS is a non-profit organization dedicated to informing and involving students from across Ontario about space and science.">
		<link href="../css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../css/stylesheet.css" rel="stylesheet"/>
		<link href="../css/footer.css" rel="stylesheet"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="menu-container"></div>
		<header class="header"></header>		
		
		<div class="container">
			<div class="page-header">
				<h1>Email Sent</h1>
			</div>
            <!-- Content goes in this div -->
            <div class="col-md-10 col-md-offset-1 well text-center">
                <p>Thank you for contacting us. We should get back to you within the next few school days.</p>
                <a href="../index.html" class="btn btn-primary">Back to Home</a>
            </div>
		</div>
		
		<footer class="footer"></footer>
	</body>
</html>

<?php
    die();
?>