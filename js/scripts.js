
function validate_email(field,alerttxt)
{
with (field)
{
apos=value.indexOf("@");
dotpos=value.lastIndexOf(".");
if (apos<1||dotpos-apos<2) 
  {alert(alerttxt);return false;}
else {return true;}
}
}

function validate_required(field,alerttxt)
{
with (field)
{
if (value==null||value=="" || value=="0" || value==" " || value=="http://www.")
  {alert(alerttxt);return false;}
else {return true}
}
}

function validate_form(thisform)
{
with (thisform)
{
if (validate_email(email,"Not a valid e-mail address!")==false)
  {email.focus();return false;}
  
if(!document.signup["disclaimer"].checked) 
	{alert("You must agree with our disclaimer!"); return false;}

}
}