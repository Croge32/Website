<!DOCTYPE html>
<html>

	<?php include('skeleton.php'); ?>

	<div id="maincontentAsk">
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
  				addTo('orogers225@gmail.com')->
  				setFrom($_REQUEST['email'])->
  				setFromName($_REQUEST['name'])->
				setSubject($_REQUEST['subject'])->
  				setText($_REQUEST['message'])->
  				setHtml($_REQUEST['message']);

  				$sendgrid->
				smtp->
 					send($mail);

 				echo "<h2>Thank you for your submission! We will respond to your email shortly.</h2>";
  			}
			else
//if "email" is not filled out, display the form
			{
  				echo "<form id='askformphp' method='post' action='ask.php'>
  				Name: <input id='namebox' name='name' type='text'><br>
  				Email: <input id='emailbox' name='email' type='text'><br>
  				Subject: <input style='margin-bottom: 1em' name='subject' type='text'><br>
  				Message:<br>
  				<textarea name='message' rows='15' cols='118'>
  				</textarea><br>
  				<input type='submit'>
  				</form>";
  			}
		?>
	</div>
	</div>

	<?php include('footer.php'); ?>
	
	</body>
</html>
