<?php
 require_once("SalesManager.php");
 include('salesFunctions.php');
?>
<!--<link href="themes/nimawinbackofficetheme/css/formstyles.css" rel="stylesheet" type="text/css" />-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>-->
<script type='text/javascript'>
function goBack(){
	window.location = "index.php?m=sales&a=SalesList";
}


$(document).ready(function(){


    $(".slidingDiv").hide();
	$(".show_hide").show();
	
	$('.show_hide').click(function(){
	$(".slidingDiv").slideToggle();
	});

});
</script>

<script language="JavaScript">
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
	      html += "<table>";
	      html += "<tr><td align='left'><img src='themes/nimawinbackofficetheme/images/logo2.gif' width='36px' height='45px'></img></td></tr>";
	      html += "<tr><td align='left'>No. 187, First Floor, Ward Place, Colombo 7</td></tr>";
	      html += "<tr><td align='left'>Phone: (+94) 11 2695717,(+94) 11 2695728</td></tr>";
	      html += "<tr><td align='left'>Fax: (+94) 11 2667900</td></tr>";
	      html += "<tr><td align='left'>Email: nimawingreenpark@gmail.com</td></tr>";
	      html += "<tr><td align='left'>Skype: nimawin.greenpark</td></tr>";
	      //html += "<tr><td align='left'></td></tr>";
	      html += "</table>";
		  html += "<h3>Block Allocation Confirmation Note</h3>";	
	      
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

</script>

<table class='container'>
<tr><td>
	
<tr><td>
	<table class='contenttable'>
	<tr>
		<td>
			<strong>Sale Entitlement Details</strong>
		</td>
	</tr>
	  <tr>
	  	<td>
	  		<?php include('saleInfo.php');?>
	  	</td>
	  </tr> 
	</table>
</td></tr>

</table>