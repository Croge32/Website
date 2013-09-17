<!DOCTYPE html>
<html>

	<?php include('skeleton.php'); ?>

	<h2 id="askheader"> Questions? Comments? Reviews? Email us here.</h2>

	<div id="askform">
		<?php
			if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  			{
  //send email
  				$email = $_REQUEST['email'] ;
  				$subject = $_REQUEST['subject'] ;
  				$message = $_REQUEST['message'] ;
  				mail("croge32@gmail.com", $subject,
  				$message, "From:" . $email);
  				echo "Thank you for using our mail form";
			}
			else
//if "email" is not filled out, display the form
  			{
  				echo "<form method='post' action='ask.php'>
  				Email: <input id='emailbox' name='email' type='text'><br>
  				Subject: <input style='margin-bottom: 1em' name='subject' type='text'><br>
  				Message:<br>
  				<textarea name='message' rows='15' cols='123'>
  				</textarea><br>
  				<input type='submit'>
  				</form>";
  			}
		?>
	</div>

	<?php include('footer.php'); ?>
	
	</body>
</html>
