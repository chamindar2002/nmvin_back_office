<?php
if(isset($_POST['projects'])){
	$selected = $_POST['projects'];
}
?>
<form method='post' action='?m=paymentplan&a=PaymentPlanList' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
	<tr>
		<td>Select Project</td>
	</tr>
	
	<tr>
		<td width='20%'>

		<?php 
			printProjects($selected);
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