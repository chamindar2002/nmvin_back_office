<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<script src="themes/script/jquery.min.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nimawin Property Developers</title>


<style type="text/css">
#apDiv1 {
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	height:75px;
	z-index:1;
	background-image: url(themes/nimawinbackofficetheme/images/headerback.png);
}
#apDiv2 {
	position:absolute;
	left:-231px;
	top:1200px;
	width:462px;
	height:26px;
	z-index:2;
	text-align: center;
	margin-left: 50%;
}

#apDiv3 {
	position:absolute;
	left:5%;
	top:0px;
	width:151px;
	height:62px;
	z-index:3;
	background-image: url(themes/nimawinbackofficetheme/images/logo.png);
}
#apDiv4 {
	position:absolute;
	left:62%;
	top:15px;
	width:369px;
	height:16px;
	z-index:4;
	color: #FFF;
	text-align: right;
}

</style>
<link href="themes/nimawinbackofficetheme/css/nimavin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
<style type="text/css">
#jsddm {
	position:absolute;
	left:15%;
	top:50px;
    /*width:595px;*/
	width:auto;
	height:26px;
	z-index:7;
	color: #000;
	
	/*background-color: #000000;*/
}
#Maincontent {
	position:absolute;
	left:5%;
	right:5%;
	top:75px;
	width:90%;
	height:1120px;
	z-index:6;
	background-color: #FFFFF;
	
}
</style>
</head>

<body>
<div id="apDiv1"></div>
<div class="nimavin" id="apDiv2">Copyright © 2011  PINNACLE Technlogies.  All Rights Received.</div>
<div id="apDiv3"></div>
<!--<div class="nimavin" id="apDiv4"><a href='themes/downloads/nimavin_shortcut.zip'>XX</a></div>-->

<div class="nimavin" id="jsddm">

<?php if (UserManager::getInstance()->isUserLoggedIn() == True) {?>
  
    <?php include 'themes/menu/main_menu.html'; ?>
  
<?php }?>        
</div>


<div id="Maincontent">
	 <?php include_once("user/UserManager.php");?>		    
	 <?php if (UserManager::getInstance()->isUserLoggedIn() == True) {?>
	  
			     
	 <?php } else {				    
			include_once("user/LoginAction_form.php");
	 }?>
	 
	 
	 
	 <?php
	 // Display various messages
	  $messages = getMessages(true, true);
	  if ($messages."" != "") {
			 echo "<div id=\"messages\">$messages</div>";
	  }
	 ?>
								
	<!-- Main Content -->
	<?php 	echo $content;	?>	

</div>

<style type="text/css">
/* menu styles */
#jsddm
{	margin: 0;
	padding: 0;
	
}

	#jsddm li
	{	float: left;
		list-style: none;
		font: 11px Tahoma, Arial}

	#jsddm li a
	{	display: block;
	    background: #e6e6e6;
		padding: 5px 12px;
		text-decoration: none;
		border-right: 1px solid white;
		width: 60px;
		color: #101110;
		white-space: nowrap;
		
		}

	#jsddm li a:hover
	{	background: #97c6ee}
		
		#jsddm li ul
		{	margin: 0;
			padding: 0;
			position: absolute;
			visibility: hidden;
			border-top: 1px solid white}
		
			#jsddm li ul li
			{	float: none;
				display: inline}
			
			#jsddm li ul li a
			{	width: 90px;
				background: #97c6ee;
				color: #101110}
			
			#jsddm li ul li a:hover
			{	background: #5caaec}
			
			#c{text-align:center;}
</style>
<script src="themes/nimawinbackofficetheme/script/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}
		
		
		
		
		
	
		

$(document).ready(function()
{	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

document.onclick = jsddm_close;





</script>




</body>
</html>
