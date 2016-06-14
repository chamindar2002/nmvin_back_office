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
  	echo "User: ". UserManager::getInstance()->getUser()->getLoginname()."<br/>";
  	echo "<a href=\"index.php?m=online&a=CustomerLogout\">Logout</a>";
  } else {
  	// Show the form only if the user has not logged in
?>
<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<form method="post" action="?m=online&a=CustomerLogin">
<div class="divroundedcorders">
<!--<table id="loginBox2" cellpadding="3px" border='0px'>-->
<table id="" cellpadding="3px" border='0px'>
    <tr><td rowspan='6'><img src='themes/nimawinbackofficetheme/images/key.png' width='100px'></td></tr>
       <tr><td>Login:</td></tr>
       <tr><td><input type="text" size="15" name="loginName" value="<?php echo $loginName; ?>"></td></tr>
       <tr><td>Password:</td></tr>
       <tr><td><input type="password" size="15" name="password" maxlength="8"></td></tr>
       <tr>
           <td>
               <input type="submit" name="submit" value="Login" class='buttontype1'>
               <input type="hidden" name="hdn_blockref" value="<?php echo $blockref; ?>">
               &nbsp; Or Register <a href="?m=online&a=CustomerRegister&blockref=<?php echo $blockref; ?>">Now</a>
           </td>
       </tr>
</table>
</div>        
</form>

<?php
} ?>


<style type='text/css'>
#loginBox2{
	margin-top:20px;
	width:25%;
	height:15%px;
	background:#G0E8FF;	border:3px solid #000000;
}
</style>