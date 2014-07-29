<?php

	$title = "Forward to a friend";


  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>

<h1>Forward to a Friend</h1>

<p>You can forward this e-mail to five friends using the form below.</p>
	<form action="http://premiere.whatcounts.com/bin/ftaf" method="post">
	<input type="hidden" name="cmd" value="send"> 
	<input type="hidden" name="id" value="%%SUBSCRIBER_ID_TAG%%"> 
	<input type="hidden" name="goto" value="%%GOTO%%"> 
	<input type="hidden" name="multi_extended" value="1"> 
	<input type="hidden" name="subject" value="%%$sender_first%%%%if sender_first = " " then printdata sender_email%% thought you'd be interested in this."> 
	<input type="hidden" name="first_11" value=""> 
	<input type="hidden" name="first_12" value=""> 
	<input type="hidden" name="first_13" value=""> 
	<input type="hidden" name="first_14" value=""> 
	<input type="hidden" name="first_15" value=""> 

<p class="subject">
	Subject: %%$sender_first%%%%if sender_first = "" then printdata sender_email%% thought you'd be interested in this. 
</p>

<p>
	I want to forward this email to:
</p>
	
		
		<label for="email_1">Email: <input type="text" name="email_1" value=""> </label>
	
		<label for="email_2">Email: <input type="text" name="email_2" value=""> </label>

		<label for="email_3">Email: <input type="text" name="email_3" value=""> </label>
	
		<label for="email_4">Email: <input type="text" name="email_4" value=""> </label>
	
  	<label for="email_5">Email: <input type="text" name="email_5" value=""> </label>
	
		<p class="top">
			Enter a message (optional):
		</p>
		<textarea name="message"  rows="10" style="width:100%"></textarea>
	
		
			<input type="submit" name="submit" value="Send E-mail"> 
		
</form>



<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
