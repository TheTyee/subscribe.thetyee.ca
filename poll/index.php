<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<html>
<head>
<title>Thank you for casting your vote!</title>
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<!--<link href="http://enews.thetyee.ca/lists/styles/phplist2.css" type="text/css" rel="stylesheet">-->

<style>

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
<div id="container">
<div class="main">

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
		
	  	&nbsp;<strong>Thank you for casting your vote!</strong>
		
		</td>
	</tr>
	</table>
		
	<table width="500" / cellspacing="0" cellpadding="15" bgcolor="#FFFFFF">
	<tr>
	    <td class="loginBox">
		
		<table cellspacing="0" cellpadding="0" />
		<tr>
		    <td>
<p>We've received %%$poll_totalresponses%% responses so far to ths week's poll: %%$poll_description%%</p>
<p>Results so far:
<br />
%%$results%%
</p>
</div>
			
			</td>
		</tr>
		</table>
		
		</td>
	</tr>
	</table>

	
	<br /><br /><br />
	
	</td>
</tr>
</table>




</div>
<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/js/footer/index.html";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
</body>
</html>