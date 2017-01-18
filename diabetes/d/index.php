<?php
/************************************************************************/
/* PHP Simple PasswordProtect v1.0                                      */
/* ===========================                                          */
/*                                                                      */
/*   Written by Steve Dawson - http://www.stevedawson.com               */
/*   Freelance Web Developer - PHP, MySQL, HTML programming             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* but please leave this header intact, thanks                          */
/************************************************************************/
##########################################################################
$password = "310714";  // Modify Password to suit for access, Max 10 Char.
##########################################################################

/*  code came from here: http://www.stevedawson.com/scripts/password-protect.php
    download here: http://www.stevedawson.com/download.php
    ** PHP Password Protect Script **
*/

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Free Downloads, courtesy of Mike Turco</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
P { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
TD { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
-->
</style>
</head>
<body>
<?php 
  print "<h1 align=\"center\">Free Downloads from <a href=\"https://miketurco.com/\">MikeTurco.com</a></h1>";
  print "<h2 align=\"center\">If you need the password, get it <a href=\"https://goo.gl/forms/YfA1t6rp9ORmmzr43\">here</a>.</h2>";
  
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->

  
<p align="center" style="margin-top:3em;font-weight:bold;font-size:12pt">
  <strong>These are all PDF files.</strong><br><br> Feel free to 
  <a href="https://goo.gl/forms/Kq7LZvhNFaU27SRE2">drop me a line</a><br> 
  if you'd like me to email these files to you.</p>     
                                                                                                      
<p align="center" style="margin-top:3em;font-weight:bold;font-size:12pt">
  <strong>Disclaimer:</strong> Mike Turco is not a doctor. There is no medical advice on this website.</p>     

<div style="width:75%;margin:auto">
  <p  style="margin:3em 0;font-size:12pt"><b>Diabetes Playing Cards:</b> A complete, full size deck of poker cards. Print them out on card stock and cut them out with 
  scissors or a razor blade. <a href="/d/cards.pdf">Download the Playing Cards</a></p>

  <p  style="margin:3em 0;font-size:12pt"><b>The Crash Diet Manifesto:</b> A full-out plan for a crash diet, with an eye on getting adequate nutrition. This is the 
  the most effective way to lose weight other other than weight loss surgery. <a href="/d/cards.pdf">Download The Crash Diet Manifesto</a></p>
  
  <p  style="margin:3em 0;font-size:12pt"><b>The ROI Workbook</b> This workbook goes along with a business I published some years back. People still ask for this file 
  so I'm providing it here.<a href="/d/roi-workbook.pdf">Download The ROI Workbook</a></p>

  <p  style="margin:3em 0;font-size:12pt"><b>The ROI FAQ:</b> This workbook goes along with a business I published some years back. People still ask for this file 
  so I'm providing it here. <a href="/d/ROI-FAQ.pdf">Download The the ROI FAQ</a></p>



</div>

<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
 // print "<br><br><p align=\"center\">Written by <a href=\"http://www.stevedawson.com\">SteveDawson.com</a></p>";
?>
<BR>

<!-- StatCounter -->
<script type="text/javascript">
var sc_project=3960159; 
var sc_invisible=1; 
var sc_security="7ab6a254"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="hit counter"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/3960159/0/7ab6a254/1/" alt="hit
counter"></a></div></noscript>
<!-- End StatCounter  -->

</body>
</html>
