<!--  HTML doc type should go here -->
<html>

<head>
    <title>Golden Bird Back office System</title>
    <link rel="shortcut icon" href="themes/gbbackofficetheme/images/logo-wbg.jpg">    
    <link rel="stylesheet" href="themes/gbbackofficetheme/style.css" type="text/css">      		
</head>

<body>
 
<!-- Header <div id="header"><?php //echo $appName; ?></div> -->
<table cellpadding="0" cellspacing="0" width="100%" border="0">
<tr>
	<td width="350" rowspan="2"><img src="themes/gbbackofficetheme/images/Company-logo.jpg" width="72" height="70" border="0" alt="PHP event calendar"></td>	  	 
	<td align="right" valign="top"><img src="themes/gbbackofficetheme/images/System-logo.jpg" width="178" height="70" border="0" alt="Softcomplex logo"></td>
</tr>
<tr>
	<td align="right" valign="bottom" nowrap>
	<b>
	|&nbsp;<a class="a" href="?m=aboutus&a=AboutUS&id=1">About&nbsp;This&nbsp;Software</a>&nbsp;
	|&nbsp;<a class="a" href="javascript:void(0)">Services</a>&nbsp;
	|&nbsp;<a class="a" href="javascript:void(0)">Download</a>&nbsp;
	|&nbsp;<a class="a" href="www.pinnacle.lk">Support</a>&nbsp;
	|&nbsp;<a class="a" href="?m=user&a=Logout">Logout</a>&nbsp;
	|
	</b>
	</td>
</tr>
<tr><td></td></tr>
</table>

