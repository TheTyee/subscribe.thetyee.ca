<html>
<head>
<script type="text/javascript">
function validate_email(field,alerttxt)
{
with (field)
{
apos=value.indexOf("@")
dotpos=value.lastIndexOf(".")
if (apos<1||dotpos-apos<2) 
  {alert(alerttxt);return false}
else {return true}
}
}
function validate_form(thisform)
{
with (thisform)
{
if (validate_email(email,"That doesn't appear to be a valid e-mail address. Please try again.")==false)
  {email.focus();return false}
}
}
</script>
</head>
<form action="http://subscribe.thetyee.ca/new-sub-form.php" onsubmit="return validate_form(this);">
		E-mail:	<input type="text" name="email" size="25">
</form>