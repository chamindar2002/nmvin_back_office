<?php
include_once('projectFunctions.php');

$selected = 0;
if(isset($_POST['locations'])){
	$selected = $_POST['locations'];
}
?>
<form method='post' action='?m=projects&a=ProjectList' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
	<tr>
		<td>Select Location</td>
	</tr>
	
	<tr>
		<td width='20%'>

		<?php 
			printLocations($selected);
		?>
	  				  				
		</td>
<!--	  	<td>-->
<!--	  		<input type="submit" name="search" id="search" class='buttontype1' value='Search'>-->
<!--	  	</td>			-->
	</tr>
	
	<tr>
		<td>
			<input type='hidden' name='search' id='search' value='true'>
		</td>
	</tr>
</table>
</form>	