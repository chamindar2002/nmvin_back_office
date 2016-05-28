<table class='datatable'>
<tr>
	<td colspan='8'>
<!--		<a href='index.php?m=projects&a=AddNewProject'>Add</a>&nbsp;-->
<!--		<a href='#' onClick='editProject()'>Edit</a>&nbsp;-->
<!--		<a href='#' onClick='deleteproject()'>Delete</a>-->
		
		<ul class='submenu1'>
			<li><a href="index.php?m=projects&a=AddNewProject" title="Add New">+</a></li>
<!--		<li><a href="#" onClick='loadDetailsView()' title="More Details">&#157</a></li>-->
			<li><a href="#" onClick='editProject()' title="Edit">--|-</a></li>
			<li><a href="#" onClick='deleteproject()' title="Delete">x</a></li>
		</ul>
	</td>
</tr>

<tr><td><b>Location</b></td><td><b>Project Name</b></td><td><b>Blocks</b></td></tr>
<?php
if(isset($_REQUEST['projectlist'])){
	$projectlist = $_REQUEST['projectlist'];
	if(sizeof($projectlist) != 0){
		
		$i = 0;
		$class = "";
		foreach($projectlist As $list){
			$oddeven = $i%2;
			$locationname = "";
			if($oddeven == 0){$class = "roweven";}else{$class = "rowodd";}
			
			$locationcode = $list->getLocationcode();
			$locationobj = ProjectsManager::getInstance()->getLocationByPk($locationcode);
			if(isset($locationobj)){
				$locationname = $locationobj->getLocationname();
			}
			echo "<tr  id=\"tr$i\" class=\"$class\" onclick=\"changeColorToSelected($i)\">";
			echo "<td width='50%'>".
				 "<input type='hidden' name=\"row$i\" id=\"row$i\" value=".$list->getProjectcode().">";
			echo "$locationname </td>";
			echo "<td>".$list->getProjectname()."</td>";
			echo "<td>".$list->getNofblocks()."</td>";
			echo "</tr>";
		$i++;
		}
	}else{
		echo "<tr><td colspan='4' align='center'><h3>No Records Found</h3></td></tr>";
	}
	
}else{
	echo "<tr><td colspan='4' align='center'><h3>Select A Location</h3></td></tr>";
}
?>

<tr>
	<td colspan='8' align='center'>
		<input type='hidden' name="rowcount" id="rowcount" value="<?php echo $i;?>">
	
		<form method='post' action='index.php?m=projects&a=EditProject' name='frmeditproject' id='frmeditproject'>
			<input type='hidden' name="selectedrow" id="selectedrow" value="0">
		</form>
			
		<form method='post' action='index.php?m=projects&a=DeleteProject' name='frmsdeleteproject' id='frmsdeleteproject'>
			<input type='hidden' name="selectedrow_2" id="selectedrow_2" value="0">
		</form>
		
<!--		<form method='post' action='?m=customer&a=DeleteCustomer' name='frmdeletecustomer' id='frmdeletecustomer'>-->
<!--			<input type='hidden' name="selectedrow_3" id="selectedrow_3" value="0">-->
<!--		</form>-->
	</td>
</tr>

</table>