function validateForm() {
    // gathering user data for validation     
    
    var fn = document.reg_form.FirstName.value;
    var ln = document.reg_form.LastName.value;
    var mi = document.reg_form.EmailID.value;
    var bd = document.reg_form.BirthDay.value;
    var bm = document.reg_form.BirthdayMonth.value;
    var by = document.reg_form.BirthdayYear.value;
    var gen = document.reg_form.Gender.value;
    var mob = document.reg_form.MobileNumber.value;
    var pass=document.reg_form.Password.value;

    if (fn == "") {
        alert("First Name must be filled out");
        return false;
    }
    if (ln == "") {
        alert(" Last Name must be filled out");
        return false;
    }
    if (mi == "") {
        alert(" Email ID must be filled out");
        return false;
    }else{
         atpos = mi.indexOf("@");
         dotpos = mi.lastIndexOf("."); 
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            return false;
         }
    }


    if (bd == "-1") {
        alert(" BirthDay must be filled out");
        return false;
    }
    if (bm == "-1") {
        alert(" BirthDay Month must be filled out");
        return false; 
    }
    if (by == "-1") {
        alert(" BirthDay Year must be filled out");
        return false;
    }
    if (gen == "") {
        alert(" Gender must be filled out");
        return false;
    }
    if (mob == "") {
        alert(" Mobile Number must be filled out");
        return false;
    }
    
    if(pass==""){
		alert("Enter the password");
		return false;
	}else{
         if (pass.match(/[a-z]/g) && pass.match(/[A-Z]/g) && pass.match(/[0-9]/g) && pass.match(/[^a-zA-Z\d]/g) && pass.length >= 8){
            alert("Registration Successfull");
            return true;       
         }else{
            alert("Password didn't match the criteria")
        } 
    }

}
