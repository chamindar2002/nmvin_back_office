<?php
include('banksArray.php');
//$banks[0] = "";
//$banks[1] = "Bank Of Ceylon";	
//$banks[2] = "Commercial Bank";	
//$banks[3] = "DFCC Bank";	
//$banks[4] = "Hatton Nationa Bank";	
//$banks[5] = "HSBC Bank";	
//$banks[6] = "Nations Trust Bank";
//$banks[7] = "NDB Bank";		
//$banks[8] = "Pan Asia Bank";	
//$banks[9] = "Peoples Bank";	
//$banks[10] = "Seylan Bank";	

// $banks = Array("0"=>"" ,
// 				"BOC"=>"Bank Of Ceylon" ,
//			    "COM"=>"Commercial Bank Of Ceylon" ,
//			    "DFCC"=>"DFCC Bank" ,
//			    "HNB"=>"Hatton National Bank" ,
//				"HSBC"=>"HSBC Bank" ,
//				"NTB"=>"Nations Trust Bank" ,
//				"NDB"=>"National Development Bank" ,
//				"PABC"=>"Pan Asia Bank" ,
//				"PBC"=>"Peoples Bank" ,
//				"SEYB"=>"Seylan Bank" ,
// 				"SAMP"=>"Sampath Bank",
// 				"UB"=>"Union Bank"
//				);
?>
<table id='tblcheque'>
<tr><td colspan='4'><input type='button' name='addcheque' id='addcheque' class='buttontype1' value='+' onclick="addNewTableRow('tblcheque')"></td></tr>
<tr><th>Cheque No</th><th>Bank</th><th>Amount</th><th>#</th></tr>
<tr>
<td><input type='text' name='chqueno0' id='chqueno0' value=''></td>
<td>
<select name='bank0' class="chq_bank_selctd" id='bank0'>
<?php
	foreach($banks As $key=>$value){
		echo "<option value=$key>$value</option>";
	}
?>
</select>
</td>
<td><input type='text' name='amt0' id='amt0' value='' onkeyup="AddChequesAmounts(amt0)"></td>
<td><input type="checkbox" name="sel0" id="sel0" readonly="readonly" size="10" onclick="resetamount(this.id)" checked></td>
</tr>
<input type='hidden' name="count" id='count' value='0'></input>
<input type='hidden' name="chqtotal" id='chqtotal' value='0'></input>
</table>

<script type='text/javascript'>
function addNewTableRow(tblID) {
	var i = document.getElementById('count').value;
	var chequeno = document.getElementById('chqueno'+i).value;
	var bank = document.getElementById('bank'+i).value;
	var amount = document.getElementById('amt'+i).value;
	//var product = document.getElementById('products'+i).value;
	var rcounts = document.getElementById('count');
	
	if(chequeno == "" || chequeno.length<5){
		alert("Error: Invalid Cheque Number");
		document.getElementById('chequeno'+i).focus();
	} 
	else if(bank == 0){
		alert("Bank Not Selected");
		document.getElementById('bank'+i).focus();
	}
	else if(amount == "" || !IsNumeric(amount)){
		alert("Error: Invalid Amount.");
		document.getElementById('amt'+i).focus();
	}
	else{
		 i++;
		 rcounts.value = i;
		 var table = document.getElementById(tblID);	
         var tblRows = table.rows.length;
         var row = table.insertRow(tblRows);

           var cell1 = row.insertCell(0);
		   var element1 = document.createElement("input");
		   element1.size ="20";
		   element1.name = "chqueno" + i;
		   element1.id = "chqueno" + i;
		   elementId = "chqueno" + i;
		   cell1.appendChild(element1);

			
		   var cell2 = row.insertCell(1);
		   var element2 = document.createElement("select");
		   //element2.style.width = "150px";
		   element2.name = "bank" + i;
		   element2.id = "bank" + i;
		   elementId = "bank" + i;
                   element2.className = "chq_bank_selctd";
		   //element2.onchange = new Function("ceckduplicates(\""+ elementId +"\")");
			   <?php
			   $j = 0;
			    foreach($banks As $key=>$value){
					//echo "<option value=$key>$value</option>";
					echo "var opt1 = new Option(\"$value\", \"$key\");";
                    echo "element2.options[$j] = opt1;";
                    $j++;
				}
			   ?>
		   cell2.appendChild(element2);
         

		   var cell3 = row.insertCell(2);
		   var element3 = document.createElement("input");
		   element3.size ="20";
		   element3.name = "amt" + i;
		   element3.id = "amt" + i;
		   elementId = "amt" + i;
		   element3.onkeyup = new Function("AddChequesAmounts('"+ elementId +"')");
		   cell3.appendChild(element3);

		   var cell4 = row.insertCell(3);
		   var element4 = document.createElement("input");
		   element4.type = "checkbox";
		   element4.name = "sel" + i;
		   element4.id = "sel" + i;
		   elementId = "sel" + i;
		   element4.checked = true; 
		   element4.onclick = new Function("resetamount(\""+ elementId +"\")");
		   cell4.appendChild(element4);	
       
	}
	//alert(wsprice);

}

function resetamount(chkid){
	
	//chkid.value = 0;
	var k = Number(chkid.slice(3));
	document.getElementById('amt'+k).value = 0;
	var chkbox = document.getElementById('sel'+k);
	var amtbox = document.getElementById('amt'+k);
	chkbox.disabled = true;
	amtbox.disabled = true;
	AddChequesAmounts("");
}

function AddChequesAmounts(elementId){
	
	var rcount = Number(document.getElementById('count').value);
	var chqtotal = Number(document.getElementById("chqtotal").value);
	chqtotal = 0;
	
	for(i=0;i<=rcount;i++){
		var chqamt = Number(document.getElementById("amt"+i).value);
		chqtotal = chqtotal + chqamt; 
	}
	document.getElementById("chqtotal").value = chqtotal;
	calculate(chqtotal);
}

function IsNumeric(strString)
//check for valid numeric strings	
{
var strValidChars = "0123456789.-";
var strChar;
var blnResult = true;

if (strString.length == 0) return false;

//test strString consists of valid characters listed above
for (i = 0; i < strString.length && blnResult == true; i++)
{
strChar = strString.charAt(i);
if (strValidChars.indexOf(strChar) == -1)
{
blnResult = false;
}
}
return blnResult;
}
</script>