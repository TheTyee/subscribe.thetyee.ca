<?php

	$title = "Uh-oh! Looks like something went wrong.";


  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
<h1>Uh-oh! Looks like something went wrong.</h1> 
			<div class="main-content">
				<p>
					Where would you like to go from here? You have several options:
				</p>
				<ul>
					<li>
					<a href="javascript:history.go(-1)">Go back and try again</a>
					</li>
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
					<br />
						<br />
				
				</div>
		


				<?php
				$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
				if (file_exists($js_footer)){
				   include ($js_footer);
				}
				?>