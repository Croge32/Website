<!DOCTYPE html>
<html>

	<?php include('skeleton.php'); ?>

	<h2 id="askheader"> Questions? Comments? Reviews? Email us here.</h2>

	<div id="askform">
		<?php
			include ('vendor/autoload.php');
			$sendgrid = new SendGrid('app17627688@heroku.com', 'nfi772ms');
			$mail = new SendGrid\Mail();
			$mail->
  			addTo('croge32@gmail.com')->
  			setFrom('me@bar.com')->
			setSubject('Subject goes here')->
  			setText('Hello World!')->
  			setHtml('<strong>Hello World!</strong>');

  			$sendgrid->
			smtp->
 				send($mail);
		?>
	</div>

	<?php include('footer.php'); ?>
	
	</body>
</html>
