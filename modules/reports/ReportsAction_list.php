<?php
 require_once("ReportsManager.php");
 
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>
function goBack(){
	window.location = "index.php?m=receipts&a=ReceiptsList";
}

function submitfrmrpt1(){
	var sdate = document.getElementById('start_dt_rpt1');
	var edate = document.getElementById('end_dt_rpt1');
	if(sdate.value == ""){
		alert("Error: Invalid [From] Date.");
		sdate.focus();
	}else if(edate.value == ""){
		alert("Error: Invalid [To] Date.");
		edate.focus();
		}
		else{
			document.frmcollection_report.submit();
		}
}

function submitfrmrpt2(){
	var monthselected = document.getElementById('overduemonths');
        var projectselected = document.getElementById('projectsrptoverdue')
	 if(monthselected.value == 0){
             alert("Error: Months Not Selected.");
	 }else if(projectselected.value == 0){
             alert("Error: Project Not Selected.");
         }
	 else{document.frmoverdue_report.submit();}
}

function submitfrmrpt3(){
	var projects = document.getElementById('projects');
	 if(projects.value == 0){
		alert("Error: Project Not Selected.");
	 }
	 else{document.frmprojectsummary_report.submit();}
}


function submitfrmrpt4(){
	var projects = document.getElementById('projects2');
	 if(projects.value == 0){
		alert("Error: Project Not Selected.");
	 }
	 else{document.frmprojectsummarydetails_report.submit();}
}


function submitfrmrpt5(){
	var projects = document.getElementById('projects3');
	 if(projects.value == 0){
		alert("Error: Project Not Selected.");
	 }
	 else{document.frmprojectpponly_report.submit();}
}

function submitfrmrpt6(){
	var projects = document.getElementById('projects4');
	 if(projects.value == 0){
		alert("Error: Project Not Selected.");
	 }
	 else{document.frmblockallocation_report.submit();}
}

function submitfrmrpt7(){
	var projects = document.getElementById('projects5');
	 if(projects.value == 0){
		alert("Error: Project Not Selected.");
	 }
	 else{document.frmblockallocationdetail_report.submit();}
}

function submitfrmrpt8(){
	document.frmreminderletters_report.submit();
}

function submitfrmrpt9(){
	var sdate = document.getElementById('start_dt_rpt9');
	var edate = document.getElementById('end_dt_rpt9');
	if(sdate.value == ""){
		alert("Error: Invalid [From] Date.");
		sdate.focus();
	}else if(edate.value == ""){
		alert("Error: Invalid [To] Date.");
		edate.focus();
		}
		else{
			document.frmcollectionbybank_report.submit();
		}
}

function submitfrmrpt10(){
	var projects = document.getElementById('projectsaddress_labels');
	if(projects.value == 0){
		alert("Error: Project Not Selected.");
	}
	else{document.frmaddressletters_report.submit();}
}
</script>


<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
			<strong>Reports</strong>
		</td>
	</tr>
	  <tr>
	  	<td>
	  		<?php	 include('reportsList.php');?>
	  	</td>
	  </tr>
	  
	</table>
</td></tr>

</table>