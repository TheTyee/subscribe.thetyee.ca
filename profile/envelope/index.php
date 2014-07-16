<?php

  $title = "Update your subscription settings – The Tyee";
  $profilepage = true;
  $form = true;
  $updateform = true;


  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
<h1>Update your Subscription</h1>

         %%BODY%%



<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>


