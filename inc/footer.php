</div> <!-- role=main -->


<div role="footer">
  <p><b>Your privacy is important to us</b>. Your information will never be shared, rented or sold to any other third party.</p>
  <p><b>Your email sanity is also important to us</b>. All Tyee messages have unsubscribe options at the bottom.
  <?php if($profilepage == false) { ?>
  You can unsubscribe there or change the frequency or preferences <a href="http://subscribe.thetyee.ca/profile/">here</a>.
  <?php } ?></p>
  <p><b>Questions?</b> Email <a href="mailto:subscribe@thetyee.ca">subscribe@thetyee.ca</a>.</p>

  <div class="address">
    <a href="http://thetyee.ca">The Tyee</a><br />
    PO Box 88484<br />
    Vancouver, BC V6A 4A7<br />
  </div>
</div> <!--footer -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://static.thetyee.ca/support/v1.3.2/ui/js/jquery.min.js"><\/script>')</script>

<?php if($form) { ?>

<script>

$(function() {

  <?php if ($updateform){ ?>

    $('input[type="radio"]').each(function(){
    if ($(this).prop('checked') && $(this).val() == "1") {
      $(this).parent().parent('.form-checkbox').addClass('checked');

    }
  })

  <?php } ?>
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


<?php } ?>

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

</body>
</html>
