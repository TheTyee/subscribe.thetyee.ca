<?php

$title = "You have successfully subscribed to this list";

include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>
        <h1>Your e-mail has been confirmed</h1>

        <div class="main-content">
                <p>
                        <b>Welcome to The Tyee headlines.</b>
                </p>
                <p>
                        Where would you like to go from here? You have several options:
                </p>
                <ul>
                        <li>
                                <a href="http://thetyee.ca">Start reading stories on The Tyee home page</a>
                        </li>
                        <li>
                        <a href="http://www.thetyee.ca/Series">Check out our recent special series</a>
                        </li>

                        <li>
                                <a href="https://support.thetyee.ca/">Support The Tyee by becoming a Tyee Builder</a>
                        </li>
                        <li>
                                <a href="http://thetyee.ca/About/Intro/">Learn more about The Tyee</a>
                        </li>
                                                                <li>
                                <a href="http://thetyee.ca/About/Funding/">Learn about The Tyee funding model</a>
                        </li>
                </ul>
        </div>

<script type="text/javascript" src="/scripts/js.cookie.js"></script>
<script>
// Set UserIsaSubscriber cookie to prevent sub offers
Cookies.set("user_is_a_subscriber", "true");
</script>

<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
    include ($js_footer);
}
?>
