<?php
 //print_r($blockList);
?>

<form method='post' action='?m=blockswap&a=NewBlockSwap' name='frmnewblockswap' id='frmnewblockswap'>
	<table class='formstable' border='0'>
		<tr>
			<td>Swap From</td>
			<td>&nbsp;</td>
			<td>Swap To</td>
		</tr>
		
		<tr>
			<td width='50%'>
                            
				<?php  if(isset($blockList))printblocks("swap_from",$blockList,0)?>
                           
			</td>
			<td><b></b></td>
			<td width='50%'>
                            
				<?php  if(isset($blockList))printblocks("swap_to",$blockList,0)?>
                          
			</td>
		</tr>
		
		<tr>
			<td>
				<div id='divswapfrom'></div>
			</td>
			<td>&nbsp;</td>
			<td>
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