<?php

  $title = "Update your subscription settings – Success";
  $profilepage = true;

  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
  <div class="main-content">
  <h1>Your subscription has been updated.</h1>



    <p>If you had any problems or questions, contact us at <a href="mailto:subscribe@thetyee.ca">subscribe@thetyee.ca</a></p>
    <p>Thank you!</p>
  </div>



<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
