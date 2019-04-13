function validateLogForm()
{
	var uid=document.formReg.uid.value;
	var pwd=document.formReg.passwrd.value;
	if(uid="")
	{
		alert("fill user-name");
		return false;
	}
	if(pwd=="")
	{
		alert("Password should not be empty");
		return false;
	}
}
