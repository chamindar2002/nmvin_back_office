<?php
require_once("customerFunctions.php");

$searchfor = "";
$selectedCriteria = "";
if(isset($_POST['searchkeywordbox'])){
	$searchfor = $_POST['searchkeywordbox'];
}
if(isset($_POST['searchcriteria'])){
	$selectedCriteria= $_POST['searchcriteria'];
}
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->

<form method='post' action='?m=customer&a=CustomerDetails' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
	<tr>
		<td width='30%'>Search by:</td><td>Search for:</td><td width='10%'>&nbsp;</td>
	</tr>
	
	<tr>
		<td>

		<?php 
			printSelectCriteria($selectedCriteria);
		?>
	  				  				
		</td>
	  				
		<td>
			<input type="text" name='searchkeywordbox' id='searchkeywordbox' class='textboxlarge' value="<?php echo $searchfor;?>">
			&nbsp;
			<input type="submit" name="search" id="search" class='buttontype1' value='Search'>
		</td>
	  				
		<td>	
			<input type='hidden' name='search' id='search' value='true'>
		</td>
	</tr>
</table>
</form>	