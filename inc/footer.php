</div> <!-- role=main -->


<div role="footer">
  <p><b>Your privacy is important to us</b>. Your information will never be shared, rented or sold to any other third party.</p>
  <p><b>Your email sanity is also important to us</b>. All Tyee messages have unsubscribe options at the bottom.
  <?php 
  if(isset($profilepage)):
    if($profilepage == false) { ?>
    You can unsubscribe there or change the frequency or preferences <a href="http://subscribe.thetyee.ca/profile/">here</a>.
    <?php } ?>
  <?php endif;?>
  </p>
  <p><b>Questions?</b> Email <a href="mailto:subscribe@thetyee.ca">subscribe@thetyee.ca</a>.</p>

  <div class="address">
    <a href="http://thetyee.ca">The Tyee</a><br />
    PO Box 28187 <br />
    West Pender St <br />
    Vancouver, BC V6C 3T7
  </div>
</div> <!--footer -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="https://static.thetyee.ca/support/v1.3.2/ui/js/jquery.min.js"><\/script>')</script>

<?php if($form) { ?>

<script>

$(function() {

  <?php if (isset($updateform)){ ?>

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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-169022-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
