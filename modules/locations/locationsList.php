<table class='datatable'>
	<tr>
		<td colspan='8'>
<!--		<a href='?m=locations&a=AddNewLocation'>Add</a>&nbsp;-->
<!--		<a href='#' onClick='showEditLocationForm()'>Edit</a>&nbsp;-->
<!--		<a href='#' onClick='deleteLocation()'>Delete</a>-->
		
		<ul class='submenu1'>
			<li><a href="?m=locations&a=AddNewLocation" title="Add New">+</a></li>
<!--			<li><a href="#" onClick='loadDetailsView()' title="More Details">&#157</a></li>-->
			<li><a href="#" onClick='showEditLocationForm()' title="Edit">--|-</a></li>
			<li><a href="#" onClick='deleteLocation()' title="Delete">x</a></li>
		</ul>
		</td>
	</tr>
	
	<tr><td><b>Location</b></td></tr>
 	<?php
		if(isset($_REQUEST['locationlist'])){
							
			$locationlist = $_REQUEST['locationlist'];
			
			if(sizeof($locationlist) != 0){
					$i = 0;
					$class = "";
					foreach($locationlist As $lst){
						$oddeven = $i%2;
									
						if($oddeven == 0){
							$class = "roweven";
						}else{
							$class = "rowodd";
						}
						echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
						echo "<td width='50%'>".
							 "<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$lst->getLocationcode()."># ".
							 $lst->getLocationname()."</td>";
						
						//echo "<td>".$lst->getLocationname()."</td>";
						
						echo "</tr>";
						
						$i++;
					}
			}
			else{
				echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
			}
		} 
		else{
			echo "<tr><td colspan='8' align='center'><h3>No records found</h3></td></tr>";
		}
	?>
	<tr>
		<td colspan='8' align='center'>
			<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
			<form method='post' action='?m=locations&a=EditLocation' name='frmeditlocation' id='frmeditlocation'>
				<input type='hidden' name="selectedrow" id="selectedrow" value="0">
			</form>
			
			<form method='post' action='?m=locations&a=DeleteLocation' name='frmdeletelocation' id='frmdeletelocation'>
				<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
			</form>
			
<!--			<form method='post' action='?m=customer&a=DeleteCustomer' name='frmdeletecustomer' id='frmdeletecustomer'>-->
<!--				<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">-->
<!--			</form>-->
		</td>
	</tr>
</table>