<!DOCTYPE html>
<html>

	<?php include('skeleton.php'); ?>

		<div id="maincontent">
			<p>FORM AREA WHICH WILL FORWARD TO DESIGNATED EMAIL ADDRESS IN ORDER TO ANSWER ANY ASKED QUESTIONS REGARDING PRICE, SERVICE, AND ANYTHING ELSE. FORM DOESN'T WORK CURRENTLY.</p>

			<form id="askform">

				Name: <input id="namespace" type="text/plain", name="namespace"><br>
				Phone Number: <input id="numspace" type type="text", name="numspace"><br>
				Ask your question here:<br> <textarea id="questionbox" rows="20" cols="126"></textarea><br>
				<input type="submit" value="Submit">
			</form>
		</div>
	
	<?php include('footer.php'); ?>
	
	</body>
</html>