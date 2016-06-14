<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$images_path = "themes/nimavin_online_theme/images/";
$array_links = Array("Home"=>"home_e.png",
                     "Myinfo"=>"info_e.png",
                     "Paymnets"=>"paymets_e.png",
                     "Logininf"=>"logininfo_e.png",
                     "Upcoming"=>"upcoming_e.png",
                     "Logoff"=>"logout_e.png");

$height = "70px";
$width = "70px";

$break_limit = 3;
?>

<div class="divroundedcorders4">
<table width="100%" border='0'>
  <tr>
    <?php 

    //        $i = 1;
    //        foreach($array_links As $key=>$value){
    //            echo "<td align='center'><img src=\"$images_path$value\" height=\"$height\" width=\"$width\" title=\"$key\"></td>";
    //        }

    if (isset($_SESSION['ssn_blockrefno'])) {
      $br = $_SESSION['ssn_blockrefno'];
    ?> 
<td align='center'>
      <a href="index.php?m=online&a=OnlineGuestHome&blockref=<?php echo $br; ?>">
      <img src="<?php echo $images_path.$array_links["Home"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="Home">
      </a>
    </td>
    <?php
    } else {
    ?>
  <td align='center'>
          <a href="index.php?m=online&a=OnlineGuestHome">
          <img src="<?php echo $images_path.$array_links["Home"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="Home">    
          </a>
      </td>
    <?php
    }
    ?>
      
      
  <td align='center'>
         <a href="index.php?m=onlinecustomer&a=OnlineCustomerDetails">
             <img src="<?php echo $images_path.$array_links["Myinfo"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="My Details">    
         </a>
  </td>
      
  <td align='center'>
          <a href="index.php?m=onlinecustomer&a=CustomerPayments">
              <img src="<?php echo $images_path.$array_links["Paymnets"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="My Payments">    
          </a>
      </td>
      
  <td align='center'>
          <a href="index.php?m=onlinecustomer&a=ChangeLoginInfo">
              <img src="<?php echo $images_path.$array_links["Logininf"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="Change Login Details">    
          </a>
      </td>
      
 <td align='center'>
          <a href="index.php?m=onlinecustomer&a=UpcomingProjects">
              <img src="<?php echo $images_path.$array_links["Upcoming"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="Register with upcoming projects">    
          </a>
      </td>     
      
  <td align='center'>
          <a href="index.php?m=online&a=CustomerLogout">
              <img src="<?php echo $images_path.$array_links["Logoff"];?>" height="<?php echo $height; ?>" width="<?php echo $width; ?>" title="Logout">    
          </a>
      </td>
      
  </tr>
</table>
</div>