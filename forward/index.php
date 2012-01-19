<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Forward to a friend</title> 
	<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<style>
* {
	margin: 0;
	padding: 0;
}
body {
	font: normal 12px "Lucida Grande", verdana, arial, helvetica, sans-serif;
	text-align: center;
	background: #fff;
	color: #000;
}
#box {
  	width: 415px;
  	margin-left: auto;
  	margin-right: auto;
	text-align: left;
}
input {
	font: normal 11px verdana, arial, helvetica, sans-serif;
}
input.button {
	font-size: 12px;
}
ul {
	margin: 5px 0 0 30px;
}
ul li {	
	font-size: 11px;
}
p {
	margin: 8px 0;
	padding: 0;
	font-size: 11px;
}
p.subject {
	margin: 10px 0 0 0;
	font-size: 14px;
}
p.top {
	margin: 15px 0 8px 0;
}
td {
	padding: 3px;
	font-size: 11px;
}
h1 {
	margin: 30px 0 25px 0;
	color: #000;
	font: bold 18px "Lucida Grande", verdana, arial, helvetica, sans-serif;
}
h2 {
	margin: 20px 0 0 0;
	color: #fff;
	background: #c12f2f;
	padding: 5px 10px;
	font: bold 12px "Lucida Grande", verdana, arial, helvetica, sans-serif;
}
div.errorMessage {
	border: 1px solid #dc5858;
	padding: 8px 15px;
}
div.errorMessage p {
	margin: 10px 0 5px 0;
	font-size: 11px;
}
div.errorMessage li {
	margin-left: 12px;
	padding: 2px 0px 2px 10px;
	display: block;
	list-style-type: none;
	font-size: 11px;
	background:url("/images/icons/breadArrow.gif") no-repeat 0 2px;
}
</style> 
</head>
<body>
<div id="box">
	<form action="http://premiere.whatcounts.com/bin/ftaf" method="post">
	<input type="hidden" name="cmd" value="send"> <input type="hidden" name="id" value="%%SUBSCRIBER_ID_TAG%%"> <input type="hidden" name="goto" value="%%GOTO%%"> <input type="hidden" name="multi_extended" value="1"> <input type="hidden" name="subject" value="%%$sender_first%%%%if sender_first = " " then printdata sender_email%% thought you'd be interested in this."> <h1>Forward to a friend</h1> 
<p class="subject">
	Subject: %%$sender_first%%%%if sender_first = "" then printdata sender_email%% thought you'd be interested in this. 
</p>
<table summary="You can forward this e-mail to five friends using the form below." width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td>
		&nbsp;
	</td>
</tr>
<tr>
	<td colspan="2">
		<p class="top">
			<strong>I want to forward this email to:</strong> 
		</p>
	</td>
</tr>
<tr>
	<td class="clearfix">
		Name:&nbsp;&nbsp;<input type="text" name="first_11" value="" size="22"> 
	</td>
	<td class="clearfix">
		&nbsp;Email:&nbsp;<input type="text" name="email_1" value="" size="22"> 
	</td>
</tr>
<tr>
	<td class="clearfix">
		Name:&nbsp;&nbsp;<input type="text" name="first_12" value="" size="22"> 
	</td>
	<td class="clearfix">
		&nbsp;Email:&nbsp;<input type="text" name="email_2" value="" size="22"> 
	</td>
</tr>
<tr>
	<td class="clearfix">
		Name:&nbsp;&nbsp;<input type="text" name="first_13" value="" size="22"> 
	</td>
	<td class="clearfix">
		&nbsp;Email:&nbsp;<input type="text" name="email_3" value="" size="22"> 
	</td>
</tr>
<tr>
	<td class="clearfix">
		Name:&nbsp;&nbsp;<input type="text" name="first_14" value="" size="22"> 
	</td>
	<td class="clearfix">
		&nbsp;Email:&nbsp;<input type="text" name="email_4" value="" size="22"> 
	</td>
</tr>
<tr>
	<td class="clearfix">
		Name:&nbsp;&nbsp;<input type="text" name="first_15" value="" size="22"> 
	</td>
	<td class="clearfix">
		&nbsp;Email:&nbsp;<input type="text" name="email_5" value="" size="22"> 
	</td>
</tr>
<tr>
	<td colspan="2">
		<p class="top">
			<strong>Enter a message (optional):</strong> 
		</p>
		<textarea name="message" cols="50" rows="4" style="width:100%"></textarea>
	</td>
</tr>
<tr>
	<td>
		<p>
			<input type="submit" name="submit" value="Send E-mail"> 
		</p>
</td>
</tr>
</table>
</form>
</div>
<?php
$js_footer = "$_SERVER[DOCUMENT_ROOT]/inc/js/footer/index.html";
if (file_exists($js_footer)){
   include ($js_footer);
}
?>
</body>
</html>
