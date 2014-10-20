<?php

  $title = "Update your Tyee Subscription";
  $profilepage = true;
  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>



   <h1>Update your email subscription</h1>



    <div class="main-content">
        <p>
        To update your e-mail subscription preferences, enter your e-mail in the form below and press submit. From there:
        </p>

        <ul>
            <li>You will receive an e-mail from <b>info@thetyee.ca</b> with instructions on how to update your e-mail subscription preferences.
            </li>
            <li><b>If you do not receive the e-mail, please check your junk folder.</b> You should receive the e-mail within five minutes of submitting this form.
            </li>
            <li>If you still do not receive it, please send us a quick e-mail for support.
            </li>
        </ul>

        <form action="http://go.thetyee.ca/bin/sie" method="post" class="email-update">
        <input type="hidden" name="cmd" value="genkey" /> <input type="hidden" name="realm" value="media_thetyee" /> Email: <input type="email" name="email" required/> <input type="submit" value="Submit" />
        </form>
    </div>


<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
</body>
</html>
