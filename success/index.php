<?php

	$title = "You're almost there: just one more step!";
	$profilepage = true;

  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
	<h1>Thank you for subscribing</h1>

	<div class="main-content">
		<p>Your email has been added to our system and you will be e-mailed shortly with a request to confirm your subscription.</p>
		<ul>
		<li>You must confirm your subscription if you want to receive e-mails from The Tyee (thetyee@response.thetyee.ca).</li>
		<br />
		<li>Please take a moment to do that now. You may want to look in your junk folder if you can't find the message at first.</li>
		</ul>
		<p>Also, if you'd like to ensure that e-mails from TheTyee.ca get to your inbox, please add us to your address book. If you use a free e-mail service like Hotmail or Yahoo!, this will help to ensure that future e-mails from The Tyee don't end up in your junk folder.</p>

	</div>

<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
