<?php 
 include_once 'online/OnlineCustomerManager.php';
 
 $images_folder = "themes/nimavin_online_theme/images/";
 $defaultimage = "upcoming.png";
 $img_hw = "120px";
 $upcomingprojects = Array("Piliyandala"=>"$defaultimage",
                           "Athurugiriya"=>"$defaultimage");
 
 
 $registerdprojects = Array();
 
 if(isset($_REQUEST['upcprojectregistrations'])){
     $upcprojectregistrations = $_REQUEST['upcprojectregistrations'];
     foreach($upcprojectregistrations As $pr){
         $rgd_prname = $pr->getUpcprojectname();
         $upcprojectsregrefno = $pr->getRefno();
         $registerdprojects["$rgd_prname"] = $rgd_prname;
         //$registerdprojects["$rgd_prname"] = $upcprojectsregrefno;
     }
 }
 
 //var_dump($registerdprojects);
?>

<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />
<link href="themes/nimavin_online_theme/css/nimavin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/nimawinbackofficetheme/script/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  $(".btnsave").click(function(){
      
      m = validaterequired_fileds();
      if(m != "OK"){
         
           $('.errormesages').fadeIn(1000);
           $('.errormesages').html(m);
           $('.errormesages').fadeOut(5000);
          

      }else{
        document.frmupcprjcts.submit();
        //alert(checkboxesChecked());
    
      }
     
  });
});

function validaterequired_fileds(){
    
    var checkboxeschecked = checkboxesChecked();
    if(checkboxeschecked > 2){
        return "Error: Cannot Select More than two projects."
    }else if(checkboxeschecked == 0){
        return "Error: No projects Selected"
    }
    return "OK";
}

function submitSave(){
	var y = confirm("Notice: Are sure you want to confirm this reservation?");
	if(y == true){
		//document.frmaddcabinresv.submit();
		var checked = checkboxesOfThearapistsChecked();
		if(checked < 2){
			alert("Error: Need to SELECT TWO thearapists.");
		}else if(checked > 2){
			alert("Error: Cannot select more than TWO thearapists.");
		}else{
			document.frmaddcabinresv.submit();
			}	
	}
}


function checkboxesChecked(){
	var allCheckBoxes = document.getElementById('hdn_rcount');
	var count = 0;
        for(n=0;n<allCheckBoxes.value;n++){
           
                if(document.getElementById('chk_'+n).checked==true){
                    count++;
                }
        }
        return (count);
        
        
}
</script>
    

<div id="body_warp">
<div id="main_mnu">
<!--    <ul id="nav_1" name="nav_1">
      <li><a href="#">Home</a></li>
      <li><a href="#">My Details</a></li>
      <li><a href="#">My Payments</a></li>
      <li><a href="#">House Progress</a></li>
      <li><a href="#">Change Login Info</a></li>
    </ul>-->
    <?php include 'online/includefiles/submenu.php'; ?>
  </div>
  <div id="logo"></div>
  
  <div id='content'>

      <?php include 'online/includefiles/welcomenote.php';?>
      <div class="errormesages" id="validation_messages_div" style="display: none">&nbsp;</div>
      
      <div class="divroundedcorders5">
        <form method='post' action='?m=onlinecustomer&a=UpcomingProjects' name='frmupcprjcts' id='frmupcprjcts'>
<!--            <table class='formstable' border='1'>-->
            <table border='0' class='formstable'>
<!--                <tr><td colspan="<?php echo sizeof($upcomingprojects);?>"><h2>Upcoming Projects</h2></td></tr>
                -->
                <tr><td colspan='4'><h3>Reserve Blocks In Our Next Projects</h3></td></tr>
                <tr>
                <?php 
                $i = 0;
                    foreach($upcomingprojects As $key=>$value){
                        echo "<td align='center'>";
                        echo "<img src=\"$images_folder$value\" height='$img_hw' width='$img_hw'>";
                        echo "<br>";
                        echo "<h3>".  strtoupper($key)."</h3>";
                        
                        if($registerdprojects[$key] == $key){
                            echo "<input type='checkbox' id=\"chk_$i\" name=\"chk_$i\" value=\"$key\" checked='checked' disabled='disabled'></input>";
                        }else{
                            if(sizeof($registerdprojects)> 1){
                                echo "<input type='checkbox' id=\"chk_$i\" name=\"chk_$i\" value=\"$key\" disabled='disabled'></input>";
                            }else{
                                echo "<input type='checkbox' id=\"chk_$i\" name=\"chk_$i\" value=\"$key\"></input>";
                            }
                        }
                        
                        
                        echo "</td>";
                        $i++;
                    }
                ?>
                    <td width='80%'>&nbsp;</td>
                </tr>
                <tr>
                    <td align="center" colspan="<?php echo sizeof($upcomingprojects);?>">
                        <input type="button" name="btnsave" id="buttontype1" value="Save" class="btnsave">
                        <input type="hidden" name="hdn_rcount" id="hdn_rcount" value="<?php echo $i; ?>">
                    </td>
                </tr>
            </table>
            
            <?php 
                if(sizeof($upcprojectregistrations) > 0){
                    echo "<hr>";
                }
            ?>
            
            
            
            <table>
                
                <?php 
                if(sizeof($upcprojectregistrations) > 0){
                ?>
                <tr><td><strong>You have requested blocks in following projects. We will reserve a block(s) for you and notify when project(s) commences.</strong></tr>
                <tr><td><ul>
                <?php
                
                foreach($registerdprojects As $key=>$value){
                    $url_remove = "<a href='?m=onlinecustomer&a=UpProjectsRegstRemove&project=".urlencode($key)."'>Remove</a>";
                    echo "<li>$value &nbsp; $url_remove";
                
                }
                }
                //var_dump($registerdprojects);
                ?>
                </ul></td></tr>
                
            </table>
        </form>
      </div>
      
      
  </div>
  
</div>

<div id="shading"></div>