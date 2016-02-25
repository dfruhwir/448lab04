function check()
{
	var good = true;
	var mess = "";
	var u = document.forms["f"]["pname"].value;

	if(document.forms["f"]["pname"].value== "")
	{
		mess += "<br>Please enter a password.";
		good = false;
	}
	if(document.forms["f"]["ship"].value== "")
	{
		mess += "<br>Please select a shipping option.";
		good = false;
	}
	if(good==false)
	{
		alert(mess);
		return false;
	}
}
