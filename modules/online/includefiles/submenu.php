<?php
if (isset($_GET['a'])) {
    $afile = $_GET['a'];
    //echo $afile;

    if ($afile == "OnlineGuestHome") {
        $sp_hm = "spanvisited";
    } else if ($afile == "OnlineCustomerDetails") {
        $sp_md = "spanvisited";
    } else if ($afile == "ChangeLoginInfo") {
        $sp_cli = "spanvisited";
    } else if ($afile == "CustomerPayments") {
        $sp_pmt = "spanvisited";
    } else if ($afile == "UpcomingProjects"){
        $sp_upc = "spanvisited";
    }
}
?>



<style type="text/css">
#main_mnu {
	position:absolute;
	left:290px;
	top:5px;
	width:681px;
	height:40px;
	z-index:12;
	-moz-border-radius: 5px;
	border-radius: 3px;
	background-color: #eef8fc;
        
        font-family:sans-serif;
        font-weight: bold;
        font-size: 12px;        
}

#nav_1, #nav_1 ul{
	margin:0;
	padding:0;
	list-style-type:none;
	list-style-position:outside;
	position: 0px;
	line-height:30px;
}

#nav_1 a{
	display:block;
	padding:0px 10px;
	color:#000;
	text-decoration:none;
	-moz-border-radius: 5px;
	border-radius: 3px;
/*	background-color: #FFFccc;*/
        background-color:#eef8fc;
}

#nav_1 a:hover{
	background-color:#09F;
	/* [disabled]color:#ED3581; */
	-moz-border-radius: 5px;
	border-radius: 3px;
	border-color: #CCC;
}

#nav_1 li{
	float:left;
	position:relative;
	padding:5px 5px;
}

#nav_1 ul {
position:absolute;
display:none;
width:30px;
top:30px;
}

#nav_1 li ul a{
width:20em;
height:auto;
float:left;
}

#nav_1 ul ul{
top:auto;
}	

#nav_1 li ul ul {
left:20em;
margin:0px 0 0 10px;
}

#nav_1 li:hover ul ul, #nav_1 li:hover ul ul ul, #nav_1 li:hover ul ul ul ul{
display:none;
}
#nav_1 li:hover ul, #nav_1 li li:hover ul, #nav_1 li li li:hover ul, #nav_1 li li li li:hover ul{
display:block;
}    
</style>

<ul id="nav_1" name="nav_1">
    <?php
    if (isset($_SESSION['ssn_blockrefno'])) {
        $br = $_SESSION['ssn_blockrefno'];
        ?> 
        <li><a href="index.php?m=online&a=OnlineGuestHome&blockref=<?php echo $br; ?>"><span id="<?php echo $sp_hm; ?>">Home</span></a></li>
        <?php
    } else {
        ?>
        <li><a href="index.php?m=online&a=OnlineGuestHome"><span id="<?php echo $sp_hm; ?>">Home</span></a></li>
        <?php
    }
    ?>

    <li><a href="index.php?m=onlinecustomer&a=OnlineCustomerDetails"><span id="<?php echo $sp_md; ?>">My Details</span></a></li>
    <li><a href="index.php?m=onlinecustomer&a=CustomerPayments"><span id="<?php echo $sp_pmt; ?>">My Payments</span></a></li>
    <li><a href="index.php?m=onlinecustomer&a=ChangeLoginInfo"><span id="<?php echo $sp_cli; ?>">Change Login Info</span></a></li>
    <li><a href="index.php?m=onlinecustomer&a=UpcomingProjects"><span id="<?php echo $sp_upc; ?>">Upcoming Projects</span></a></li>
    <li><a href="index.php?m=online&a=CustomerLogout">Logout</a></li>    
    <!--    <li><a href="#">My Details</a></li>
        <li><a href="#">My Payments</a></li>
        <li><a href="#">House Progress</a></li>
        <li><a href="#">Change Login Info</a></li>-->
</ul>