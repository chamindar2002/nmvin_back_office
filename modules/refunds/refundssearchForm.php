<?php
if(isset($_REQUEST['projectlist'])){
	$projectlist = $_REQUEST['projectlist'];
}

if(isset($_POST['project'])){
	$selectedproject = $_POST['project'];
} 

?>
<link rel="stylesheet" type="text/css" href="calendar/datepicker.css" /> 
<script type="text/javascript" src="calendar/datepicker.js"></script> 


<script type='text/javascript'>

</script>

<form method="post" Action="?m=refunds&a=RefundsList" name='frmsearch' id='frmsearch'>

<table class='formstable' border='0'>
	<tr><td>Select Project</td></tr>
	<tr><td>
		<select name='project' id='project' class='selectboxlarge' onchange='submitsearchform()'>
			<option value='0'></option>
			<?php 
				if(sizeof($projectlist) > 0){
					foreach($projectlist As $prl){
						$projectcode = $prl->getProjectcode();
						$projectname = $prl->getProjectname();
						if($projectcode == $selectedproject){
							echo "<option value=\"$projectcode\" selected>$projectname</option>";
						}
						else{
							echo "<option value=\"$projectcode\">$projectname</option>";
						}
					}
				}
			?>
		</select>
	</td></tr>	
</table>

</form>