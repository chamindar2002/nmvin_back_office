<?php

?>


<form method='post' action='?m=locations&a=AddNewLocation' name='frmnewlocation' id='frmnewlocation'>
<table class='formstable' border='0'>
	<tr><td>
		Location Name
	</td></tr>
	
	<tr><td>
		<input type="text" name='locationname' id='locationname' class='textboxlarge' value="">
		&nbsp;
		<input type="button" name='save' id='save' class='buttontype1' value="Save" onclick='validateForm()'>
		&nbsp;
		<input type="button" name='cancel' id='cancel' class='buttontype1' value="Cancel" onclick='cancelForm()'>
	</td></tr>
	
	<tr><td>
		<input type='hidden' value='true' name='confirmsave' id='confirmsave'>
	</td></tr>
</table>
</form>	