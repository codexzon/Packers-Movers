<?php
    if(isset($_POST["submit"])){

   
	$name = $_POST["name"];
	$email = $_POST["email"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	$phone = $_POST["phone"];
	$rdate = $_POST["rdate"];
	$requirement = $_POST["requirement"];

	$date = date("M/d/Y");
	
	$from = "info@nationpackersmovers";
	$to = "nationalpackersandmoversinfo@gmail.com";
	$subject = "Contact Us Enquiry By : '.$email.'";
	$msg = '
	<html>
	<head>
	<title>Contact us Enquiry By '.$email.'</title>
	</head>
	<body>
	
	<div style="background-color:#2c559a; color:white; text-align:center; font-size:30px;">
		<p>Contact us Enquiry</p>
		<h3>National Packers And Movers</h3>
	</div>
	
	<table cellspacing="4" cellpadding="4" border="1" align="center">
		<tr>
			<td align="center">Name</td>
			<td align="center">'.$name.'</td>
		</tr>
		<tr>
			<td align="center">Email</td>
			<td align="center">'.$email.'</td>
		</tr>
		<tr>
			<td align="center">Moving From</td>
			<td align="center">'.$from.'</td>
		</tr>
		<tr>
			<td align="center">Moving to</td>
			<td align="center">'.$to.'</td>
		</tr>
		<tr>
			<td align="center">Phone Number</td>
			<td align="center">'.$phone.'</td>
		</tr>
		
		<tr>
			<td align="center">Moving Date</td>
			<td align="center">'.$rdate.'</td>
		</tr>
		<tr>
			<td align="center">Move Details</td>
			<td align="center">'.$requirement.'</td>
		</tr>
	</table>
	
	</body>
	</html>
	';
	
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From:".$from. "\r\n";
	
				
	
	if(mail($to, $subject, $msg, $headers)){
		// echo "<script>alert('Thank You Hope You Will Happy And Safe Journery.')</script>";
		echo "<script>window.location.href='index.html'</script>";
	}
}
?>