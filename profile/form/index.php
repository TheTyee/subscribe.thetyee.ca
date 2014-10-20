<?php
  var updateform = true;
?>

  <form action="http://whatcounts.com/bin/sie" method="POST">

  <input type="hidden" name="cmd" value="update">
<input type="hidden" name="eid" value="%%EID%%">
<input type="hidden" name="env" value="%%ENV%%">
<input type="hidden" name="goto" value="%%GOTO%%">
<input type="hidden" name="confirm_goto" value="%%CONFIRM_GOTO%%">
<input type="hidden" name="skip_confirm" value="1">

<label class="email">Email: <input type="email" name="email" id="email" required value="%%$email%%" aria-required="true"/></label>

 <label class="checkbox">
  <div role="presentation" class="form-checkbox">
    <div class="radio-buttons">
      <input type="radio" aria-checked="false" id="custom_pref_enews_weekly-yes" name="custom_pref_enews_weekly" value="1" %%if custom_pref_enews_weekly = "1" then print "checked" %% /> Yes
      <input type="radio" aria-checked="false" id="custom_pref_enews_weekly-no" name="custom_pref_enews_weekly" value="0" %%if custom_pref_enews_weekly = "0" then print "checked" %% /> No
    </div>
  </div>Send me the weekly newsletter
<div class="description">
  Every Monday you'll get an email listing all stories from the last week, as well as polls, top comments and contests.
</div>
</label>



<label class="checkbox">
  <div role="presentation" class="form-checkbox">
    <div class="radio-buttons">
      <input type="radio" aria-checked="false" id="custom_pref_enews_daily-yes" name="custom_pref_enews_daily" value="1" %%if custom_pref_enews_daily = "1" then print "checked" %%/> Yes
      <input type="radio" aria-checked="true" id="custom_pref_enews_daily-no" name="custom_pref_enews_daily" %%if custom_pref_enews_daily = "0" then print "checked" %% value="0" /> No
    </div>
  </div>Send me the daily newsletter
<div class="description">
  Every day you'll get an email with all stories from the last 24 hours.
</div>
</label>

<label class="checkbox">
  <div role="presentation" class="form-checkbox">
    <div class="radio-buttons">
    <input type="radio" id="custom_pref_enews_national-yes" name="custom_pref_enews_national" value="1" %%if custom_pref_enews_national = "1" then print "checked" %% /> Yes
    <input type="radio" aria-checked="true" id="custom_pref_enews_national-no" name="custom_pref_enews_national" value="0" %%if custom_pref_enews_national = "0" then print "checked" %% /> No
    </div>

  </div>Send me the national newsletter
<div class="description">
   Get our latest and best reporting on issues of national scope
</div>
</label>

<label class="checkbox">
  <div role="presentation" class="form-checkbox">
    <div class="radio-buttons">
    <input type="radio" aria-checked="false" id="custom_pref_tyeenews_casl-yes" name="custom_pref_tyeenews_casl" %%if custom_pref_tyeenews_casl = "1" then print "checked" %% value="1"/> Yes
      <input type="radio" aria-checked="true" id="custom_pref_tyeenews_casl-no" name="custom_pref_tyeenews_casl" value="0" %%if custom_pref_tyeenews_casl = "0" then print "checked" %% /> No
    </div>


  </div>Keep me up-to-date on Tyee news
<div class="description">
  We'll send you early notice on Tyee events, news, promotions and special initiatives.
</div>
</label>

<label class="checkbox">
  <div role="presentation" class="form-checkbox">
    <div class="radio-buttons">
    <input type="radio" aria-checked="false" id="custom_pref_sponsors-yes" name="custom_pref_sponsor_casl" %%if custom_pref_sponsor_casl = "1" then print "checked" %% value="1"/> Yes
      <input type="radio" aria-checked="true" id="custom_pref_sponsors-no" name="custom_pref_sponsor_casl" value="0" %%if custom_pref_sponsor_casl = "0" then print "checked" %% /> No
    </div>


  </div>Send me messages from select Tyee sponsors &amp; partners
<div class="description">
  You'll get, no more than once a month, messages from select sponsors or partners we think you might be interested in. Not into more email? We get it. Just know that simply having you on this list is a no-cost way to help fund more indie journalism.
</div>
</label>

<input type="submit" value="Update your Subscription" name="cmd"> <!-- <input type="submit" value="Cancel" name="cmd"> -->
</form>
</div>


<div role="footer">


<p><b>Your privacy is important to us</b>. Your information will never be shared, rented or sold to any other third party.</p>

<p><b>Your email sanity is also important to us</b>. All Tyee messages have unsubscribe options at the bottom.
</p>

<p><b>Questions?</b> Email <a href="mailto:subscribe@thetyee.ca">subscribe@thetyee.ca</a>.

<div class="address">
<a href="http://thetyee.ca">The Tyee</a><br />
PO Box 88484<br />
Vancouver, BC V6A 4A7<br />
</div>
</div> <!--footer -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://static.thetyee.ca/support/v1.3.2/ui/js/jquery.min.js"><\/script>')</script>

<script>

$(function() {
  $('input[type="radio"]').each(function(){
    if ($(this).prop('checked') && $(this).val() == "1") {
      $(this).parent().parent('.form-checkbox').addClass('checked');

    }
  })

  $('label.checkbox').each(function(){
    $(this).click(function(evt){
      var presentationDiv = $(this).children('.form-checkbox');
      evt.stopPropagation();
      evt.preventDefault();
      $(this).find('input[type="radio"]').not(':checked').prop("checked", true);
      presentationDiv.toggleClass("checked");

    })

})
})



</script>



<!--Google Analytics-->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-169022-1']);
    _gaq.push(['_setDomainName', 'thetyee.ca']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
