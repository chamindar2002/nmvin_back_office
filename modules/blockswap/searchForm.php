<?php
if(isset($_POST['projects'])){
	$selected = $_POST['projects'];
}


?>
<form method='post' action='?m=blockswap&a=NewBlockSwap' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
	<tr>
		<td>Select Project</td>
	</tr>
	
	<tr>
		<td width='20%'>
<!--<select name='projects' id='projects' class='selectboxlarge' onchange='submitsearchForm()'>-->
		<?php 
			printProjects_($selected);
		?>
<!--</select>-->		  				
		</td>

	</tr>
	
	<tr>
		<td>
			<input type='hidden' name='search' id='search' value='true'>
		</td>
	</tr>
</table>
</form>	