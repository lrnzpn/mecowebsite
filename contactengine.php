<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'anne.arrobio@obf.ateneo.edu'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>

<html>
<head></head>
<body>
<section id="mainDiv" class="container-fluid">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-5 rentImageDiv"></div>
		<div class="col-md-5 rentFormDiv">
			<div id="rentTagLine">LOOKING FOR TENTS FOR YOUR EVENT?</div>
			<form name="contactform" method="post" action="contactengine.php">
				<div class="form-group">
					<button type="submit" class="leaveMessageButton">Leave us a message!</button>
					<input type="name" name="fl_name" class="form-control formInput input-sm" placeholder="Name">
					<input type="email" name="email" class="form-control formInput input-sm" placeholder="E-mail">
					<input type="contact#" name="contact_details" class="form-control formInput input-sm" placeholder="Contact number">
					<textarea name="message" class="form-control formTextArea" cols="30" rows="7" placeholder="Message"></textarea>
				</div>
			</form>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</section>
</body>
</html>