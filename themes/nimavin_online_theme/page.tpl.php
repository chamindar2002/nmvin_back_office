<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nimavin Developers</title>
<link href="themes/nimawinbackofficetheme/css/nimavin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#shading {
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	height:561px;
	z-index:3;
	background-image: url(themes/nimavin_online_theme/images/backg.png);
}
#logo {
	position:absolute;
	left:0px;
	top:0px;
	width:300px;
	height:130px;
	z-index:6;
	background-image: url(themes/nimavin_online_theme/images/nimavin_logo.png);
}
#body_warp {
	position:absolute;
	left:-500px;
	top:0px;
	width:1000px;
	height:600px;
	z-index:10;
	margin-left: 50%;
        
        
}

#content{
   
    margin-top: 120px;
    margin-left: 12px;
    z-index:-1;
    
    height: 100%;
/*    background: #cccccc;*/
}


</style>
<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
</head>

<div id="shading"></div>
<div id="body_warp">
<div id="logo"></div>



</div>

<?php include_once("user/UserManager.php");?>

	 <?php if (UserManager::getInstance()->isUserLoggedIn() == True) {?>
            
			     
	 <?php } else {				    
			
                        if($actionClassName == 'CustomerRegisterAction' || $actionClassName == "ResetPasswordAction"){
                            
                        }else{
                            require_once("online/CustomerLoginAction_form.php");
                        }
                        
             //include_once("user/LoginAction_form.php");
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
</body>
</html>
