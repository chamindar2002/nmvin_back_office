<?php
if(isset($_GET['block'])){
    $blockref = $_GET['block'];
}else{
    $blockref = "0";
}
?>


<?php
  if (isset($_POST['loginName'])) {
     $loginName = $_POST['loginName'];
  } else {
     $loginName = "";
  }
  
  if (UserManager::getInstance()->isUserLoggedIn()) {
  	// Print some message
  	//echo "User: ". UserManager::getInstance()->getUser()->getLoginname()."<br/>";
  	//echo "<a href=\"index.php?m=online&a=CustomerLogout\">Logout</a>";
        redirect("index.php?m=online&a=OnlineGuestHome&blockref=$blockref");
          
  } else {
  	// Show the form only if the user has not logged in
?>


<!--<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<title>Nimavin Developers</title>-->
<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/*Main Menu End*/
#body_warp {
	position:absolute;
	left:-500px;
	top:0px;
	width:1000px;
	height:600px;
	z-index:10;
	margin-left: 50%;
}
#family_pic {
	position:absolute;
	left:0px;
	top:184px;
	width:635px;
	height:379px;
	z-index:11;
	background-image: url(themes/nimavin_online_theme/images/family.png);
}
#user_name {
	position:absolute;
	left:25px;
	top:65px;
	width:72px;
	height:20px;
	z-index:12;
}
#user_name_text {
	position:absolute;
	left:25px;
	top:89px;
	width:220px;
	height:32px;
	z-index:13;
}
#password {
	position:absolute;
	left:25px;
	top:122px;
	width:76px;
	height:20px;
	z-index:14;
}
#password_text {
	position:absolute;
	left:25px;
	top:145px;
	width:220px;
	height:32px;
	z-index:15;
}
#login_btn {
	position:absolute;
	left:83px;
	top:200px;
	width:130px;
	height:40px;
	z-index:13;
}
#login {
	position:absolute;
	left:680px;
	top:60px;
	width:300px;
	height:300px;
	z-index:11;
	-moz-border-radius: 5px;
	border-radius: 3px;
	/* [disabled]display: none; */
	background-color: #FFFFFF;
	border:1px solid #CCC;
}
.txt_area{
	width:250px;
	height::32px;
	}
#newuser {
	position:absolute;
	left:117px;
	top:-24px;
	width:94px;
	height:20px;
	z-index:11;
	text-align: center;
}
.txt_bold {
	font-weight: bold;
}
#register_btn {
	position:absolute;
	left:215px;
	top:-25px;
	width:85px;
	height:20px;
	z-index:11;
}
#login_to_nimavin_header {
	position:absolute;
	left:15px;
	top:15px;
	width:270px;
	height:40px;
	z-index:11;
	background-image: url(themes/nimavin_online_theme/images/login_header.png);
}
#forgot_your_password {
	position:absolute;
	left:45px;
	top:175px;
	width:234px;
	height:23px;
	z-index:11;
	text-align: right;
}
#rememberme_option {
	position:absolute;
	left:99px;
	top:246px;
	width:95px;
	height:23px;
	z-index:11;
}
#cancel_btn {
	position:absolute;
	left:234px;
	top:275px;
	width:59px;
	height:19px;
	z-index:11;
}
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

.login_btn_img {
    border: none;
    width: 130px;
    height: 40px;
    background: url(themes/nimavin_online_theme/images/login.png) no-repeat top left;
	cursor:pointer;
}

.login_btn_img:hover {
	background-position: -130px 0;
}
</style>
</head>
<div id="shading"></div>
<script type="text/javascript">
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
</script>

<form method="post" action="?m=online&a=CustomerLogin">
<div id="body_warp">
<div id="family_pic"></div>
<div id="login">
  <div class="normal_fnt" id="user_name">Email</div>
  <div class="txt_area" id="user_name_text">
    
      <label for="textfield2"></label>
<!--      <input name="textfield" type="text" class="txt_area" id="textfield2" />-->
      <input type="text" size="15" name="loginName" class="txt_area" value="<?php echo $loginName; ?>">
    
  </div>
  <div class="normal_fnt" id="password">Password</div>
  <div id="password_text">
    
      <label for="textfield3"></label>
<!--      <input name="textfield2" type="text" class="txt_area" id="textfield3" />-->
      <input type="password" size="15" class="txt_area" name="password" maxlength="8">
    
  </div>
   <div id="login_btn"><input type="submit" name="submit" value="" class="login_btn_img" /></div>
  
  <div id="register_btn"><a href="?m=online&a=CustomerRegister&blockref=<?php echo $blockref; ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','themes/nimavin_online_theme/images/register_1.png',1)"><img src="themes/nimavin_online_theme/images/register_0.png" alt="" name="Image8" width="85" height="20" border="0" id="Image8" /></a></div>
  <div class="normal_fnt" id="newuser">New User?</div>
  <div id="login_to_nimavin_header"></div>
  <div class="txt_blue" id="forgot_your_password"><a href="?m=online&a=ResetPassword">Forgot your password ?</a></div>
  <div class="txt_gray_small" id="rememberme_option">
    
      <label>
        <input type="checkbox" name="checkbox" id="checkbox" />
        
      </label>
      Remember me
      
  </div>
  <div id="cancel_btn">
      <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','themes/nimavin_online_theme/images/cencel_00.png',1)"><img src="themes/nimavin_online_theme/images/cencel_01.png" name="Image9" width="59" height="19" border="0" id="Image9" /></a>
      <input type="hidden" name="hdn_blockref" value="<?php echo $blockref; ?>">
  </div>
</div>
<div id="logo"></div>
</div>

</form>
<!--</body>
</html>-->

<?php
} ?>