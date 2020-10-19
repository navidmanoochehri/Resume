<?php 
	$your_email = "yourmail@mail.com"
	$index_page = "http://webdesigndl.com";
if (isset($_POST['submit'])) {
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;		
	}
	$name = test_input($_POST['name']);
	$email = test_input($_POST['email']);
	$website = test_input($_POST['website']);
	$message = test_input($_POST['message']);

	if(!empty($name) || !empty($email) || !empty($website) || !empty($message) ) {
		$to = $your_email;
		$subject = "New email from: $email";
		$from = "From: $name<$email>"; 
		mail($to, $subject, $message, $from);
		header("location: $index_page");
	}
}
?>