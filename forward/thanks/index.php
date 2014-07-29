<?php

	$title = "Thank you for being a part of The Tyee's community!";

  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>


		
	 <h1>Your e-mail has been forwarded</h1>
	<div class="main-content">
		
		<p><b>Thank you for being a part of The Tyee's community.</b></p>

		<p>Where would you like to go from here? You have several options:</p>

		<ul>
			<li>
				<a href="http://thetyee.ca">Go to the Tyee home page</a>
			</li>
			<li>
			<a href="http://www.thetyee.ca/Series">Go to the index for all our special series</a>
			</li>
			<li>
				<a href="http://thetyee.ca/About/Fellowshipfunds/">Learn about the Tyee's Charitable Fellowship Funds</a>
			</li>
			<li>
				<a href="http://thetyee.ca/About/Intro/">Learn about why The Tyee started</a>
			</li>
		</ul>
				
	</div>
			
		

		<?php
		$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
		if (file_exists($js_footer)){
		   include ($js_footer);
		}
		?>
