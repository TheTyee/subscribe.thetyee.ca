<?php

	$title = "Your request has been cancelled";


  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>

		<h1>Your request has been cancelled.</h1>

		<div class="main-content">

					<p>
					<b>Your request has been cancelled and no action has been taken on your behalf.</b>
				</p>
				<p>
					Where would you like to go from here? You have several options:
				</p>
				<ul>
					<li>
						<a href="http://thetyee.ca">Go to the Tyee home page</a>
					</li>
					<li>
						<a href="http://thetyee.ca/About/Intro/">Find out more about the Tyee</a>
					</li>
				</ul>


		</div>


<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer/index.html";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
