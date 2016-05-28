<?php
require_once("SalesManager.php");

?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<script type='text/javascript'>

var gAutoPrint = true; // Flag for whether or not to automatically call the print function

function printSpecial()  {
   if (document.getElementById != null){
      var html = '<HTML>\n<HEAD>\n';
       html += "<link href=\"themes/nimawinbackofficetheme/css/formstyles.css\" rel=\"stylesheet\" type=\"text/css\" />";

      if (document.getElementsByTagName != null){
         var headTags = document.getElementsByTagName("head");
         if (headTags.length > 0)
            html += headTags[0].innerHTML;
      }
      
      html += '\n</HE' + 'AD>\n<BODY>\n';
//
//      html += "<table>";
//      html += "<tr><td align='left'><img src='themes/nimawinbackofficetheme/images/logo2.gif' width='36px' height='45px'></img></td></tr>";
//      html += "<tr><td align='left'>No. 187, First Floor, Ward Place, Colombo 7</td></tr>";
//      html += "<tr><td align='left'>Phone: (+94) 11 2695717,(+94) 11 2695728</td></tr>";
//      html += "<tr><td align='left'>Fax: (+94) 11 2667900</td></tr>";
//      html += "<tr><td align='left'>Email: nimawingreenpark@gmail.com</td></tr>";
//      html += "<tr><td align='left'>Skype: nimawin.greenpark</td></tr>";
//      //html += "<tr><td align='left'></td></tr>";
//      html += "</table>";
//	  html += "<h3>Block Allocation Confirmation Note</h3>";	
      
      var printReadyElem = document.getElementById("printReady");
      
      if (printReadyElem != null){
          html += printReadyElem.innerHTML;
      } else {
          alert("Could not find the printReady section in the HTML");
          return;
      }
      
      html += '\n</BO' + 'DY>\n</HT' + 'ML>';

      var printWin = window.open("","printSpecial");
      printWin.document.open();
      printWin.document.write(html);
      printWin.document.close();
      if (gAutoPrint)
        printWin.print();
      } else {
        alert("Sorry, the print ready feature is only available in modern browsers.");
      }
}




function changeColorToSelected(r){
	var rowselected = document.getElementById('tr'+r);
	var rowcount = document.getElementById('rowcount').value;

	for(i=0;i<=rowcount;i++){
		var oddeven = i%2;
		var row = "";
		if(oddeven == 0){	
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#DEE2E6';
					
			}else{
				rowselected.style.backgroundColor = '#CCCCFF'; //selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				document.getElementById('selectedrow_3').value = slctdrowRefno;
				document.getElementById('selectedrow_4').value = slctdrowRefno;
				document.getElementById('selectedrow_5').value = slctdrowRefno;
				document.getElementById('selectedrow_6').value = slctdrowRefno;
			}
		}
		else{
			if(i != r){
				row = document.getElementById('tr'+i);
				row.style.backgroundColor = '#F7FBFF';
			}
			else{
				rowselected.style.backgroundColor = '#CCCCFF';//selected
				var slctdrowRefno = document.getElementById('row'+r).value;
				document.getElementById('selectedrow').value = slctdrowRefno;
				document.getElementById('selectedrow_2').value = slctdrowRefno;
				document.getElementById('selectedrow_3').value = slctdrowRefno;
				document.getElementById('selectedrow_4').value = slctdrowRefno;
				document.getElementById('selectedrow_5').value = slctdrowRefno;
				document.getElementById('selectedrow_6').value = slctdrowRefno;
				}
		}
	}
	
	//rowselected.style.backgroundColor = 'red';
	//alert(rowvalue.id);
}


function loadSalesEdit(){
	var selectedRefno = document.getElementById('selectedrow');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		document.frmeditsales.submit();
	}
	
}

function loadSalesDetails(){
	var selectedRefno = document.getElementById('selectedrow_2');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		document.frmshowdetails.submit();
	}
}


function deleteSale(){
	var selectedRefno = document.getElementById('selectedrow_3');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		var s = confirm("Are you sure you want to delete this Sale");
		if(s==true){
			document.frmdeletesale.submit();
		}else{

			}
		
	}
}

function loadForceRefund(){
	var selectedRefno = document.getElementById('selectedrow_4');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		document.frmforcerefund.submit();
	}
}

function loadprintStatement(){
	var selectedRefno = document.getElementById('selectedrow_5');
	//alert(selectedRefno.value);
	if(selectedRefno.value != 0){
		document.frmprintstatement.submit();
	}
}


function loadloadrightoff(){
	var selectedRefno = document.getElementById('selectedrow_6');
	if(selectedRefno.value != 0){
		document.frmrightoffsale.submit();
	}
}


function showMessageDiv(msg,divid){
	//alert("saved success fully");
	document.write("<div class='"+divid+"' id='"+divid+"'>");
	document.write ("<strong>"+msg+"</strong>");
	document.write("</div>");

	setTimeout("hideMessageDiv('"+divid+"')", 3000);
}

function hideMessageDiv(divid){
	document.getElementById(divid).style.display = 'none';
	window.location = "index.php?m=sales&a=SalesList";
}
</script>


<?php
//session variables set @ DeleteCustomerAction_success.php page
	if(isset($_SESSION['deletesale_success'])){
		$message = $_SESSION['deletesale_success'];
		unset( $_SESSION['deletesale_success']);
		$divid = "message_success";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
	else if(isset($_SESSION['deletesale_failed'])){
		$message = $_SESSION['deletesale_failed'];
		unset($_SESSION['deletesale_failed']);
		$divid = "message_error";
		echo "<script type='text/javascript'>showMessageDiv(\"$message\",\"$divid\");</script>";
	}
?>

<table class='container'>
<tr><td>
	<table class='contenttable'>
	<tr>
	  	<td><strong>Sales</strong></td>
	 </tr>
	  <tr>
	  	<td>
	  		<?php include('searchSales.php');?>
	  	</td>
	  </tr>
	  
	</table>

</td></tr>

<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
	  		<?php include('salesList.php');?>
	  	</td>
	</tr>
	  
	</table>
</td></tr>
</table>