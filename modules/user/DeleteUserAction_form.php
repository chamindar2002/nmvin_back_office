<?php
  if (isset($_POST['loginName'])) {
     $loginName = $_POST['loginName'];
  } else {
     $loginName = "";
  }
  
  if (isset($_POST['fullName'])) {
     $fullName = $_POST['fullName'];
  } else {
     $fullName = "";
  }
?>

<div id="Dregion">
        <div id="nifty">
            <b class="rtop">
            <b class="r1"></b>
                <b class="r2"></b>
                <b class="r3"></b>
                <b class="r4"></b>
             </b>
        
                <div id="Dregiondata" >

					<form method="post" action="?m=user&a=DeleteUser">
						<h3><b><font face="calibri"  size='5' color="#002EB8">Are you sure you want to delete <?php echo $_GET['lnm']."'s"; ?> account ?</font></b></h3>
						
						<input type="hidden" name="UID" value="<?php echo $_GET['id']; ?>">
						<table>					
						      <tr><td></td></tr>
						      <tr height="50"><td width="500" >					
						 	  <table>
						 	      <tr><td rowspan="3" width="75" align="center"> <img src="themes/exsalarytheme/images/delete-logo.png" width="50" height="37"/></td>
							      <td></td></tr>							 	   
							 	  <tr><td><font face="calibri"  size='3' color="#1d1e1e">By deleting this account, This particular user will not be getting into to the system.</font></td></tr>
						 	  </table>
						 	  </td>
						      </tr>	
						      <tr><td colspan="2" align="right"><input type="submit" name="ok" value="Delete account"><input type="submit" name="cancel" value="cancel"></td></tr>
						</table>
					</form>

                </div>
        
            <b class="rbottom">
            <b class="r4"></b>
                <b class="r3"></b>
                <b class="r2"></b>
                <b class="r1"></b>
            </b>
        </div>
</div>
