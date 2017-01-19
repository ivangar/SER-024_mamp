<?php 
//REQUIRE FIREPHP AND INITIALIZE OBJECT
require_once($_SERVER['DOCUMENT_ROOT'] . '/FirePHPCore/FirePHP.class.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/FirePHPCore/fb.php');
session_start();
ob_start(); // Turn on output buffering. From this point output is stored in an internal buffer 
require_once('../../inc/php/membersite_config.php');

if(isset($_COOKIE['rememberme']) && !empty($_COOKIE['rememberme']) ){
	$fgmembersite->CheckCookie();
}

//If the user has not logged in, restrict access

if(!$fgmembersite->CheckLogin())
{	
	$fgmembersite->RedirectToURL("../../AccessDeny/deny_access.html");
	exit;
}


//if user wants to logout
if(isset($_POST['logout_submitted']))
{
	$fgmembersite->LogOut();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
<title>dxLink - So You Think You’re a Hypertension Expert?</title>
<script src="/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<link href="/css/styles.css" rel="stylesheet" type="text/css" />
<link href="../../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="/css/form-submit-button.css"/>
<link type="text/css" rel="stylesheet" href="/css/tabStyles.css"/>
<link type="text/css" rel="stylesheet" href="/css/Pretest/form.css"/>
<link type="text/css" rel="stylesheet" href="/css/Pretest/nova.css" />
<link type="text/css" rel="stylesheet" href="/programs/css/program_styles.css" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
<script type="text/javascript" src="/js/parsley.js"></script>
<script type="text/javascript" src="/browser/bowser.min.js"></script>
<script type="text/javascript" src="/js/hashchange.js"></script>
<script type="text/javascript" src="/js/tabScript.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="js/program.js"></script>
<script src="/js/jquery.blockUI.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49063752-3', 'auto');
  ga('send', 'pageview');

</script>
<style>
.ui-tooltip {
background: #f6f6f6;
border: 2px solid #969696;

}
.ui-tooltip {
border-radius: 10px;
box-shadow: 0 0 7px black;
font-family:Arial,Helvetica,sans-serif;
font-size:16px;
font-style: italic;
padding: 10px 20px;
}

.slides_qty{
font-family:Arial,Helvetica,sans-serif;
font-size:12px;
line-height: 10px;
}

</style>
</head>
<body class="gradient"> 
<table class="content" border="0" cellspacing="0">
  <tr valign="bottom">
    <td width="250" height="90" align="left" bgcolor="#FFFFFF" style="padding:0 0 10px 20px;" ><a href="/index.php"><img src="/images/dxLinkCU.jpg" width="147" height="42" align="left" alt="dxlink"/></a>
	</td>
	<td bgcolor="#FFFFFF" style="padding:0 0 5px 0;" align="right">
		<div style="display: inline-block;"><?php $fgmembersite->printLogout(); ?></div>
	</td>
  </tr>
</table>
<table class="content" border="0" cellspacing="0">
  <tr valign="bottom">
	  <td style="padding:0 0 5px 0;"><img src="/images/bannerCU.jpg" align="left" alt="Accredited Programs" width="1000px;"/>
	  </td>
  </tr>
</table>
<!-- NAV BAR TABLE -->
<table class="content" border="0" cellspacing="0">
  <tr align="center" valign="top">
    <td height="30" style="padding:0;background:#3B0CAF;">
		<ul id="MenuBar1" class="MenuBarHorizontal">
	      <li class="home"><a href="/index.php" class="update">Home</a></li>
	      <li><a href="" class="MenuBarItemSubmenu update">Programs</a>
	        <ul>
	          <li><a href="/accredited_programs.php" class="update">Accredited Programs</a></li>
	          <li><a href="/virtual_clinic.php" class="update">Virtual Clinic</a></li>
	          <li><a href="/congress_reports.php" class="update">Congress Reports</a></li>
	          <li><a href="/clinical_update.php" class="update">Clinical Update</a></li>
	        </ul>
	      </li>
	      <li><a href="/account.php" class="update">My Account</a></li>
	      <li><a href="/contact_us.php" class="update">Contact Us</a></li>
      	  <li><a href="http://www.cjdiagnosis.com/?ac=diagnosis" target="_blank" class="update">CJ Diagnosis</a></li>
      	  <li><a href="http://www.cjcme.com//?ac=cme" target="_blank" class="update">CJ CME</a></li>
     	  <li class="last"><a href="http://www.stacommunications.com/" target="_blank" class="update">STA HealthCare Communications</a></li>
	    </ul>
	</td>
  </tr>
  </table>
  <!-- NAV BAR ENDS HERE -->
   <!-- INNER 3-COLUMN STYLE TABLE  -->
  <table class="three-columns" border="0" cellspacing="0">
  <tr valign="top">
	  <!-- LEFT VERTICAL TABBED SECTION -->

		  <td style="padding: 20px 0 0 0;">
	          <section id="wrapper" class="wrapper">
	              <div id="v-nav">
					  <ul>
	                      <li tab="tab1" class="first current" >Home</li>
	                      <li tab="tab2" title="player1" >Introduction and Proposition #1<br>Dr. George Dresser and Dr. Ernesto Schiffrin</li>
	                      <li tab="tab3" title="player2" >Proposition #2<br>Dr. Sheldon Tobe and Dr. Ally Prebtani</li>
	                      <li tab="tab4" title="player3" >Proposition #3<br>Dr. Stella Daskalopoulou and Dr. Luc Trudeau</li>
	                      <li tab="tab5" title="player4" >Proposition #4<br>Dr. George Dresser and Dr. Sheldon Tobe</li>
					  </ul>
	                  <div class="tab-content" >
	                  	<?php  require_once('introduction.html'); ?>  
	                  </div>
	              	  <div class="tab-content" >
	                  		<?php  require_once('video1.html'); ?> 
	                  </div>
	                  <div class="tab-content" >
	                  		<?php  require_once('video2.html'); ?> 
	                  </div>
	                  <div class="tab-content" >
	                        <?php  require_once('video3.html'); ?> 
	                  </div>
	                  <div class="tab-content" >
	                        <?php  require_once('video4.html'); ?>    
	                  </div>
	              </div>
	          </section>
  	</td>
  </tr>
</table>
  <!-- END INNER 3-COLUMN TABLE  -->
  <table class="content" border="0" cellspacing="0">
  <tr>
    <td  height="35" colspan="3" valign="top" bgcolor="#FFFFFF" align="center">
   </td>
  </tr>
 </table>
  <!-- FOOTER TABLE -->
  <table class="content" border="0" cellspacing="0">
  <tr>
    <td style="padding:20px 50px 0 20px;display:inline-block;" height="55" valign="bottom" bgcolor="#FFFFFF" align="center">
		<? $fgmembersite->printCopyright(); ?>   
    </td>
    <td style="padding:0 0 10px 400px;display:inline-block;" valign="bottom" bgcolor="#FFFFFF" align="center">  
    	<? $fgmembersite->printTermsConditions(); ?>
   </td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1");
</script>
</body>
</html>
<?php ob_flush(); //This function will send the contents of the output buffer ?>