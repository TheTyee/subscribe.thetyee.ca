<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
   <title>You have asked to be unsubscribed: please confirm.</title> <style>
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
	</style> 
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0">
<table width="100%" height="100%" cellspacing="0" cellpadding="0" />
<tr>
<td align="center">
	<table width="500" / cellspacing="0" cellpadding="10" bgcolor="#FFFFFF">
	<tr><td align="center"><div style="padding-bottom:40px;padding-right:20px">
<a href="http://thetyee.ca">
<img src="http://thetyee.ca/ui/img/logo.png" alt="News and Views for British Columbia" width="263" height="89" border="0" />
</a>
</div>  </td></tr>
		<tr>
			<td class="loginHeader">
				&nbsp;<strong>You have asked to be unsubscribed. Please confirm.</strong> 
			</td>
		</tr>
	</table>
	<table width="500" / cellspacing="0" cellpadding="15" bgcolor="#FFFFFF">
		<tr>
			<td class="loginBox">
				<table cellspacing="0" cellpadding="0" />
		<tr>
			<td valign="top">
				&nbsp; 
			</td>
			<td>
				<form action="http://whatcounts.com/bin/listunsub" method="post">
					<input type="hidden" name="cmd" value="user"> <input type="hidden" name="id" value="%%$id%%"> <input type="hidden" name="goto" value="http://subscribe.thetyee.ca/unsubscribed/"> <input type="hidden" name="cancel" value="http://subscribe.thetyee.ca/cancelled/"> <input type="hidden" name="cancel_label" value="%%$cancel_button%%"> 
					<p>
						You have requested that %%$email%% be removed from this list. 
					</p>
					<br />
					<center>
						<input type="submit" name="submit_label" value="&#171; No, no: I've made a mistake!">&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit_label" value="Yup. I really want off this list &#187;"> 
					</center>
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
