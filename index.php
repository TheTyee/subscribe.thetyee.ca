<?php

	$title = "Join The Tyee";
  $form = true;

  include("inc/header.php");
  //include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>


  <h1>Get The Tyee National Newsletter <span class="label">NEW!</span></h1>
  <form action="http://whatcounts.com/bin/listctrl" method="POST">
    <input type="hidden" name="slid" value="6B5869DC547D3D46CFC60A3DF69EE7EB" />
    <input type="hidden" name="cmd" value="subscribe" />
    <input type="hidden" name="goto" value="http://subscribe.thetyee.ca/success/" />
    <input type="hidden" name="errors_to" value="" />
    <input type="hidden" name="custom_pref_tyeenews_casl" value="1" />
    <input type="hidden" id="format_mime" name="format" value="mime" />

    <label class="email">Email: <input type="email" name="email" id="email" required aria-required="true"/></label>

  

    <label class="checkbox">
      <div role="presentation" class="form-checkbox">
        <div class="radio-buttons">
          <input type="radio" id="custom_pref_enews_national-yes" name="custom_pref_enews_national" value="1" /> Yes
         <input type="radio" aria-checked="true" id="custom_pref_enews_national-no" name="custom_pref_enews_national" value="0" checked /> No
        </div>
      </div>Send me the national newsletter 
      <div class="description">
     Sent out once a week, you’ll get our latest and best reporting on issues of national scope, plus occasional breaking story alerts. You'll also get early notice on Tyee events, news, promotions, partner messages and special initiatives.</div>
    </label>

  

   <input type="submit" value="Join">
    <div class="differentiator">
      <h2>How is this newsletter different from The Tyee’s other newsletters?</h2>
      <p>In 2013, Tyee readers raised over $100,000 for The Tyee to hire a reporter in Ottawa and to expand our national coverage. This brand new email newsletter will distill all of our very best stories from our reporter in Ottawa, and stories from our pool of national contributors. You’ll also be the first to know about breaking stories of national importance.</p>
      <p>We will continue to offer our regular newsletters, which deliver all the stories posted on The Tyee. To see a full list of our newsletters, click <a href="http://subscribe.thetyee.ca" target="_blank">here</a>.</p>
      <p>To support to The Tyee’s national reporting as a Tyee Builder, click <a href="http://support.thetyee.ca" target="_blank">here</a>.</p>
    </div>
  </form>





<?php
$js_footer = "inc/footer.php";
//$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
