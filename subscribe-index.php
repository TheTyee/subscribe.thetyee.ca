<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Sign up for the Tyee's Monday Headlines</title> <style>
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

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0">
<table width="100%" height="100%" cellspacing="0" cellpadding="0">
<tr>
	<td align="center">
		<table width="500" cellspacing="0" cellpadding="15" bgcolor="#FFFFFF">
			<tr>
				<td class="loginBox">
					<table cellspacing="0" cellpadding="0">
			<tr>
				<td valign="top">
					&nbsp; 
				</td>
				<td>
				<img src="http://subscribe.thetyee.ca/media/sub.gif" alt="News and Views for British Columbia" border="0" usemap="#sub_Map" />
				<br /><br />
				<p>In addition to a summary of our weekly headlines, you'll be notified of subscriber-only contests, Tyee events and announcements.</p>
					<p><em>We'll look after your data carefully - <a href="http://subscribe.thetyee.ca/privacy/" target="_blank" title="The Tyee's privacy policy">we hate spam too</a>! However we'd like to keep in touch.</em>
					</p>
					<form action="http://whatcounts.com/bin/listctrl" method="post">
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
								<input type="submit" value="Subscribe right now!">
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
</body>
<map name="sub_Map">
<area shape="rect" alt="Visit the Geist Magazine Web site" coords="254,350,499,384" href="http://geist.com/" target="_blank">
<area shape="rect" alt="Visit the Twice Shy Web site" coords="255,317,499,349" href="http://www.twice-shy.com/flash_index.html" target="_blank">
<area shape="rect" alt="Check out the Red Cat Records Web site" coords="255,284,500,315" href="http://redcat.ca/" target="_blank">
<area shape="rect" alt="Visit the Navitas Naturals Web site" coords="255,246,499,281" href="http://www.navitasnaturals.com/" target="_blank">
<area shape="rect" alt="Visit the Tenfold Organic Web site" coords="2,354,243,383" href="http://www.tenfoldorganic.com/shop/product.php?productid=2002&cat=201&page=1" target="_blank">
<area shape="rect" alt="Check out some flip flops at Simple Shoes" coords="0,320,242,349" href="http://www.simpleshoes.com/ProductDetails.aspx?g=Women&categoryID=125&productID=9189&model=Stop+Global+Warming+Toepeeka" target="_blank">
<area shape="rect" alt="Visit the Cool Drive Pass Web site" coords="0,286,242,315" href="http://www.cooldrivepass.com/about/about.cfm" target="_blank">
<area shape="rect" alt="Visit W.E. Travel's Web site" coords="0,236,240,281" href="http://www.wetravel.net" target="_blank">
</map>
<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/js/footer/index.html";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
</body>
</html>
</html>
