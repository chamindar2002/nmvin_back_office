<?php
if(isset($_REQUEST['location'])){
	$location = $_REQUEST['location'];
	$locationname = $location->getLocationname();
	$locationcode = $location->getLocationcode();
}
?>


<form method='post' action='?m=locations&a=EditLocation' name='frmnewlocation' id='frmnewlocation'>
<table class='formstable' border='0'>
	<tr><td>
		Location Name
	</td></tr>
	
	<tr><td>
		<input type="text" name='locationname' id='locationname' class='textboxlarge' value="<?php echo $locationname;?>">
		<input type="hidden" name='locationcode' id='locationcode' value="<?php echo $locationcode; ?>">
		&nbsp;
		<input type="button" name='save' id='save' class='buttontype1' value="Save" onclick='validateForm()'>
		&nbsp;
		<input type="button" name='cancel' id='cancel' class='buttontype1' value="Cancel" onclick='cancelForm()'>
	</td></tr>
	
	<tr><td>
		<input type='hidden' value='true' name='confirmedit' id='confirmedit'>
	</td></tr>
</table>
</form>	