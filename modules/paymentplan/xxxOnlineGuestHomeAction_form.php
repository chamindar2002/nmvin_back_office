<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<?php
if(isset($_REQUEST['blockref'])){
//$_REQUEST['blockref'];
//redirect("index.php?m=online&a=OnlineGuestHome");
    $blockref = $_REQUEST['blockref'];
    if($blockref != 0){
        
        $_SESSION['ssn_blockrefno'] = $blockref;
?>


<?php 
    include 'includefiles/welcomenote.php';
    include 'includefiles/blockdetails.php';
    echo "<p> This is a situation where a Registered customer returns to buy a house<br>This Guest Could have  bought one or more houses";
    echo "<br>";
    echo "<a href='?m=onlinepayment&a=NewOnlinePayment&flag=none'>Reserve Now</a>";
}else{
    include 'includefiles/welcomenote.php';
    echo "<p> This is a situation where customer returs via login page to view his current portfolio";
    
}
?>

<?php
}
else{
    include 'includefiles/welcomenote.php';
    echo "<p> This is a situation where customer returs via login page to view his current portfolio";
    
}
?>
