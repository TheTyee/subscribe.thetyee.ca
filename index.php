<?php

  $title = "Join The Tyee";
  $form = true;
  include("$_SERVER[DOCUMENT_ROOT]/inc/header.php");

?>


  <h1>Join The Tyee's mailing list</h1>
  <form action="http://whatcounts.net/bin/listctrl" method="POST">
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
          <input type="radio" aria-checked="false" id="custom_pref_enews_weekly-yes" name="custom_pref_enews_weekly" value="1"/> Yes
          <input type="radio" aria-checked="false" id="custom_pref_enews_weekly-no" name="custom_pref_enews_weekly" value="0" checked /> No
        </div>
      </div>Send me the weekly newsletter
      <div class="description">
          Every Monday you'll get an email listing all stories from the last week, as well as polls, top comments and contests. 
        </div>
    </label>

    <label class="checkbox">
      <div role="presentation" class="form-checkbox">
        <div class="radio-buttons">
          <input type="radio" aria-checked="false" id="custom_pref_enews_daily-yes" name="custom_pref_enews_daily" value="1"/> Yes
          <input type="radio" aria-checked="true" id="custom_pref_enews_daily-no" name="custom_pref_enews_daily" value="0" checked /> No
        </div>
      </div>Send me the daily newsletter
     <div class="description">
        Every day you'll get an email with all stories from the last 24 hours, as well as polls and contests.
      </div>
    </label>

    <label class="checkbox">
      <div role="presentation" class="form-checkbox">
        <div class="radio-buttons">
          <input type="radio" id="custom_pref_enews_national-yes" name="custom_pref_enews_national" value="1" /> Yes
         <input type="radio" aria-checked="true" id="custom_pref_enews_national-no" name="custom_pref_enews_national" value="0" checked /> No
        </div>
      </div>Send me the national newsletter 
      <div class="description">
     Sent out once a week, you’ll get our latest and best reporting on issues of national scope, plus occasional breaking story alerts. </div>
    </label>





<label class="checkbox" style="cursor:auto;">
          <div class="description">
     <em style="color:#4F7519;">You'll also get early notice on Tyee events, news, promotions, partner messages and special initiatives. What's a partner message? A partner could be a carefully considered paid sponsor, or a group that we think you'd be interested in hearing from. We send these no more than once a month, and you are free to opt out of receiving partner messages. Simply having you on this list is a no-cost way to help fund more indie journalism.</em> </div>
    </label>

 
          <input type="hidden"  id="custom_pref_sponsors-yes" name="custom_pref_sponsor_casl" value="1" checked /> 
 

   <input type="submit" value="Join">

  </form>




<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/footer.php";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
