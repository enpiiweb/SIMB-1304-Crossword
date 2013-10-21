<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

	<!-- InstanceBegin template="Templates/acctemplate.dwt" -->

		<head>
			<!-- InstanceBeginEditable name="doctitle" -->
				<title>The Australian Crossword Club</title>
			<!-- InstanceEndEditable -->
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
			<link href="style.css" rel="stylesheet" type="text/css">
			<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable --><!-- #BeginHeadLocked "" -->
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
				<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
			<!-- #EndHeadLocked -->
		</head>

		<body bgcolor=#FFFFFF leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 onLoad="preloadImages();MM_preloadImages('../images/crossword_04.gif','../images/crossword_08.gif','../images/crossword_09.gif','../images/crossword_10.gif','../images/crossword_11.gif','../images/crossword_13.gif','../images/crossword_14.gif','../images/crossword_15.gif','../images/crossword_16.gif','../images/crossword_19.gif','../images/crossword_20.gif')">
			<!-- ImageReady Slices (crossword.psd) -->
			<table width=935 border=0 cellpadding=0 cellspacing=0>
				<tr>
					<td colspan=5><a href="/index.php"><img src="images/index_01.gif" alt="" width=935 height=138 border="0"></a></td>
				</tr>
				<tr>
					<td rowspan=12><img src="images/index_02.gif" width=37 height=364 alt=""></td>
					<td colspan=2><img src="images/index_03.gif" width=588 height=32 alt=""></td>
					<td><a href="join.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('join','','../images/crossword_04.gif',1)"><img src="images/index_04.gif" alt="join the club" name="join" width="132" height="32" border="0"></a></td>
					<td rowspan=12><img src="images/index_05.gif" width=178 height=364 alt=""></td>
				</tr>
				<tr>
					<td colspan="2" rowspan=11 valign="top"><!-- InstanceBeginEditable name="centralArea" --><?php 
		   if ($_POST) {

$message = "Email: ".$_POST['email']."\r\rName: ".$_POST['name']."\r\rAddress:\r".$_POST['address1']."\r".$_POST['address2']."\r".$_POST['address3']."\r".$_POST['postcode']."\r".$_POST['country']."\r\rEnrol?\r".$_POST['enrol']."\r\rComments:\r".$_POST['comments']."";

$email = $_POST['email'];
$subject = "ACC Subscription: ".$_POST['name'];
$headers = "From: $email";

  mail('pstreet@bigpond.net.au', $subject, $message, $headers);
  ?>
							<h4>Welcome aboard!</h4>
							<p>Thank you for your Application to enrol as a member of the Australian Crossword Club. We have now received your details by email. All you have to do now is make payment for your membership.</p>
							<p><strong>Subscribe to the Australian Crossword Club using Paypal</strong><br>
								For those with an Australian address wishing to receive <em>Crozworld</em> by mail (or anyone wishing to receive <em>Crozworld</em> by email), you can subscribe using Paypal - now it's just AU$40 until December 2013! Great value!<p>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but20.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<input type="hidden" name="cmd" value="_xclick-subscriptions">
<input type="hidden" name="business" value="info@crosswordclub.org">
<input type="hidden" name="item_name" value="ACC  annual subscription">
<input type="hidden" name="item_number" value="ACCannsubAust">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="AUD">
<input type="hidden" name="lc" value="AU">
<input type="hidden" name="a3" value="40">
<input type="hidden" name="p3" value="1">
<input type="hidden" name="t3" value="Y">
<input type="hidden" name="src" value="1">
<input type="hidden" name="sra" value="1">
							</form>
							</p>
							<p><strong>Subscribe to the Australian Crossword Club by cheque or direct deposit</strong><br>You can send a cheque or money order (payable in Australian dollars) and we will give you a subscription to the ACC for the remainder of 2012 and all of 2013 for just $40 to:</p>
							<blockquote>
								<p><b>The Secretary/Treasurer<br>
									</b><b>Australian Crossword Club<br>
									</b><b>PO&nbsp;Box 660, Wentworthville NSW 2145 Australia</b></p>
								<p>If you would like to credit our Bank a/c directly, Account details can be obtained from the Secretary.<b> e-mail: bevco4@bigpond.com</b></p>
							</blockquote>
							<p>Upon receipt of your subscription you will be sent the latest copy of the Club's monthly magazine <i>Crozworld</i> and you can start solving Australia's best crosswords straight away!</p>
							<p><b>Best of Luck with your solving!</b></p>
							<div align="left"></div>
							<div align="left"></div>
							<blockquote>
								<blockquote>
									<blockquote>
										&nbsp;</blockquote>
								</blockquote>
							</blockquote>
							<p>&nbsp;</p>
							<? } else {
	  echo "You did not fill in the form. Click <a href=subscribe.html>Join the Club!</a> to subscribe.";
	  }
	  ?><!-- InstanceEndEditable --></td>
					<td><a href="aboutus.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('aboutus','','../images/crossword_08.gif',1)"><img src="images/index_08.gif" alt="about us" name="aboutus" width="132" height="28" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="deef/index.php?c=1" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('news','','../images/crossword_09.gif',1)"><img src="images/index_09.gif" alt="latest news" name="news" width="132" height="15" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="crozworld.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('crozworld','','../images/crossword_10.gif',1)"><img src="images/index_10.gif" alt="CrOZworld" name="crozworld" width="132" height="15" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="compendium.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('compendium','','../images/crossword_11.gif',1)"><img src="images/index_11.gif" alt="compendium" name="compendium" width="132" height="15" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="win.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('win','','../images/crossword_13.gif',1)"><img src="images/index_13.gif" alt="win prizes" name="win" width="132" height="13" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="deef/index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('deef','','../images/crossword_14.gif',1)"><img src="images/index_14.gif" alt="deef" name="deef" width="132" height="22" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="classicoz.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('classic','','../images/crossword_15.gif',1)"><img src="images/index_15.gif" alt="classic oz" name="classic" width="132" height="22" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="ecrozwords.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ecrozwords','','../images/crossword_16.gif',1)"><img src="images/index_16.gif" alt="ecrozwords" name="ecrozwords" width="132" height="17" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="wordlists.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('wordlists','','../images/crossword_19.gif',1)"><img src="images/index_19.gif" alt="word lists" name="wordlists" width="132" height="26" border="0"></a></td>
				</tr>
				<tr>
					<td><a href="anagrams.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('anagrams','','../images/crossword_20.gif',1)"><img src="images/index_20.gif" alt="anagrams" name="anagrams" width="132" height="18" border="0"></a></td>
				</tr>
				<tr>
					<td><img src="images/index_21.gif" width=132 height=141 alt=""></td>
				</tr>
				<tr>
					<td colspan=5>
						<div align="center">
							<font face="Arial, Helvetica, sans-serif">Copyright &copy; 2005-12 The Australian Crossword Club</font><br>
							<a href="http://www.gravitonmedia.com.au" target="_blank">website by graviton</a></div>
					</td>
				</tr>
			</table>
			<!-- End ImageReady Slices -->
		</body>

	<!-- InstanceEnd -->

</html>