<script language="javascript">
function toggleSubDisplay(elementId) {
	var element = document.getElementById(elementId);
	if (element.className == "rowNoDisplay") {
		element.className = "rowDisplay";
	} else {
		element.className = "rowNoDisplay";
	}
}
</script>
<!-- Navigation -->
<table cellpadding="0" cellspacing="0" border="0" bgcolor="#3b4f91" width="100%">
  <tr><td>
	  <table cellpadding="0" cellspacing="1" width="100%" border="0">
		
		    <tr><td class="header1" valign="top" nowrap colspan="2">Golden Bird Confeccenaries Back office System :Beta</td></tr>
					
			<tr><td valign="top" bgcolor="#FFFFFF" width="220"> 
			    <?php include_once("user/UserManager.php");?>		    
			    <?php if (UserManager::getInstance()->isUserLoggedIn() == True) {?>
				  <table cellspacing=2 cellpadding=3 width="100%" border="1">

					   <tr><td class=header2 valign="top"><a href="javascript:toggleSubDisplay('submanagementsub')">Management</a></td></tr>
					   <tr id="submanagementsub" class="rowNoDisplay">
					      <td>  
	    		   	           <li class="leaf"><a href="javascript:toggleSubDisplay('FnishGoodsStoresTrans')" title="Finish Goods Products Stores">FINISH GOODS STORES</a></li>
						       <ul id="FnishGoodsStoresTrans" class="rowNoDisplay">  						       		
						       		<li class="leaf"><a href="?m=grn&a=AddNewGrnInternalPr" title="Add New Goods Receved Note (In-house Products)">Add New GRN (Internal)</a></li>
						       		<li class="leaf"><a href="?m=grn&a=EditGrnInternal" title="Edit Goods Received Note (In-house Products)">Edit GRN (Internal)</a></li>
						    		<li class="leaf"><a href="?m=grn&a=GrnOutList" title="Add New Goods Receved Note (3rd Party Products)">Add New GRN (External)</a></li>
						    		<li class="leaf"><a href="?m=grn&a=EditGrnOutList" title="Edit Goods Received Note (3rd Party Products)">Edit G.R.N (External)</a></li>
						    		<li class="leaf"><a href="?m=grn&a=AuthoriseGrn" title="List All Finish Goods GRN">List G.R.N's</a></li>
						       </ul>					   
					           
					   	       <li class="leaf"><a href="javascript:toggleSubDisplay('BackoffsysTrans')" title="Onetime Entries">BACK OFFICE</a></li>                               			   	       					   	       
			    	   		   <ul id="BackoffsysTrans" class="rowNoDisplay">			    	   		       
					    	       	<li class="leaf"><a href="?m=newmorder&a=NewMorder" title="Add New Master order">New Master Order</a></li>
					    	       	<li class="leaf"><a href="?m=masterorder&a=ListMasterOrder" title="List of orders on a given date">List Orders</a></li>					    	   
					    	       &nbsp;
					    	       	<li class="leaf"><a href="?m=masterorder&a=ProductSummary" title="summary list of products on a given date">List Product Summary</a></li>
					    	       	&nbsp;					    	       		
					    	       	<li class="leaf"><a href="?m=invoice&a=InvoiceList" title="Define Batch">New Invoice</a></li>
					    	       	<li class="leaf"><a href="?m=invoice&a=PrintInvoiceByRoute" title="Define Batch">Print Invoices</a></li>
					    	       	&nbsp;
					    	       	<li class="leaf"><a href="?m=debitcredit&a=AddDebitCredit" title="Generate Credit/Debit Notes">Crdit/Debit Notes</a></li>
					    	       	&nbsp;
					    	       	<li class="leaf"><a href="?m=reciepts&a=AddNewReceipt" title="Generate Credit/Debit Notes">Add New Receipt</a></li>
					    	       	<li class="leaf"><a href="?m=reciepts&a=ListReceipt" title="Generate Credit/Debit Notes">List Receipts</a></li>
					    	   </ul>
					      </td>
					   </tr>
					   
					   <tr><td class=header2><a href="javascript:toggleSubDisplay('systemsub')">System Administration</a></td></tr>
					   
					   <tr id="systemsub" class="rowNoDisplay"><td>
	    		   	           <li class="leaf"><a href="javascript:toggleSubDisplay('FnishGoodsStores')" title="Finish Goods Products Stores">FINISH GOODS STORES</a></li>					   
						       <ul id="FnishGoodsStores" class="rowNoDisplay">
						            
						            <li class="leaf"><a href="?m=productsupplier&a=AddNewProductSupplier" title="Add New Therd Party Products Suppliers To Master File">Add New Supplier</a></li>
									<li class="leaf"><a href="?m=productsupplier&a=ListProductSupplier" title="List All Therd Party Products Suppliers">List Suppliers</a></li>
								  							  									
									<li class="leaf"><a href="?m=category&a=AddNewCategory" title="Add New Finish Goods Product Category to File">Add New Category</a></li>
									<li class="leaf"><a href="?m=category&a=ListCategory" title="List All Finish Goods Product Categories">List Category</a></li>
								  	<li class="">&nbsp;</li>
									<li class="leaf"><a href="?m=subcategory&a=AddNewSubCategory" title="Add New Finish Goods Product Sub Category to Master File">Add New Sub Category</a></li>
									<li class="leaf"><a href="?m=subcategory&a=ListSubCategory" title="List All Finish Goods Product Sub Categories">List Sub Category</a></li>
									<li class="leaf">&nbsp;</li>
									<li class="leaf"><a href="?m=products&a=AddNewProduct" title="Add New Finish Goods Product To Master File">Add New Product</a></li>
									<li class="leaf"><a href="?m=products&a=ListProduct" title="List All Products">List Products</a></li>
									<li class="leaf">&nbsp;</li>
									<li class="leaf"><a href="?m=fgrates&a=AddFgRates" title="List All Products">Define Product Rates</a></li>									
						       </ul>					   
					   
					   	       <li class="leaf"><a href="javascript:toggleSubDisplay('Backoffsys')" title="Onetime Entries">BACK OFFICE</a></li>
			    	   		 		<ul id="Backoffsys" class="rowNoDisplay">
					    	       		<li class="leaf"><a href="?m=ingredients&a=AddNewIngredients" title="Add New Prodction Formula">Ingredients</a></li>
					    	       		<li class="leaf"><a href="?m=ingredients&a=ListIngredients" title="Add New Prodction Formula">List Ingredients</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=batch&a=AddNewBatch" title="Define New Batch">Define New Batch</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=deliveryroute&a=AddNewRoute" title="Add New Delivary Route">Add New Delivery Route</a></li>
					    	       		<li class="leaf"><a href="?m=deliveryroute&a=ListDelRoutes" title="List All Delivary Roots">Delivery Route List</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=agent&a=AddNewAgent" title="Add New Agent to Master File">Add New Agent</a></li>
					    	       		<li class="leaf"><a href="?m=agent&a=ListAgent" title="List All The Agents in Master File">List Agent</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=loan&a=AddNewLoan" title="Grant New Loan Facility to Agent">Grant New Loan Facility</a></li>
					    	       		<li class="leaf"><a href="?m=loan&a=ListLoan" title="List Loans Agent Wise">List Loans</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=lease&a=AddNewLease" title="Grant Leasing Facility to Agent">New Leaseing Facility</a></li>
					    	       		<li class="leaf"><a href="?m=lease&a=ListLease" title="List All The Leasing Facilities">List Leasings</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=lotherdeductions&a=AddNewOtherdeduction" title="Add New Deduction to Agent">Agent Other Deductions</a></li>
					    	       		<li class="leaf"><a href="?m=lotherdeductions&a=ListOtherdeduction" title="List Deductions Agent Wise">List Deductions</a></li>
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=deposit&a=AddNewDeposit" title="Open New Security Deposit Accont">Open Security Deposit</a></li>
					    	       		<li class="leaf"><a href="?m=deposit&a=ListDeposits" title="List All The Security Deposits">List Security Deposits</a></li>					    	       		
					    	       		&nbsp;
					    	       		<li class="leaf"><a href="?m=Employee&a=AddNewEmployee" title="Add New Employee to Master File">Add New Employee</a></li>					    	       		
					    	       		<li class="leaf"><a href="?m=Employee&a=EmployeeList" title="List Employee File">List Employees</a></li>
					    	   </ul>				   
					   </td></tr>  

			   
					   <tr><td class=header2><a href="javascript:toggleSubDisplay('Managementreportsub')">Reports</a></td></tr>
					   
					   <tr id="Managementreportsub" class="rowNoDisplay"><td>
	    		   	           <li class="leaf"><a href="javascript:toggleSubDisplay('ItemListing')" title="Reports Required for Day to Day Operation">Management Reports</a></li>					   
						       <ul id="ItemListing" class="rowNoDisplay">
						    		<li class="leaf"><a href="?m=reportemployee&a=ReportEmployee" title="Sector Wise Fixed Allowance">Fixed Allowance</a></li>
									<li class="leaf"><a href="?m=reports&a=ListPaymentsView11" title="Sector Wise Special Allowance">Special Allowance</a></li>
									<li class="leaf"><a href="?m=reports&a=ListJournalsView11" title="Sector Wise Festival Advance">Festival Advance</a></li>
									<li class="leaf"><a href="?m=reports&a=ListJournalsView11" title="Sector Wise Arries And Refunds">Arries And Refunds</a></li>
									<li class="leaf"><a href="?m=reports&a=ListJournalsView11" title="Sector Wise Ration Allowance">Allowance</a></li>
									<li class="leaf"><a href="?m=reports&a=ListJournalsView11" title="Sector Wise Telephone Deduction">Telephone Deduction</a></li>
									<li class="leaf"><a href="?m=reports&a=ListJournalsView11" title="Sector Wise Deth Donation">Deth Donation</a></li>									
						       </ul>				        
					   <ul>
							<li class="leaf"><a href="?m=reportemployee&a=ReportEmployee" title="Listing of Employee">Employee Listing</a></li>							
					   </ul>
					   
	                   		<li class="leaf"><a href="javascript:toggleSubDisplay('AdminListing')" title="Onetime Entries">Administrative Reports</a></li>
			    	   		<ul id="AdminListing" class="rowNoDisplay">
					    	       <li class="leaf"><a href="?m=reportdepartment&a=ReportDepartment" title="List All Departments for printing">Department Listing</a></li>
					    	       <li class="leaf"><a href="?m=reportdesignation&a=ReportDesignation" title="List All Ranks for Printing">Designaton Listing</a></li>
					    	       <li class="leaf"><a href="?m=reportsector&a=ReportSector" title="List All Sectors for Printing">Sector Listing</a></li>
					    	       <li class="leaf"><a href="?m=reportloantype&a=ReportLoanType" title="List All Loan Types for Printing">Loan Types Listing</a></li>
					    	       <li class="leaf"><a href="?m=reportloanstatment&a=ReportLoanStatement" title="List Statement for Printing">Loan Statement</a></li>
					    	</ul>		    	      	
					   </td></tr>
					   
					   <tr><td class=header2><a href="javascript:toggleSubDisplay('advancesub')">Utilities</a></td></tr>
					   <tr id="advancesub" class="rowNoDisplay"><td>
			    		   	   <ul class="">
				    		   	   <li class="leaf"><a href="?m=user&a=Search" title="Users">Users</a></li>
					  			   <li class="leaf"><a href="?m=user&a=ChangeUserPassword" title="Change Password">Change Password</a></li>					  		   
		  				     	</ul>
		  				     	<ul class="">
		  				     	   <li class="leaf"><a href="?m=home&a=HomePage" title="Receipts Listing">Home</a></li>
		  				     	</ul>
		  				     	<ul class="">
		  				     	    <li class="leaf"><a href="?m=salarycontrol&a=EditSalaryControl" title="Set Salary Month And Year">Define Salary Month &amp; Year</a></li> 
		  				     	</ul>
					   </td></tr>		
					   
					   						
				  </table>
			
			    <?php } else {				    
					include_once("user/LoginAction_form.php");
				}?>
						
			 </td><td valign="top" bgcolor="#FFFFFF">
						
				   <table border="0" cellpadding="3" cellspacing="5" align="left">
						<tr>
							<td class="SectionText">
							
							<?php
								  // Display various messages
								  $messages = getMessages(true, true);
								  if ($messages."" != "") {
									 echo "<div id=\"messages\">$messages</div>";
								  }
							?>
								
						     <!-- Main Content -->
						     <?php echo $content; ?>	
					        </td>
				         </tr>
			       </table>
		
		       </td></tr>
	   </table>	
  </td></tr>
</table><!-- /Body -->
<!-- Footer -->

<table cellpadding="3" cellspacing="0" width="100%" >
	<!-- 
	<tr bgcolor="#4682B4">
		<td class="Cbody" style="color: #FFFFFF;" nowrap>Copyright &copy;2009 PINNACLE Technlogies.</td> 
		<td class="Cbody" align="right"><a href="http://www.pinnacle.lk" style="color: #FFFFFF;">supports</a></td>
	</tr>
	-->
	<tr ><td class="RowBottomLine" height="1" colspan="2"></td></tr>
	<tr>
		<td class="Cbody" nowrap><b>Copyright &copy; &nbsp; 2010 &nbsp; PINNACLE Technlogies. &nbsp; All Rights Received.</b></td> 
		<td class="Cbody" align="right"><a href="http://www.pinnacle.lk">supports</a></td>
	</tr>
	
</table>

</body>

</html>
