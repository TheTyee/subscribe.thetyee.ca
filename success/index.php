<?php

	$title = "You're almost there: just one more step!";
	$profilepage = true;

  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
	<h1>Thank you for subscribing</h1>

	<div class="main-content">
		<p>Your email has been added to our system and you will be e-mailed shortly with a welcome message.</p>

		<p>To ensure receive e-mails from The Tyee (thetyee@response.thetyee.ca) please check for this message now to ensure it hasn't gone to you junk folder.</p>

		<p>If the message arrived in your junk folder, please follow these instructions to at The Tyee to your address book.</p>
	</div>

<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
