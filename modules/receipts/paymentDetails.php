<?php
include('banksArray.php');

$payemtsoptions = array();
$payemtsoptions[0] = "CASH";
$payemtsoptions[1] = "CHEQUE";
$payemtsoptions[2] = "BANK DEPOSIT";
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--<link href="calendar/CalendarControl.css" rel="stylesheet" type="text/css">-->
<!--<script src="calendar/CalendarControl.js" language="javascript"></script>-->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>-->
<script type="text/javascript" src="themes/script/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
$('#tabs div').hide();
$('#tabs div:first').show();
$('#tabs ul li:first').addClass('active');
$('#tabs ul li a').click(function(){ 
$('#tabs ul li').removeClass('active');
$(this).parent().addClass('active'); 
var currentTab = $(this).attr('href'); 
$('#tabs div').hide();
$(currentTab).show();
return false;
});
});
</script>

<div id="container">

	<div id="tabs">
		<?php
		echo "<ul>";
		foreach($payemtsoptions As $key=>$value){
		
			echo "<li><a href=\"#tab-$key\">$value</a></li>";
			
		}
		echo "</ul>";
		printDivs($payemtsoptions);

		function printDivs($payemtsoptions){
			foreach($payemtsoptions  As $key=>$value){
				echo "<div id=\"tab-$key\" >";
				//echo $value;
				if($key == 0){
					 cash();
				}else if($key == 1){
					include('chequeDetails.php');
				}
				else{
					bankDeposit();
				}
				echo "</div>";
			}
		}
		
		
		function cash(){
			echo "<table width='100%'><tr><td>Cash Amount</td></tr>
			<tr><td><input type='text' name='cashamt' id='cashamt' onkeyup='calculate(this.value)' style='width:50%' maxlenght='6'></td></tr></table>";
		}
		
		function bankDeposit(){
			global $banks;
			echo "<table width='100%'><tr><td>Bank Deposit Amount</td></tr>
			<tr><td><input type='text' name='dpstamt' id='dpstamt' onkeyup='calculate(this.value)' style='width:50%' maxlenght='6'></td></tr>";
			echo "<tr><td>Bank</td></tr>";
			echo "<tr><td><select name='casdepositbank' id='casdepositbank'>";
			
			foreach($banks As $key=>$value){
				echo "<option value=$key>$value</option>";
			}
//			for($i=0;$i<20;$i++){
//				echo "<option value=$i>$i</option>";
//			}

			echo "</select></td></tr></table>";
		}
		?>
	</div>
	
</div>

<style type="text/css">

#tabs {font-size: 90%; 	margin: 0px 0;}
#tabs ul {float: left; 	background: #C2E0FF; width:auto;	padding-top: 1px; margin-bottom:3px}
#tabs li {margin-left: 4px;	list-style: none;   background:#C2E0FF; border:1px solid #99C2FF;}
* html #tabs li {display: inline;}
#tabs li, #tabs li a {	float: left;}
#tabs ul li.active {background:#C2E0FF; border:1px dotted #99C2FF;}
#tabs ul li.active a {color: #ffffff;}
#tabs div {	float: left;background: #C2E0FF; clear: both;	padding: 5px;	min-height: auto;	border:1px #99C2FF dotted; 	width:98%;}
#tabs div h3 {margin-bottom: 12px;}
#tabs div p {line-height: 50%;}
#tabs ul li a {	text-decoration: none;	padding: 8px;	color: #000;	font-weight: bold;}
.thumbs {	float:left;	border:#000 solid 1px;	margin-bottom:20px;	margin-right:0px;}

</style>


<script type="text/javascript">
function calculate(str){
	//alert(str);
	//var totalpaid = Number(document.getElementById('totalpaid').value);
	var cashamt = Number(document.getElementById('cashamt').value);
	var deptamt = Number(document.getElementById('dpstamt').value);
	var chqetot = Number(document.getElementById('chqtotal').value);
	var totalpaid = 0; 
	totalpaid = (cashamt + deptamt + chqetot);
	document.getElementById('totalpaid').value = totalpaid.toFixed(2);
}

</script>