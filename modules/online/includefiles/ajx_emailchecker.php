<?php
include_once '../../../wsbootstrap.php';
include_once '../OnlineCustomerManager.php';

if(!isset($_GET['q'])){
   echo "xxxxxx";
}else{
    $str = $_GET['q'];
    sleep(10);
    $userexistsobj = OnlineCustomerManager::getInstance()->checkIfUserreadyExists($str);
    
    if($userexistsobj != 1){
        echo "<input type='text' class='reqtextboxlarge' id='email' name='email'  value=\"$str\" placeholder='This Email address will be your Username' onblur='checkemailDuplications(this.value)'>";
    }else{
        echo "<input type='text' class='reqtextboxlarge' id='email' name='email'  value='' placeholder='A USER EXISTS WITH THE GIVEN EMAIL.' onblur='checkemailDuplications(this.value)'>";
    }
    
}
?>
