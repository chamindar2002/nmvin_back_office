<?php
include_once('projectFunctions.php');

$locationcode = "";
$prname = "";

if(isset($_REQUEST['project'])){
	$project = $_REQUEST['project'];
	$projectcode = $project->getProjectcode();
	$locationcode = $project->getLocationcode();
	$prname = $project->getProjectname();
	$nofblocks = $project->getNofblocks();
}

?>

<form method='post' action="?m=projects&a=EditProject" name='frmeditproject' id='frmeditproject'> 
<table class='formstable'>
<tr>
	<td>Location</td>
</tr>
<tr>
	<td>
		<?php printLocations($locationcode);?>
	</td>
</tr>
<tr>
	<td>Project Name</td>
</tr>
<tr>
	<td>
		<input type="hidden" name='projectcode' id='projectcode' value="<?php echo $projectcode; ?>">
		<input type="text" name="projectname" id="projectname" value="<?php echo $prname;?>" class='reqtextboxmedium'>		
	</td>
</tr>
<tr>
	<td>Number Of Blocks</td>
</tr>
<tr>
	<td>
		<input type="text" name='nofblocks' id='nofblocks' value="<?php echo $nofblocks;?>" class='reqtextboxsmall' maxlength='3' readonly="readonly">
	</td>
</tr>

<tr>
	<td align='right'>
		<input type="button" name="save" id="save" value="Save" class="buttontype1" onclick="validateForm()"> &nbsp;
		<input type="button" name="cancel" id="cancel" value="Cancel" class="buttontype1" onclick="cancelForm()"> 
		<input type="hidden" name="confirmedit" id="confirmedit" value="true">
	</td>
</tr>


</table>
</form>