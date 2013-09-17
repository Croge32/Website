<!DOCTYPE html>
<html>

	<?php include('skeleton.php'); ?>

	<h2 id="askheader"> Questions? Comments? Reviews? Email us here.</h2>

	<div id="askform">
		<?php
			include ('vendor/autoload.php');

			$sendgrid = new SendGrid('app17627688@heroku.com', 'nfi772ms');
			
			$mail = new SendGrid\Mail();
			
			if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  			{
  //send email
 			$mail->
  				addTo('croge32@gmail.com')->
  				setFrom($_REQUEST['email'])->
				setSubject($_REQUEST['subject'])->
  				setText($_REQUEST['message'])->
  				setHtml($_REQUEST['message']);

  				$sendgrid->
				smtp->
 					send($mail);
  			}
			else
//if "email" is not filled out, display the form
			{
  				echo "<form method='post' action='ask.php'>
  				Email: <input name='email' type='text'><br>
  				Subject: <input name='subject' type='text'><br>
  				Message:<br>
  				<textarea name='message' rows='15' cols='40'>
  				</textarea><br>
  				<input type='submit'>
  				</form>";
  			}
		?>
	</div>

	<?php include('footer.php'); ?>
	
	</body>
</html>
