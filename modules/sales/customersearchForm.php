<?php
require_once("salesFunctions.php");

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

<form method='post' action='?m=sales&a=AddNewSale' name='frmsearch' id='frmsearch'>
<table class='formstable' border='0'>
	<tr>
		<td width='30%' valign='top'>Search Customer By:</td><td width='35%' valign='top'>Search For:</td>
		<td rowspan='2' width='35%' valign='top' align='center'><?php include('showlastaddedcustomerForm.php');?></td>
	</tr>
	
	<tr>
		<td valign='top'>

		<?php 
			printSelectCriteria2($selectedCriteria);
		?>
	  				  				
		</td>
	  				
		<td valign='top'>
			<input type="text" name='searchkeywordbox' id='searchkeywordbox' class='textboxlarge' value="<?php echo $searchfor;?>">
			&nbsp;
			<input type="submit" name="search" id="search" class='buttontype1' value='Search'>
			<input type='hidden' name='search' id='search' value='true'>
		</td>
	  	
	</tr>
</table>
</form>	