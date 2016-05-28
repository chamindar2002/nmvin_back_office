<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Nimavin Developers</title>
        <link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
        <link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
        <style type="text/css">

            .txt_area{
                width:250px;
                height::32px;
            }
            .txt_bold {
                font-weight: bold;
            }
            .txtfield {
                font-family:sans-serif;
                font-size:12px;
            }

        </style>
    </head>
    <div id="body_warp">
        <div id="main_mnu">
            <?php include 'includefiles/submenu.php'; ?>
        </div>
        <div id="logo"></div>

        <div id='content'>

            <?php
            if (isset($_REQUEST['blockref'])) {
//$_REQUEST['blockref'];
//redirect("index.php?m=online&a=OnlineGuestHome");
                $blockref = $_REQUEST['blockref'];
                if ($blockref != 0) {

                    $_SESSION['ssn_blockrefno'] = $blockref;
                    ?>


                    <?php
                    include 'includefiles/welcomenote.php';
                    include 'includefiles/blockdetails.php';
                    
                    //echo "<p> This is a situation where a Registered customer returns to buy a house<br>This Guest Could have  bought one or more houses";
                    //echo "<br>";
                    
                    echo "<div class='divroundedcorders4'><a href='?m=onlinepayment&a=NewOnlinePayment&flag=none'>Reserve Now</a></div>";
                } else {
                    include 'includefiles/welcomenote.php';
                    
                    //echo "<p> This is a situation where customer returs via login page to view his current portfolio <a href=''>a</a>";
                }
                ?>

                <?php
            } else {
                include 'includefiles/welcomenote.php';
                //echo "<p> This is a situation where customer returs via login page to view his current portfolio";
            }
            ?>
            
            
            <?php include('includefiles/graphicalmenu.php');?>
        </div>
    </div>

    <div id="shading"></div>



</body>
</html>
