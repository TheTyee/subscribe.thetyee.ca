<?php

	$title = "You're almost there: just one more step!";
	$profilepage = true;

  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
	<h1>Thank you for subscribing</h1>

	<div class="main-content">
		<p>Your email has been added to our system and you will be e-mailed shortly with a request to confirm your subscription.</p>
		<p>You must confirm your subscription if you want to receive e-mails from The Tyee (thetyee@response.thetyee.ca).</p>
		<p>Please take a moment to do that now. You may want to look in your junk folder if you can't find the message at first.</p>
	</div>
<script>
// Set UserIsaSubscriber cookie to prevent sub offers
Cookies.set("user_is_a_subscriber", "true", { expires: 365, domain: '.thetyee.ca' });
</script>

<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
