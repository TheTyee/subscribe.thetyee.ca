<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Get The Tyee in your inbox</title> <style>
	body { margin:0; padding:0; border:0; color:#1F1F1F; font-family:lucida grande,verdana,helvetica,sans-serif; }
	table { border:0; font-size: 12px; }
	p { margin-top : 0px; margin-bottom : 12px; line-height:1.3; }
	ul { list-style : square; margin-top : 0px; margin-bottom : 8px; }
	ol { margin-top : 0px; margin-bottom : 8px; }
	a:link, a:visited, a:hover, a:active { font-weight:normal; text-decoration:underline; color:#325DB5; }
	a:visited { color:#553885; }
	a:hover { text-decoration:none; }
	.loginBox { border: 1px solid #DEDEDE; }
	.loginHeader { color: #FFFFFF; background: #888888; font-size: 16px; }
	.mid { font-size: 11px; }
	.header { background: #B3B3B3; color: 000; font-weight: bold; }
	dl {
margin:0;
border:#999999 solid 1px;
width:35em;
}

dl dt {
width:9em;
margin:0 1em 0 0;
float:left;
padding:0 1em 0 .5em;
background-color:#E9E9E9;
border-right:1px dashed #999999;
text-align:right;
line-height:1.5em;
font-weight:bold;
color:#333333;
}

dl dd {
margin:0;
line-height:1.9em;
}
	</style> 

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
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0">
<table width="100%" height="100%" cellspacing="0" cellpadding="0">
<tr>
	<td align="center">
	<div style="padding-bottom:40px;padding-right:20px">
<a href="http://thetyee.ca">
<img src="http://thetyee.ca/ui/img/logo.png" alt="News and Views for British Columbia" width="263" height="89" border="0" />
</a>
</div>  
		<table width="500" cellspacing="0" cellpadding="15" bgcolor="#FFFFFF">
			<tr>
				<td class="loginBox">
					<table cellspacing="0" cellpadding="0">
			<tr>
				<td valign="top">
					&nbsp; 
				</td>
				<td>
<p<b>Get The Tyee in your inbox.</b></p>

<p>The Tyee publishes two free email headline services &#8211; the best way to stay on top of our award-winning independent journalism.</p>

<p>Our <b>daily version</b> is sent Monday &#8211; Friday mornings, serving up our content as fresh as it comes, and occasional contest or event announcements.</p>

<p>Our<b> weekly version</b> comes out on Mondays, giving you five days worth of Tyee content, as well as subscriber-only polls, comment of the week, inside scoop announcements and more.</p>

<p><a href="http://subscribe.thetyee.ca/privacy/" title="Read our privacy policy" target="_blank">Your privacy is important to us</a>. Your information will never be shared, rented or sold to any other third party.</p>
					<form onsubmit="return validate_form(this);" action="http://premiere.whatcounts.com/bin/listctrl" method="post">
					<input type="hidden" name="cmd" value="subscribe"> 
					<input type="hidden" name="goto" value="http://subscribe.thetyee.ca/success/">
					<input type="hidden" name="custom_Campaign" value="Subscribe page">
							<fieldset>
							<legend>
								Personal information
							</legend>
							<dl>
								<dt>
									Email <em style="font-size:9px;">(required)</em>
								</dt>
								<dd>
									<input type="text" name="email" size="25" value="<?php if (isset($_GET['email'])) { print $_GET['email']; } ?>">
								</dd>

								
								<dt>
									First Name
								</dt>
								<dd>
									<input type="text" name="first" size="25">
								</dd>
								<dt>
									Last Name:
								</dt>
								<dd>
									<input type="text" name="last" size="25">
								</dd>
								<dt>
									Postal Code 
								</dt>
								<dd>
									<input type="text" name="zip" size="25">
								</dd>
								<dt>
								Frequency
								</dt>
									<dd>
<input type="radio" name="slid" value="4EB045FEF697325863E6B518B65301747247B7DB1F2412A0" checked>Daily <input type="radio" name="slid" value="4EB045FEF697325830FFE4B43744DC0F4C9BCA62652FFD01">Weekly 
										</dd>
								<dt>
									Format
								</dt>
								<dd>
								<input type="radio" name="format" value="plain">Plain-text <input type="radio" name="format" value="html" checked>HTML 
								</dd>
							</dl>
							
							<br />
							<br />
							<p>
								<input type="submit" value="Subscribe right now!" >
							</p>
						</fieldset>
					</form>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
<br />
<br />
<br />
<br />
<br />
</td>
</tr>
</table>
<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/js/footer/index.html";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
</body>
</html>

