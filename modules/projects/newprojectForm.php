<?php
include_once('projectFunctions.php');
?>

<form method='post' action="?m=projects&a=AddNewProject" name='frmnewproject' id='frmnewproject'> 
<table class='formstable' border='0'>
<tr>
	<td>Location</td>
</tr>
<tr>
	<td>
		<?php printLocations(0);?>
	</td>
</tr>
<tr>
	<td>Project Name</td>
</tr>
<tr>
	<td>
		<input type="text" name="projectname" id="projectname" value="" class='reqtextboxmedium'>		
	</td>
</tr>
<tr>
	<td>Number Of Blocks</td>
</tr>
<tr>
	<td>
		<input type="text" name='nofblocks' id='nofblocks' value="" class='reqtextboxsmall' maxlength='9'>
	</td>
</tr>
<tr>
	<td align='right'>
		<input type="button" name="save" id="save" value="Save" class="buttontype1" onclick="validateForm()"> &nbsp;
		<input type="button" name="cancel" id="cancel" value="Cancel" class="buttontype1" onclick="cancelForm()"> 
		<input type="hidden" name="confirmsave" id="confirmsave" value="true">
	</td>
</tr>


</table>
</form>