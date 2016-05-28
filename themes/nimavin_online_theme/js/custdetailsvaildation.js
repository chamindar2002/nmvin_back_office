
    function emailCheck(emailStr) {
        var checkTLD=1;
        var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
        var emailPat=/^(.+)@(.+)$/;
        var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
        var validChars="\[^\\s" + specialChars + "\]";
        var quotedUser="(\"[^\"]*\")";
        var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
        var atom=validChars + '+';
        var word="(" + atom + "|" + quotedUser + ")";
        var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
        var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
        var matchArray=emailStr.match(emailPat);
        var emailvalidmessages = "";
        
        if (matchArray==null) {
            return("You must supply a valid email address.");
            //return false;
        }
        var user=matchArray[1];
        var domain=matchArray[2];
        for (i=0; i<user.length; i++) {
            if (user.charCodeAt(i)>127) {
                return ("The supplied email user name contains invalid characters.");
                //return false;
            }
        }
        for (i=0; i<domain.length; i++) {
            if (domain.charCodeAt(i)>127) {
                return ("The supplied email domain contains invalid characters.");
                //return false;
            }
        }
        if (user.match(userPat)==null) {
            return ("The supplied email address contains invalid characters.");
            //return false;
        }
        var IPArray=domain.match(ipDomainPat);
        if (IPArray!=null) {
            for (var i=1;i<=4;i++) {
                if (IPArray[i]>255) {
                    return ("The supplied email IP address is invalid.");
                    //return false;
                }
            }
            //return true;
        }
        var atomPat=new RegExp("^" + atom + "$");
        var domArr=domain.split(".");
        var len=domArr.length;
        for (i=0;i<len;i++) {
            if (domArr[i].search(atomPat)==-1) {
                return ("The domain name does not seem to be valid.");
                //return false;
            }
        }
        if (checkTLD && domArr[domArr.length-1].length!=2 &&
            domArr[domArr.length-1].search(knownDomsPat)==-1) {
            return ("The supplied email address must end in a well known domain or two letter " + "country code.");
            //return false;
        }
        if (len<2) {
            return ("The supplied email address is missing a hostname.");
            //return false;
        }
        return "emailok";
    }



function validaterequired_fileds(){
    var fname = document.getElementById('firstname');
	var lname = document.getElementById('lasttname');
	var passportno = document.getElementById('passportno');
	var addl1 = document.getElementById('addl1');
	var addl2 = document.getElementById('addl2');
        var postcode = document.getElementById('pcode');
        var emailadd = document.getElementById('email');
        
        //var pword1 = document.getElementById('password1');
        //var pword2 = document.getElementById('password2');
	
        var landphone = document.getElementById('landline');
	var mobile = document.getElementById('mobile');
        var message = "";
        
        var validemail = emailCheck(emailadd.value);
        
	if(fname.value == "" || fname.value.length< 4){
		message += "First Name Is Invalid";
		fname.focus();
	}else if(lname.value == "" || lname.value.length<4){
		message += "Last Name Is Invalid";
		lname.focus();
	}
//      else if(passportno.value == "" || passportno.value.length<8){
//		message += "Invalid Passport Number";
//		passportno.focus();
//	}
        else if(addl1.value == "" || addl1.value.length<5 ){
		message += "Invalid Address Line 1";
		addl1.focus();
	}else if(addl2.value == "" || addl2.value.length<5 ){
                message += "Invalid Address Line 2";
		addl2.focus();
        }else if(postcode.value == "" || postcode.value.length<3){
                message += "Invalid Post/Zip Code"
                postcode.focus();    
        }
//        else if(emailadd.value == "" || validemail != "emailok"){
//                message += validemail;
//                emailadd.focus();
//        }else if(pword1.value == "" || pword1.value.length < 4){
//                message += "Invalid Password, Requires minimum of 4 characters";
//                pword1.focus();
//        }else if(pword2.value != pword1.value){
//                message += "Passwords do not Match";
//                pword2.focus();
//        }
        else if(!IsNumeric(mobile.value) || mobile.value.length<10 ){
		message += "Invalid Mobile Phone Number";
		mobile.focus();
	}else if(!IsNumeric(landphone.value) || landphone.value.length<10 ){
		message += "Invalid Land Phone Number";
		landphone.focus();
	}
	else{
		message += "OK";
	}
       
      return message;
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