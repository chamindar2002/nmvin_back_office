<?php
 //print_r($blockList);
?>

<form method='post' action='?m=housetransfer&a=NewOwnershipTranfer' name='frmnewblockswap' id='frmnewblockswap'>
	<table class='formstable' border='0'>
		<tr>
			<td>House To Be Tranfered</td>
			<td>&nbsp;</td>
			<td>New Owner</td>
		</tr>
		
		<tr>
			<td width='50%'>
                           
                                <?php  if(isset($blockList)){printblocks("swap_from",$blockList,0);}?>
                            
			</td>
			<td><b></b></td>
			<td width='50%'>
				<?php // printblocks("swap_to",$blockList,0)?>
                            NIC/Passport Number:
                            <input type="text" name="txt_nicno" id="txt_nicno" class="textboxmedium" value="">
                            &nbsp;
                            <input type="button" name="btncustomerLookup" id="btncustomerLookup" value="Search" onclick="customerLookup(txt_nicno.value)" class="buttontype1">
			</td>
		</tr>
		
		<tr>
			<td valign="top">
				<div id='divswapfrom'></div>
			</td>
			<td>&nbsp;</td>
			<td valign="top">
				<div id='divswapto'></div>
			</td>
		</tr>
		
		<tr>
			<td align='right' colspan='3'>
				<input type="hidden" name='confirmsave' id='confirmsave' value='true'>
				<input type='button' name='btncancel' id='btncancel' value='Cancel' class='buttontype1' onclick='cancelForm()'>
				&nbsp;
				<input type='button' name='btnsave' id='btnsave' value='Save' disabled="disabled" class='buttontype1' onclick='validateForm()'>
			</td>
		</tr>
	</table>
</form>