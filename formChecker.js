function check()
{
	var good = true;
	var mess = "";
	if(document.getElementById("pword")== "")
	{
		mess += "<br>Please enter a password.";
		good = false;
	}
	if(document.getElementById("ship")== "")
	{
		mess += "<br>Please select a shipping option.";
		good = false;
	}
	if(good == false)
	{
		alert(mess);
	}
	else
	{
		document.getElementById("
}
