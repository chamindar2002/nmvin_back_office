<?php
if(isset($_GET['a'])){
    $afile = $_GET['a'];
    //echo $afile;
    
//    if($afile == "OnlineGuestHome"){
//        $sp_hm = "spanvisited";
//    }else if($afile == "OnlineCustomerDetails"){
//        $sp_md = "spanvisited";
//    }else if($afile == "ChangeLoginInfo"){
//        $sp_cli = "spanvisited";
//    }else if($afile == "CustomerPayments"){
//        $sp_pmt = "spanvisited";
//    }
    
}



           

?>

<!--<div class="menu">
<ul>
<li><a href="index.php?m=onlinepayment&a=NewOnlinePayment&flag=none"><span id='spanvisited'>Home</span></a></li>
<?php 
//if(isset($_SESSION['ssn_blockrefno'])){
//    $br = $_SESSION['ssn_blockrefno'];
?> 
<li><a href="index.php?m=online&a=OnlineGuestHome&blockref=<?php echo $br;?>"><span id="<?php echo $sp_hm; ?>">Home</span></a></li>
<?php    
//}else{
?>
<li><a href="index.php?m=online&a=OnlineGuestHome"><span id="<?php echo $sp_hm; ?>">Home</span></a></li>
<?php 
//}
?>
<li><a href="index.php?m=onlinecustomer&a=OnlineCustomerDetails"><span id="<?php echo $sp_md; ?>">My Details</span></a></li>
<li><a href="index.php?m=onlinecustomer&a=CustomerPayments"><span id="<?php echo $sp_pmt; ?>">My Payments</span></a></li>
<li><a href="index.php?m=onlinecustomer&a=ChangeLoginInfo"><span id="<?php echo $sp_cli; ?>">Change Login Info</span></a></li>
<li><a href="index.php?m=online&a=CustomerLogout">Logout</a></li>
</ul>
<br style="clear:left"/>

</div>-->

<div class="divroundedcorders4">
<?php
    $userid = $_SESSION[SYSTEMNAME.'logid'];
    $cusomerobj = OnlineCustomerManager::getInstance()->getCustomerByUserId($userid);
    if(sizeof($cusomerobj) == 1){
        $cusomername = $cusomerobj->getFirstname()." ".$cusomerobj->getFamilyname();
        $utilized = $cusomerobj->getUtilized();
        $welcomestr = "<strong>Welcome &nbsp;$cusomername ! $utilized </strong>";
    }else{
        $cusomerobj = OnlineCustomerManager::getInstance()->getCustomerByUserId_2($userid);
        if(sizeof($cusomerobj) == 1){
            $cusomername = $cusomerobj->getFirstname()." ".$cusomerobj->getFamilyname();
            $welcomestr = "<strong>Welcome &nbsp;$cusomername ! $utilized </strong>";
        }
    }
    
    //echo $welcomestr;
?>
    
    
<?php 
    $userobj = OnlineCustomerManager::getInstance()->getUserByUserId($_SESSION[SYSTEMNAME.'logid']);
    if(sizeof($userobj) == 1){
        $uname = $userobj->getLoginname();
        
        $message = "<p> Dear <strong>$uname</strong>,<br><br>Thank you for registering with our site. This online service is still under development stage.<br>
           Therefore we sincerely appologise for any inconvieninces caused to you in trying to obtain our online services.
           <br>We are working hard to offer our overseas customers the best online service a property development company could offer.
           <br>Once this site is in full throttle you will be notified with an email.
           <br>You will then be able to enjoy the services within you fingertips which no other property development company in Sri Lanka has ever offered.
           <br><br>
           Thank you once again for you patience and corporation.
           <br>
           <br>
           <i><strong>The Staff At Nimavin Developers</strong></i>
           </p><hr>";
        
        //echo "<strong>Welcome &nbsp;$uname </strong> $message";
        echo $message;
    }
?>
</div>
    
<style type="text/css">

.menu{
/*    margin:0 auto;
    margin-top: 5px;
    width: 80%;
    background-color: #ffffff;
    font-family: sans-serif;
    font-size: 12px;
    border:1px solid #0097d7;
    border-radius:25px;    color: #199A19;      -moz-border-radius:5px;*/
font-family:sans-serif;
font-size:12px;
font-weight: bold;
color:#0097d7;
margin:0 auto;
margin-top:2px;
border:1px solid #0097d7;
padding:5px 5px;
background:#eef8fc;
width:80%;
border-radius:25px;
-moz-border-radius:5px;
}

.menu ul{
    margin: 0; padding: 0;
    float: left;}
 
.menu ul li{
    display: inline;}
 
.menu ul li a{
    float: left; text-decoration: none;
    color: #000000;
    padding: 1.5px 4px;
    background-color: #eef8fc; }
 
.menu ul li a:visited{
    color:  #000000;}
 
.menu ul li a:hover, .menu ul li .current{
    color: #0b75b2;
/*    background-color:#0b75b2;*/
}

#spanvisited{
    color: #ccc;
}
</style>